<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Menu;
use App\Models\Category;
use App\Models\Topic;
use App\Models\Post;
use App\Models\Brand;
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
            ->select('id', 'name', 'link', 'sort_order', 'parent_id', 'position', 'table_id', 'type', 'status')
            ->paginate(7);


        return view('backend.menu.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $list_category = Category::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name')
            ->get();
        $list_brand = Brand::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name')
            ->get();
        $list_topic = Topic::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name')
            ->get();
        $list_page = Post::where('status', '!=', 0)
            ->where('type', '=', 'page')
            ->orderBy('created_at', 'DESC')
            ->select('id', 'title')
            ->get();
        return view('backend.menu.create', compact('list_category','list_brand','list_topic','list_page'));
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if (isset($request->createCategory)) {
            $listid = $request->categoryid;
            foreach ($listid as $id) {
                $category = Category::find($id);
                if ($category != null) {
                    $menu = new Menu();
                    $menu->name = $category->name;
                    $menu->link = 'danh-muc/' . $category->slug;
                    $menu->sort_order = 0;
                    $menu->parent_id = 0;
                    $menu->type = 'category';
                    $menu->position = $request->postion;
                    $menu->table_id = $id;
                    $menu->created_at = date('Y-m-d H:i:s');
                    $menu->created_by = Auth::id() ?? 1;
                    $menu->status = $category->status;
                    $menu->save();
                }
            }
            return redirect()->route('admin.menu.index')->with('success', 'Tạo thực đơn thành công');
        }
        if (isset($request->createBrand)) {
            $listid = $request->brandid;
            foreach ($listid as $id) {
                $brand = Brand::find($id);
                if ($brand != null) {
                    $menu = new Menu();
                    $menu->name = $brand->name;
                    $menu->link = 'thuong-hieu/' . $brand->slug;
                    $menu->sort_order = 0;
                    $menu->parent_id = 0;
                    $menu->type = 'brand';
                    $menu->position = $request->postion;
                    $menu->table_id = $id;
                    $menu->created_at = date('Y-m-d H:i:s');
                    $menu->created_by = Auth::id() ?? 1;
                    $menu->status = $brand->status;
                    $menu->save();
                }
            }
            return redirect()->route('admin.menu.index')->with('success', 'Tạo thực đơn thành công');
        }
        if (isset($request->createTopic)) {
            $listid = $request->topicid;
            foreach ($listid as $id) {
                $topic = Topic::find($id);
                if ($topic != null) {
                    $menu = new Menu();
                    $menu->name = $topic->name;
                    $menu->link = 'chu-de/' . $topic->slug;
                    $menu->sort_order = 0;
                    $menu->parent_id = 0;
                    $menu->type = 'topic';
                    $menu->position = $request->postion;
                    $menu->table_id = $id;
                    $menu->created_at = date('Y-m-d H:i:s');
                    $menu->created_by = Auth::id() ?? 1;
                    $menu->status = $topic->status;
                    $menu->save();
                }
            }
            return redirect()->route('admin.menu.index')->with('success', 'Tạo thực đơn thành công');
        }
        if (isset($request->createPage)) {
            $listid = $request->pageid;
            foreach ($listid as $id) {
                $page = Post::where(['status','=',$id],['type','=','page'])->first();
                if ($page != null) {
                    $menu = new Menu();
                    $menu->name = $page->title;
                    $menu->link = 'trang-don/' . $page->slug;
                    $menu->sort_order = 0;
                    $menu->parent_id = 0;
                    $menu->type = 'page';
                    $menu->position = $request->postion;
                    $menu->table_id = $id;
                    $menu->created_at = date('Y-m-d H:i:s');
                    $menu->created_by = Auth::id() ?? 1;
                    $menu->status = $page->status;
                    $menu->save();
                }
            }
            return redirect()->route('admin.menu.index')->with('success', 'Tạo thực đơn thành công');
        }
        if (isset($request->createCustom)) {
            if(isset($request->name, $request->link)){
                $menu = new Menu();
                $menu->name = $request->name;
                $menu->link = $request->link;
                $menu->sort_order = 0;
                $menu->parent_id = 0;
                $menu->type = 'custom';
                $menu->position = $request->postion;
                $menu->table_id = null;
                $menu->created_at = date('Y-m-d H:i:s');
                $menu->created_by = Auth::id() ?? 1;
                $menu->status = $request->status;
                $menu->save();
            }
        }
    
        return redirect()->route('admin.menu.index')->with('success', 'Tạo thực đơn thành công');

        // if (isset($request->createCategory)) {
        //     $listid = $request->categoryid;
        //     foreach ($listid as $id) {
        //         $category = Category::find($id);
        //         if ($category != null) {
        //             $menu = new Menu();
        //             $menu->name = $category->name;
        //             $menu->link = 'danh-muc/' . $category->slug;
        //             $menu->sort_order = 0;
        //             $menu->parent_id = 0;
        //             $menu->type = 'category';
        //             $menu->position = $category->position;
        //             $menu->table_id = $id;
        //             $menu->created_at = date('Y-m-d H:i:s');
        //             $menu->created_by = Auth::id() ?? 1;
        //             $menu->status = $category->status;
        //             $menu->save();
        //         }
        //     }
        //     return redirect()->route('admin.menu.index')->with('success', 'Tạo thực đơn thành công');
        // }
        // if (isset($request->createBrand)) {
        //     $listid = $request->brandid;
        //     foreach ($listid as $id) {
        //         $brand = Brand::find($id);
        //         if ($brand != null) {
        //             $menu = new Menu();
        //             $menu->name = $brand->name;
        //             $menu->link = 'thuong-hieu/' . $brand->slug;
        //             $menu->sort_order = 0;
        //             $menu->parent_id = 0;
        //             $menu->type = 'brand';
        //             $menu->position = $brand->position;
        //             $menu->table_id = $id;
        //             $menu->created_at = date('Y-m-d H:i:s');
        //             $menu->created_by = Auth::id() ?? 1;
        //             $menu->status = $brand->status;
        //             $menu->save();
        //         }
        //     }
        //     return redirect()->route('admin.menu.index')->with('success', 'Tạo thực đơn thành công');
        // }
        // if (isset($request->createTopic)) {
        //     $listid = $request->topicid;
        //     foreach ($listid as $id) {
        //         $topic = Topic::find($id);
        //         if ($topic != null) {
        //             $menu = new Menu();
        //             $menu->name = $topic->name;
        //             $menu->link = 'chu-de/' . $topic->slug;
        //             $menu->sort_order = 0;
        //             $menu->parent_id = 0;
        //             $menu->type = 'topic';
        //             $menu->position = $topic->position;
        //             $menu->table_id = $id;
        //             $menu->created_at = date('Y-m-d H:i:s');
        //             $menu->created_by = Auth::id() ?? 1;
        //             $menu->status = $topic->status;
        //             $menu->save();
        //         }
        //     }
        //     return redirect()->route('admin.menu.index')->with('success', 'Tạo thực đơn thành công');
        // }
        // if (isset($request->createPage)) {
        //     $listid = $request->pageid;
        //     foreach ($listid as $id) {
        //         $page = Post::where(['status','=',$id],['type','=','page'])->first();
        //         if ($page != null) {
        //             $menu = new Menu();
        //             $menu->name = $page->name;
        //             $menu->link = 'trang-don/' . $page->slug;
        //             $menu->sort_order = 0;
        //             $menu->parent_id = 0;
        //             $menu->type = 'page';
        //             $menu->position = $page->position;
        //             $menu->table_id = $id;
        //             $menu->created_at = date('Y-m-d H:i:s');
        //             $menu->created_by = Auth::id() ?? 1;
        //             $menu->status = $page->status;
        //             $menu->save();
        //         }
        //     }
        //     return redirect()->route('admin.menu.index')->with('success', 'Tạo thực đơn thành công');
        // }
        // if (isset($request->createCustom)) {
        //     if(isset($request->name,$request->link)){
        //         $menu = new Menu();
        //             $menu->name = $request->title;
        //             $menu->link = $request->link;
        //             $menu->sort_order = 0;
        //             $menu->parent_id = 0;
        //             $menu->type = 'custom';
        //             $menu->position = $request->position;
        //             $menu->table_id = $id; //sai
        //             $menu->created_at = date('Y-m-d H:i:s');
        //             $menu->created_by = Auth::id() ?? 1;
        //             $menu->status = $request->status;
        //             $menu->save();
        //     }
        // }


        // // Validate the request...
        // $request->validate([
        //     'name' => 'required|string|max:255',
        //     'link' => 'required|string|max:1000',
        //     'sort_order' => 'nullable|integer',
        //     'parent_id' => 'nullable|integer',
        //     'type' => 'required|string|max:100',
        //     'position' => 'required|string|max:255',
        //     'status' => 'required|integer',
        // ]);

        // // Create the menu
        // Menu::create([
        //     'name' => $request->name,
        //     'link' => $request->link,
        //     'sort_order' => $request->sort_order ?? 0,
        //     'parent_id' => $request->parent_id ?? 0,
        //     'type' => $request->type,
        //     'position' => $request->position,
        //     'status' => $request->status,
        //     'created_by' => 1, // Hardcode or get from authenticated user
        // ]);

    }



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Lấy thông tin sản phẩm theo ID
        $menu = Menu::find($id);
        return view('backend.menu.show', compact('menu'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = Menu::find($id);
        return view('backend.menu.edit', compact('menu'));
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

        return redirect()->route('admin.menu.index')->with('success', 'Cập nhật thực đơn thành công');
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
            return redirect()->route('admin.menu.index')->with('success', 'Xóa thực đơn thành công');
        }
        return redirect()->route('admin.menu.index')->with('error', 'Không tìm thấy thực đơn');
    }


    public function trash()
    {
        $menu = Menu::where('status', '==', 0)->get();
        return view('backend.menu.trash', compact('menu'));
    }

    public function destroy($id)
    {
        $menu = Menu::find($id);
        if ($menu) {
            $menu->delete();
            return redirect()->route('admin.menu.trash')->with('success', 'Xóa thực đơn thành công');
        }
        return redirect()->route('admin.menu.trash')->with('error', 'Menu không tồn tại');
    }

    public function restore(Request $request, $id)
    {
        $menu = Menu::where('id', $id)->where('status', 0)->first();

        if (!$menu) {
            return redirect()->route('admin.menu.trash')->with('error', 'Không tìm thấy menu hoặc menu không ở trạng thái bị xóa');
        }

        // Cập nhật thông tin thực đơn từ request hoặc giữ nguyên nếu không có
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
            $request->image->move(public_path('assets/images/menu/'), $imageName);
            $menu->image = $imageName;
        }

        $menu->save();

        return redirect()->route('admin.menu.trash')->with('success', 'Khôi phục thực đơn thành công');
    }
}
