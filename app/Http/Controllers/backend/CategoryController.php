<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Category::where('category.status', '!=', 0)
            ->orderBy('category.created_at', 'DESC')
            ->leftJoin('category as parent', 'category.parent_id', '=', 'parent.id')
            ->select("category.id", "category.name", "category.image", "category.slug", "category.created_at","category.status", "category.sort_order","category.parent_id", 'parent.name as parent_name')
            ->paginate(7);

        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlparentid .= "<option value='" . $row->id . "'>" . $row->name . "</option>";
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>Sau:" . $row->name . "</option>";
        }

        return view("backend.category.index", compact("list", "htmlparentid", "htmlsortorder"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $list = Category::where('category.status', '!=', 0)
            ->orderBy('category.created_at', 'DESC')
            ->leftJoin('category as parent', 'category.parent_id', '=', 'parent.id')
            ->select("category.id", "category.name", "category.image", "category.slug", "category.status", "category.parent_id", 'parent.name as parent_name')
            ->paginate(7);
        $htmlparentid = "";
        $htmlsortorder = "";
        foreach ($list as $row) {
            $htmlparentid .= "<option value='" . $row->id . "'>" . $row->name . "</option>";
            $htmlsortorder .= "<option value='" . ($row->sort_order + 1) . "'>Sau:" . $row->name . "</option>";
        }

        return view("backend.category.create", compact("list", "htmlparentid", "htmlsortorder"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate request data
    $request->validate([
        'name' => 'required|string|max:1000',
        'slug' => 'required|string|max:1000',
        'parent_id' => 'required|integer',
        'sort_order' => 'required|integer',
        'description' => 'nullable|string|max:1000',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'status' => 'required|integer|in:1,2',
    ]);

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('assets/images/category/'), $imageName);
    } else {
        $imageName = null;
    }

    $createdBy = auth()->id() ?? 1;

    Category::create([
        'name' => $request->name,
        'slug' => $request->slug,
        'parent_id' => $request->parent_id,
        'sort_order' => $request->sort_order,
        'description' => $request->description,
        'image' => $imageName,
        'status' => $request->status,
        'created_by' => $createdBy,
    ]);

    // Redirect with success message
    return redirect()->route('admin.category.index')->with('success', 'Tạo danh mục thành công.');
}


    // public function store(Request $request)
    // {
    //     // Validate request data
    //     $request->validate([
    //         'name' => 'required|string|max:1000',
    //         'slug' => 'required|string|max:1000',
    //         'description' => 'nullable|string|max:1000',
    //         'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    //         'status' => 'required|integer|in:1,2',
    //         'parent_id' => 'nullable|integer|exists:category,id',
    //         'sort_order' => 'nullable|integer',
    //     ]);

    //     // Handle image upload
    //     if ($request->hasFile('image')) {
    //         $image = $request->file('image');
    //         $imageName = time() . '.' . $image->getClientOriginalExtension();
    //         $image->move(public_path('assets/images/category/'), $imageName);
    //     } else {
    //         $imageName = null;
    //     }

    //     // Get the authenticated user ID or set default
    //     $createdBy = auth()->id() ?? 1;

    //     // Create new category instance and set properties
    //     $category = new Category();
    //     $category->name = $request->name;
    //     $category->description = $request->description;
    //     $category->parent_id = $request->parent_id;
    //     $category->sort_order = $request->sort_order;
    //     $category->image = $imageName;
    //     $category->status = $request->status;
    //     $category->slug = Str::of($request->slug)->slug('-');
    //     $category->created_by = $createdBy;
    //     $category->created_at = now();

    //     // Save the category
    //     $category->save();

    //     // Redirect with success message
    //     return redirect()->route('admin.category.index')->with('success', 'Thêm danh mục thành công.');
    // }

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
            $request->image->move(public_path('assets/images/category/'), $imageName);
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
