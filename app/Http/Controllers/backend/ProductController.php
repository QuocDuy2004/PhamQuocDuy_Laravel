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
        $categories = Category::all();
        $brands = Brand::all();
        $list = Product::where('status', '!=', 0)->paginate(7);
        return view('backend.product.index', compact('categories', 'brands', 'list'));
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

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/product/'), $imageName);
        } else {
            $imageName = null;
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


        return redirect()->route('admin.product.create')->with('success', 'Tạo sản phẩm thành công');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Lấy thông tin sản phẩm theo ID
        $product = Product::find($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('backend.product.show', compact('product', 'categories', 'brands'));
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
            $request->image->move(public_path('assets/images/product/'), $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Cập nhập sản phẩm thành công');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delete($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->status = 0;
            $product->save();
            return redirect()->route('admin.product.index')->with('success', 'Xóa sản phẩm thành công');
        }
        return redirect()->route('admin.product.index')->with('error', 'Không tìm thấy sản phẩm');
    }

    public function trash()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $products = Product::where('status', '==', 0)->get();
        return view('backend.product.trash', compact('categories', 'brands', 'products'));
    }

    public function destroy($id)
    {
        $product = Product::find($id);
        if ($product) {
            $product->delete();
            return redirect()->route('admin.product.trash')->with('success', 'Xóa sản phẩm thành công');
        }
        return redirect()->route('admin.product.trash')->with('error', 'Sản phẩm không tồn tại');
    }
    public function restore(Request $request, $id)
    {
        $product = Product::where('id', $id)->where('status', 0)->first();

        if (!$product) {
            return redirect()->route('admin.product.trash')->with('error', 'Không tìm thấy sản phẩm hoặc sản phẩm không ở trạng thái bị xóa');
        }
        $product->name = $request->name ?? $product->name;
        $product->slug = $request->slug ?? $product->slug;
        $product->detail = $request->detail ?? $product->detail;
        $product->description = $request->description ?? $product->description;
        $product->price = $request->price ?? $product->price;
        $product->pricesale = $request->pricesale ?? $product->pricesale;

        $product->status = 1;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images/product/'), $imageName);
            $product->image = $imageName;
        }
        $product->save();
        return redirect()->route('admin.product.trash')->with('success', 'Khôi phục sản phẩm thành công');
    }
}
