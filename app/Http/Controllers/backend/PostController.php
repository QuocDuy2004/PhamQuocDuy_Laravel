<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Providers\ViewServiceProvider;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Post::where("status", "!=", 0)
            ->orderBy("created_at", "DESC")
            ->select('id', 'detail', 'image', 'title', 'slug', 'type', 'description', 'created_at', 'status')
            ->paginate(7);
        return view('backend.post.index', compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'title' => 'required|string|max:1000',
            'slug' => 'required|string|max:1000',
            'detail' => 'required|string',
            'description' => 'nullable|string|max:1000',
            'type' => 'required|in:post,page',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:1,2',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/post/'), $imageName);
        } else {
            $imageName = null; // or handle this case differently if image is required
        }

        // Create the product
        Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'detail' => $request->detail,
            'description' => $request->description,
            'type' => $request->type,
            'image' => $imageName,
            'status' => $request->status,
            'created_by' => 1,
        ]);


        return redirect()->route('admin.post.index')->with('success', 'Tạo bài viết thành công');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Lấy thông tin sản phẩm theo ID
        $post = Post::find($id);
        $posts = Post::all();
        return view('backend.post.show', compact('post','posts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $post = Post::find($id);
        return view('backend.post.edit', compact('post'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->slug = $request->slug;
        $post->detail = $request->detail;
        $post->description = $request->description;
        $post->status = $request->status;
        $post->type = $request->type;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/post/'), $imageName);
            $post->image = $imageName;
        }
        $post->save();
        return redirect()->route('admin.post.index')->with('success', 'Cập nhật bài viết thành công');
    }



    /**
     * Remove the specified resource from storage.
     */

    public function delete($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->status = 0;
            $post->save();
            return redirect()->route('admin.post.index')->with('success', 'Xóa bài viết thành công');
        }
        return redirect()->route('admin.post.index')->with('error', 'Không tìm thấy bài viết');
    }

    public function trash()
    {
        $post = Post::where('status', 0)->get();
        return view('backend.post.trash', compact('post'));
    }
    public function destroy($id)
    {
        $post = Post::find($id);
        if ($post) {
            $post->delete();
            return redirect()->route('admin.post.trash')->with('success', 'Xóa bài viết thành công');
        }
        return redirect()->route('admin.post.trash')->with('error', 'Sản phẩm không tồn tại');
    }
    public function restore(Request $request, $id)
    {
        $post = Post::where('id', $id)->where('status', 0)->first();

        if (!$post) {
            return redirect()->route('admin.post.trash')->with('error', 'Không tìm thấy sản phẩm hoặc sản phẩm không ở trạng thái bị xóa');
        }
        $post->title = $request->title ?? $post->title;
        $post->slug = $request->slug ?? $post->slug;
        $post->detail = $request->detail ?? $post->detail;
        $post->description = $request->description ?? $post->description;

        $post->status = 1;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/post/'), $imageName);
            $post->image = $imageName;
        }
        $post->save();
        return redirect()->route('admin.post.trash')->with('success', 'Khôi phục bài viết thành công');
    }
}
