<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $list = User::where("status", "!=", 0)
            ->orderBy("created_at", "DESC")
            ->select('id', 'username', 'name', 'phone', 'email', 'roles', 'address', 'status')
            ->paginate(7);
        return view('backend.user.index', compact("list"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate input data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user,email',
            'phone' => 'required|string|max:255|unique:user,phone',
            'username' => 'required|string|max:255|unique:user,username',
            'password' => 'required|string|min:8|max:255|confirmed',
            'gender' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'district' => 'required|string|max:255',
            'ward' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'roles' => 'required|string|max:50',
            'status' => 'required|integer',
        ]);

        $createdBy = Auth::check() ? Auth::id() : null;

        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('assets/images/user/'), $imageName);
        }

        $address = $request->city . ' - ' . $request->district . ' - ' . $request->ward;

        $newUser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'gender' => $request->gender,
            'address' => $address,
            'image' => $imageName,
            'roles' => $request->roles,
            'status' => $request->status,
            'created_by' => 1,
        ]);

        if ($newUser) {
            return redirect()->route('admin.user.create')->with('success', 'Tạo thành viên thành công');
        } else {
            return redirect()->back()->withErrors(['error' => 'Đã xảy ra lỗi khi tạo thành viên'])->withInput();
        }
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);
        return view('backend.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('backend.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $user = User::find($id);
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:user,email,' . $id,
        'phone' => 'required|string|max:255|unique:user,phone,' . $id,
        'username' => 'required|string|max:255|unique:user,username,' . $id,
        'password' => 'nullable|string|min:8|max:255',
        'gender' => 'required|string|max:255',
        'city' => 'required|string|max:255',
        'district' => 'required|string|max:255',
        'ward' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'roles' => 'required|string|max:50',
        'status' => 'required|integer',
    ]);

    if ($request->hasFile('image')) {
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('assets/images/user/'), $imageName);
        $user->image = $imageName;
    }

    // Concatenate city, district, and ward to form the full address
    $address = $request->city . ' - ' . $request->district . ' - ' . $request->ward;
    
    $user->update($request->only('name', 'email', 'phone', 'username', 'gender', 'roles', 'status'));
    $user->address = $address;

    if ($request->filled('password')) {
        $user->password = Hash::make($request->password);
    }

    $user->save();

    return redirect()->route('admin.user.index')->with('success', 'Cập nhật thành công');
}


    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $user = User::find($id);
        $user->status = 0;
        $user->save();

        return redirect()->route('admin.user.index')->with('success', 'Xóa thành viên thành công');
    }

    public function trash()
    {
        $list = User::where('status', 0)->get();
        return view('backend.user.trash', compact('list'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect()->route('admin.user.trash')->with('success', 'Xóa vĩnh viễn thành công');
    }

    public function restore($id)
    {
        $user = User::where('id', $id)->where('status', 0)->firstOrFail();
        $user->status = 1;
        $user->save();

        return redirect()->route('admin.user.trash')->with('success', 'Khôi phục thành công');
    }
}
