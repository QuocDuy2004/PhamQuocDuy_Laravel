<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Category::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select("id", "name", "slug", "parent_id", "sort_order", "description", "image", "slug", "created_at", "status")
            ->paginate(7);
        return view("backend.category.index", compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:1000',
            'slug' => 'required|string|max:1000',
            'description' => 'nullable|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer|in:1,2',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images'), $imageName);
        } else {
            $imageName = null;
        }
        $createdBy = auth()->id();
        if (is_null($createdBy)) {
            return redirect()->route('admin.category.index')->with('error', 'User is not authenticated.');
        }
        Category::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'description' => $request->description,
            'image' => $imageName,
            'status' => $request->status,
            'created_by' => $createdBy,
        ]);

        return redirect()->route('admin.category.index')->with('success', 'Tạo danh mục thành công.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('admin.category.index')->with('error', 'Không tìm thấy danh mục.');
        }

        return view('backend.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('admin.category.index')->with('error', 'Không tìm thấy danh mục.');
        }

        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('admin.category.index')->with('error', 'Không tìm thấy danh mục.');
        }

        $request->validate([
            'name' => 'required|string|max:1000',
            'slug' => 'required|string|max:1000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string|max:1000',
            'parent_id' => 'nullable|integer',
            'sort_order' => 'nullable|integer',
            'status' => 'required|integer|in:0,1,2', // Adjusted to include 0 as well
        ]);

        $category->name = $request->name;
        $category->slug = $request->slug;
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $category->image = $imageName;
        }
        $category->parent_id = $request->parent_id ?? 0; // Ensure parent_id defaults to 0 if null
        $category->sort_order = $request->sort_order ?? 0; // Ensure sort_order defaults to 0 if null
        $category->description = $request->description;
        $category->status = $request->status;

        $category->updated_by = auth()->id(); // Update the 'updated_by' field

        $category->save();

        return redirect()->route('admin.category.index')->with('success', 'Cập nhật danh mục thành công.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->status = 0;
            $category->save();
            return redirect()->route('admin.category.index')->with('success', 'Xóa danh mục thành công.');
        }
        return redirect()->route('admin.category.index')->with('error', 'Không tìm thấy danh mục.');
    }

    public function trash()
    {
        $categories = Category::where('status', 0)->get();
        return view('backend.category.trash', compact('categories'));
    }


    public function destroy($id)
    {
        $category = Category::find($id);
        if ($category) {
            $category->delete();
            return redirect()->route('admin.category.trash')->with('success', 'Xóa danh mục thành công.');
        }
        return redirect()->route('admin.category.trash')->with('error', 'Không tìm thấy danh mục.');
    }

    public function restore($id)
    {
        $category = Category::where('id', $id)->where('status', 0)->first();

        if (!$category) {
            return redirect()->route('admin.category.trash')->with('error', 'Không tìm thấy danh mục hoặc danh mục không ở trạng thái bị xóa.');
        }

        $category->status = 1;
        $category->save();

        return redirect()->route('admin.category.trash')->with('success', 'Khôi phục danh mục thành công.');
    }
}
