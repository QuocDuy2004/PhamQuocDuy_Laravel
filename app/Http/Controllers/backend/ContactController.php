<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = Contact::where('status', '!=', 0)
            ->orderBy('created_at', 'DESC')
            ->select('id', 'name', 'phone', 'email', 'content', 'created_at', 'status')
            ->paginate(7);
        return view('backend.contact.index', compact('list'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.contact.create');
    }

    public function delete($id)
    {
        try {
            $contact = Contact::findOrFail($id);
            $contact->status = 0;
            $contact->save();

            return redirect()->route('admin.contact.index')->with('success', 'Xóa liên hệ thành công');
        } catch (ModelNotFoundException $e) {
            return redirect()->route('admin.contact.index')->with('error', 'Không tìm thấy liên hệ');
        } catch (\Exception $e) {
            return redirect()->route('admin.contact.index')->with('error', 'Đã xảy ra lỗi trong quá trình xóa liên hệ');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|integer',
        ]);

        Contact::create([
            'user_id' => auth()->id(),
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'created_at' => now(),
        ]);

        return redirect()->route('admin.contact.index')->with('success', 'Tạo liên hệ thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $contact = Contact::find($id);
        return view('backend.contact.show', compact('contact'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $contact = Contact::find($id);
        return view('backend.contact.edit', compact('contact'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $contact = Contact::find($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|integer',
        ]);

        $contact->update([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'updated_at' => now(),
        ]);

        return redirect()->route('admin.contact.index')->with('success', 'Cập nhập liên hệ thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            return redirect()->route('admin.contact.trash')->with('success', 'Xóa liên hệ thành công');
        }
        return redirect()->route('admin.contact.trash')->with('error', 'Liên hệ không tồn tại');
    }

    /**
     * Display trashed contacts.
     */
    public function trash()
    {
        $list = Contact::where('status', 0)->get();
        return view('backend.contact.trash', compact('list'));
    }

    /**
     * Restore the specified resource from storage.
     */
    public function restore(Request $request, $id)
    {
        $contact = Contact::where('id', $id)->where('status', 0)->first();

        if (!$contact) {
            return redirect()->route('admin.contact.trash')->with('error', 'Không tìm thấy sản phẩm hoặc sản phẩm không ở trạng thái bị xóa');
        }
        $contact->name = $request->name ?? $contact->name;
        $contact->email = $request->email ?? $contact->email;
        $contact->phone = $request->phone ?? $contact->phone;
        $contact->title = $request->title ?? $contact->title;
        $contact->content = $request->content ?? $contact->content;

        $contact->status = 1;
        $contact->save();
        return redirect()->route('admin.contact.trash')->with('success', 'Khôi phục liên hệ thành công');
    }
}
