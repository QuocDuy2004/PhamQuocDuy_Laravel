<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Brand::where("status", "!=", 0)
            ->orderBy("created_at", "DESC")
            ->select("id", "name", "slug", "image", "description", "status")
            ->paginate(7);
        return view('backend.brand.index', compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'sort_order' => 'required|integer',
            'description' => 'nullable|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer',
        ]);

        // Handle the image upload
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/brand/'), $imageName);
        } else {
            $imageName = null; // or handle this case differently if image is required
        }

        // Create the brand
        Brand::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'sort_order' => $request->sort_order,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status,
            'created_by' => 1,
        ]);

        return redirect()->route('admin.brand.create')->with('success', 'Tạo thương hiệu thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $brand = Brand::find($id);
        return view('backend.brand.show', compact('brand'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return view('backend.brand.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer',
        ]);

        $brand->name = $request->name;
        $brand->slug = $request->slug;
        $brand->description = $request->description;
        $brand->status = $request->status;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/brand/'), $imageName);
            $brand->image = $imageName;
        }

        $brand->save();

        return redirect()->route('admin.brand.index')->with('success', 'Cập nhật thương hiệu thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            $brand->status = 0;
            $brand->save();
            return redirect()->route('admin.brand.index')->with('success', 'Xóa thương hiệu thành công');
        }
        return redirect()->route('admin.brand.index')->with('error', 'Không tìm thấy thương hiệu');
    }

    public function trash()
    {
        $brands = Brand::where('status', '=', 0)->get();
        return view('backend.brand.trash', compact('brands'));
    }

    public function destroy($id)
    {
        $brand = Brand::find($id);
        if ($brand) {
            $brand->delete();
            return redirect()->route('admin.brand.trash')->with('success', 'Xóa thương hiệu thành công');
        }
        return redirect()->route('admin.brand.trash')->with('error', 'Sản phẩm không tồn tại');
    }

    public function restore(Request $request, $id)
    {
        $brand = Brand::where('id', $id)->where('status', 0)->first();

        if (!$brand) {
            return redirect()->route('admin.brand.trash')->with('error', 'Không tìm thấy thương hiệu hoặc thương hiệu không ở trạng thái bị xóa');
        }

        $request->validate([
            'name' => 'nullable|string|max:255',
            'slug' => 'nullable|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $brand->name = $request->name ?? $brand->name;
        $brand->slug = $request->slug ?? $brand->slug;
        $brand->description = $request->description ?? $brand->description;
        $brand->status = 1;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/brand/'), $imageName);
            $brand->image = $imageName;
        }

        $brand->save();
        return redirect()->route('admin.brand.trash')->with('success', 'Khôi phục thương hiệu thành công');
    }
}
