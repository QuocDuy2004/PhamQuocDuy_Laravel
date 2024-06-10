<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Topic;
use Illuminate\Http\Request;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Topic::where("status", "!=", 0)
        ->orderBy("created_at", "DESC")
        ->select('id', 'slug', 'name','sort_order', 'description','status')
        ->paginate(7);
        return view('backend.topic.index',compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.topic.create');
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'sort_order' => 'required|integer',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/topic/'), $imageName);
        } else {
            $imageName = null;
        }

        // Create the topic
        Topic::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'sort_order' => $request->sort_order,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status,
            'created_by' => 1,
        ]);


        return redirect()->route('admin.topic.create')->with('success', 'Tạo đề tài thành công');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Lấy thông tin đề tài theo ID
        $topic = Topic::find($id);
        return view('backend.topic.show', compact('topic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $topic = Topic::find($id);
        $topics = Topic::all();
        return view('backend.topic.edit', compact('topic','topics'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $topic = Topic::find($id);
        $topic->name = $request->name;
        $topic->slug = $request->slug;
        $topic->sort_order = $request->sort_order;
        $topic->description = $request->description;
        $topic->status = $request->status;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/topic/'), $imageName);
            $topic->image = $imageName;
        }

        $topic->save();

        return redirect()->route('admin.topic.index')->with('success', 'Cập nhập đề tài thành công');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delete($id)
    {
        $topic = Topic::find($id);
        if ($topic) {
            $topic->status = 0;
            $topic->save();
            return redirect()->route('admin.topic.index')->with('success', 'Xóa đề tài thành công');
        }
        return redirect()->route('admin.topic.index')->with('error', 'Không tìm thấy đề tài');
    }

    public function trash()
    {
        $topic = Topic::where('status', '==', 0)->get();
        return view('backend.topic.trash', compact('topic'));
    }

    public function destroy($id)
    {
        $topic = Topic::find($id);
        if ($topic) {
            $topic->delete();
            return redirect()->route('admin.topic.trash')->with('success', 'Xóa đề tài thành công');
        }
        return redirect()->route('admin.topic.trash')->with('error', 'đề tài không tồn tại');
    }
    public function restore(Request $request, $id)
    {
        $topic = Topic::where('id', $id)->where('status', 0)->first();

        if (!$topic) {
            return redirect()->route('admin.topic.trash')->with('error', 'Không tìm thấy đề tài hoặc đề tài không ở trạng thái bị xóa');
        }
        $topic->name = $request->name ?? $topic->name;
        $topic->slug = $request->slug ?? $topic->slug;
        $topic->sort_order = $request->sort_order ?? $topic->sort_order;
        $topic->description = $request->description ?? $topic->description;

        $topic->status = 1;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/topic/'), $imageName);
            $topic->image = $imageName;
        }
        $topic->save();
        return redirect()->route('admin.topic.trash')->with('success', 'Khôi phục đề tài thành công');
    }
}
