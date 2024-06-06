<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Menu::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name', 'link', 'position', 'type', 'status')
            ->paginate(7);
        return view('backend.menu.index', compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Đảm bảo bạn đã import các model cần thiết ở đầu file
        // $categories = Category::all(); // Nếu cần
        // $brands = Brand::all(); // Nếu cần
        return view('backend.menu.create');
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request...
        $request->validate([
            'name' => 'required|string|max:255',
            'link' => 'required|string|max:1000',
            'sort_order' => 'nullable|integer',
            'parent_id' => 'nullable|integer',
            'type' => 'required|string|max:100',
            'position' => 'required|string|max:255',
            'status' => 'required|integer',
        ]);

        // Create the menu
        Menu::create([
            'name' => $request->name,
            'link' => $request->link,
            'sort_order' => $request->sort_order ?? 0,
            'parent_id' => $request->parent_id ?? 0,
            'type' => $request->type,
            'position' => $request->position,
            'status' => $request->status,
            'created_by' => 1, // Hardcode or get from authenticated user
        ]);

        return redirect()->route('admin.menu.index')->with('success', 'Tạo menu thành công');
    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Lấy thông tin sản phẩm theo ID
        $list = Menu::find($id);
        return view('backend.list.show', compact('list'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $list = Menu::find($id);
        $menus = Menu::where(['id', '!=', $id],['name', '!=', $name])->get();
        return view('backend.menu.edit', compact('list', 'menus'));
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $menu->name = $request->name;
        $menu->link = $request->link;
        $menu->sort_order = $request->sort_order ?? 0;
        $menu->parent_id = $request->parent_id ?? 0;
        $menu->type = $request->type;
        $menu->position = $request->position;
        $menu->status = $request->status;

        $menu->save();

        return redirect()->route('admin.menu.index')->with('success', 'Cập nhật menu thành công');
    }


    /**
     * Remove the specified resource from storage.
     */

    public function delete($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $menu->status = 0;
            $menu->save();
            return redirect()->route('admin.menu.index')->with('success', 'Xóa menu thành công');
        }
        return redirect()->route('admin.menu.index')->with('error', 'Không tìm thấy menu');
    }


    public function trash()
    {
        $brands = Menu::all();
        $products = Menu::where('status', '==', 0)->get();
        return view('backend.menu.trash', compact('categories', 'brands', 'products'));
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $menu->delete();
            return redirect()->route('admin.menu.trash')->with('success', 'Xóa menu thành công');
        }
        return redirect()->route('admin.menu.trash')->with('error', 'Menu không tồn tại');
    }

    public function restore(Request $request, $id)
    {
        $menu = Menu::where('id', $id)->where('status', 0)->first();

        if (!$menu) {
            return redirect()->route('admin.menu.trash')->with('error', 'Không tìm thấy menu hoặc menu không ở trạng thái bị xóa');
        }

        // Cập nhật thông tin menu từ request hoặc giữ nguyên nếu không có
        $menu->name = $request->name ?? $menu->name;
        $menu->link = $request->link ?? $menu->link;
        $menu->sort_order = $request->sort_order ?? $menu->sort_order;
        $menu->parent_id = $request->parent_id ?? $menu->parent_id;
        $menu->type = $request->type ?? $menu->type;
        $menu->position = $request->position ?? $menu->position;
        $menu->status = 1;

        // Xử lý hình ảnh nếu được cung cấp
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('assets/images'), $imageName);
            $menu->image = $imageName;
        }

        $menu->save();

        return redirect()->route('admin.menu.trash')->with('success', 'Khôi phục menu thành công');
    }
}
