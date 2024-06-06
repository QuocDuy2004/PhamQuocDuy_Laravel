<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Banner::where("status", "!=", 0)
            ->orderBy("created_at", "DESC")
            ->select("id", "name", "link", "image", "position", "description", "created_at", "status")
            ->paginate(7);
        return view('backend.banner.index', compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.banner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request...
    $request->validate([
        'name' => 'required|string|max:255',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'link' => 'required|string|max:1000',
        'position' => 'required|string|max:255',
        'description' => 'nullable|string|max:1000',
        'status' => 'required|integer',
    ]);

    // Handle the image upload
    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/images'), $imageName);
    } else {
        $imageName = null; // or handle this case differently if image is required
    }

    // Create the banner
    Banner::create([
        'name' => $request->name,
        'image' => $imageName,
        'link' => $request->link,
        'position' => $request->position,
        'description' => $request->description,
        'status' => $request->status,
        'created_by' => 1,
    ]);

    return redirect()->route('admin.banner.create')->with('success', 'Tạo banner thành công');
}


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        $parentCategories = Banner::where('status', '!=', 0)->pluck('name', 'id');
        // Lấy danh sách các thể loại cha để hiển thị trong dropdown
        return view('backend.banner.edit', compact('banner', 'parentCategories'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $banner = Banner::find($id);

        // Validate the request...
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'link' => 'required|string|max:1000',
            'position' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
            'status' => 'required|integer',
        ]);

        $banner->name = $request->name;
        $banner->link = $request->link;
        $banner->position = $request->position;
        $banner->description = $request->description;
        $banner->status = $request->status;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $banner->image = $imageName;
        }

        $banner->save();

        return redirect()->route('admin.banner.index')->with('success', 'Cập nhật banner thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            $banner->status = 0;
            $banner->save();
            return redirect()->route('admin.banner.index')->with('success', 'Xóa banner thành công');
        }
        return redirect()->route('admin.banner.index')->with('error', 'Không tìm thấy banner');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $banner = Banner::find($id);
        return view('backend.banner.show', compact('banner'));
    }

    /**
     * Display a listing of the trashed resource.
     */
    public function trash()
    {
        $banners = Banner::where('status', 0)->get();
        return view('backend.banner.trash', compact('banners'));
    }

    /**
     * Restore the specified resource from trash.
     */
    public function restore($id)
    {
        $banner = Banner::where('id', $id)->where('status', 0)->first();

        if (!$banner) {
            return redirect()->route('admin.banner.trash')->with('error', 'Không tìm thấy banner hoặc banner không ở trạng thái bị xóa');
        }

        $banner->status = 1;
        $banner->save();

        return redirect()->route('admin.banner.trash')->with('success', 'Khôi phục banner thành công');
    }

    /**
     * Permanently delete the specified resource from storage.
     */
    public function destroy($id)
    {
        $banner = Banner::find($id);
        if ($banner) {
            $banner->delete();
            return redirect()->route('admin.banner.trash')->with('success', 'Xóa banner thành công');
        }
        return redirect()->route('admin.banner.trash')->with('error', 'Banner không tồn tại');
    }
}
