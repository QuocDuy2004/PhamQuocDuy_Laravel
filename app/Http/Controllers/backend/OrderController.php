<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Order::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'delivery_name', 'delivery_gender', 'delivery_email', 'delivery_phone', 'delivery_address', 'note', 'created_at', 'status')
            ->paginate(7);
        return view('backend.order.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    // Validate the request...
    $request->validate([
        'user_id' => 'required|integer',
        'delivery_name' => 'required|string|max:255',
        'delivery_gender' => 'required|string|max:255',
        'delivery_email' => 'required|email|max:255',
        'delivery_phone' => 'required|string|max:255',
        'delivery_address' => 'required|string|max:1000',
        'note' => 'nullable|string|max:1000',
        'type' => 'required|string|max:50',
        'status' => 'required|integer',
    ]);

    // Create the order
    Order::create([
        'user_id' => $request->user_id,
        'delivery_name' => $request->delivery_name,
        'delivery_gender' => $request->delivery_gender,
        'delivery_email' => $request->delivery_email,
        'delivery_phone' => $request->delivery_phone,
        'delivery_address' => $request->delivery_address,
        'note' => $request->note,
        'type' => $request->type,
        'status' => $request->status,
        'created_at' => now(),
    ]);

    return redirect()->route('admin.order.create')->with('success', 'Tạo đơn hàng thành công');
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('backend.order.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('backend.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'delivery_name' => 'required|string|max:255',
            'delivery_gender' => 'required|string|max:255',
            'delivery_email' => 'required|email|max:255',
            'delivery_phone' => 'required|string|max:255',
            'delivery_address' => 'required|string|max:1000',
            'note' => 'nullable|string|max:1000',
            'status' => 'required|integer',
        ]);

        $order->update([
            'delivery_name' => $request->delivery_name,
            'delivery_gender' => $request->delivery_gender,
            'delivery_email' => $request->delivery_email,
            'delivery_phone' => $request->delivery_phone,
            'delivery_address' => $request->delivery_address,
            'note' => $request->note,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.order.index')->with('success', 'Cập nhật đơn hàng thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $order = Order::findOrFail($id);
        $order->update(['status' => 0]);

        return redirect()->route('admin.order.index')->with('success', 'Xóa đơn hàng thành công');
    }

    public function trash()
    {
        $orders = Order::where('status', 0)->get();
        return view('backend.order.trash', compact('orders'));
    }

    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        return redirect()->route('admin.order.trash')->with('success', 'Xóa đơn hàng vĩnh viễn thành công');
    }

    public function restore($id)
    {
        $order = Order::where('id', $id)->where('status', 0)->first();

        if (!$order) {
            return redirect()->route('admin.order.trash')->with('error', 'Không tìm thấy đơn hàng hoặc đơn hàng không ở trạng thái bị xóa');
        }

        $order->update(['status' => 1]);

        return redirect()->route('admin.order.trash')->with('success', 'Khôi phục đơn hàng thành công');
    }
}
