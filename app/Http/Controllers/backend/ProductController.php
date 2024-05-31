<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use App\Providers\ViewServiceProvider;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $list = Product::where("products.status", "!=", 0)
        //     ->join("categories", "products.category_id", "=", "categories.id")
        //     ->join("brands", "products.brand_id", "=", "brands.id")
        //     ->orderBy("products.created_at", "DESC")
        //     ->select("products.id", "products.slug", "products.name", "products.image", "categories.name as categoryname", "brands.name as brandname")
        //     ->paginate(7);
        return view('backend.product.index');
    }



    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.product.create', compact('categories', 'brands'));
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'category_id' => 'required|integer',
            'brand_id' => 'required|integer',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'detail' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price' => 'required|numeric',
            'pricesale' => 'nullable|numeric',
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

        // Create the product
        Product::create([
            'category_id' => $request->category_id,
            'brand_id' => $request->brand_id,
            'name' => $request->name,
            'slug' => $request->slug,
            'detail' => $request->detail,
            'description' => $request->description,
            'image' => $imageName,
            'price' => $request->price,
            'pricesale' => $request->pricesale,
            'status' => $request->status,
            'created_by' => 1,
        ]);


        return redirect()->route('admin.product.index')->with('success', 'Product created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // $list = Product::where("products.status", "!=", 0)
        //     ->join("categories", "products.category_id", "=", "categories.id")
        //     ->join("brands", "products.brand_id", "=", "brands.id")
        //     ->orderBy("products.created_at", "DESC")
        //     ->select("products.id", "products.slug", "products.name", "products.image", "categories.name as categoryname", "brands.name as brandname")
        //     ->paginate(7);
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.product.show', compact('categories', 'brands'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.product.edit', compact('product', 'categories', 'brands'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->slug = $request->slug;
        $product->detail = $request->detail;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->pricesale = $request->pricesale;
        $product->status = $request->status;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Cập nhập thành công');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy(Request $request)
    {
        $ids = $request->input('selected_ids');
        if (!empty($ids)) {
            Product::whereIn('id', $ids)->delete();
            return redirect()->route('admin.product.trash')->with('success', 'Xóa sản phẩm thành công');
        }
        return redirect()->route('admin.product.trash')->with('error', 'Xóa sản phẩm thất bại');
    }


    public function trash()
    {

        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.product.trash', compact('categories', 'brands'));
    }

    public function restore(Request $request)
    {
        $ids = $request->input('selected_ids');
        if (!empty($ids)) {
            Product::whereIn('id', $ids)->restore();
            return redirect()->route('admin.product.trash')->with('success', 'Khôi phục sản phẩm thành công');
        }
        return redirect()->route('admin.product.trash')->with('error', 'Khôi phục sản phẩm thất bại');
    }
}
