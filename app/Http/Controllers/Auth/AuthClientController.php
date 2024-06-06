<?php

namespace App\Http\Controllers\Auth;

use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Expr\Throw_;
use Illuminate\Validation\ValidationException;
use App\Mail\MailForgotPassword;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Models\PasswordReset;
use Throwable;

class AuthClientController extends Controller
{
    public function RegisterPage()
    {
        return view('Auth.register');
    }
    public function LoginPage()
    {
        return view('Auth.login');
    }
    public function LoginAdminPage()
    {
        return view('Auth.login-admin');
    }
    public function LoginGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    public function LoginFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function ForgotPage()
    {
        return view('auth.forgot');
    }


    public function LoginFacebookCallback(Request $request)
    {
        try {
            $facebookUser = Socialite::driver('facebook')->user();
            $user = User::updateOrCreate(
                ['email' => $facebookUser->getEmail()],
                [
                    'name' => $facebookUser->getName(),
                    'username' => $facebookUser->getId(),
                    'password' => Hash::make(Str::random(16)),
                    'address' => '',
                    'image' => '',
                    'roles' => 'customer',
                    'created_by' => 0,
                    'status' => 1,
                ]
            );

            Auth::login($user);

            return redirect()->route('home')->with('success', 'Đăng nhập thành công');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Đăng nhập bằng Facebook thất bại: ' . $e->getMessage());
        }
    }



    public function LoginGoogleCallback(Request $request)
    {
        try {
            $googleUser = Socialite::driver('google')->user();

            // Tạo hoặc cập nhật người dùng dựa trên email
            $user = User::updateOrCreate(
                ['email' => strtolower($googleUser->email)],
                [
                    'name' => $googleUser->name,
                    'username' => $googleUser->id,
                    'password' => Hash::make(Str::random(16)),
                    'gender' => 1,
                    'phone' => '',
                    'address' => '',
                    'image' => $googleUser->avatar,
                    'roles' => 'customer',
                    'created_by' => 0,
                    'status' => 1
                ]
            );

            // Đăng nhập người dùng
            Auth::login($user);

            return redirect()->route('home')->with('success', 'Đăng nhập thành công');
        } catch (\Exception $e) {
            return redirect()->route('login')->with('error', 'Đăng nhập bằng Google thất bại: ' . $e->getMessage());
        }
    }



    public function Login(Request $request)
    {

        $valid = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:8',
        ]);

        if ($valid->fails()) {
            return redirect()->back()->withErrors($valid)->withInput();
        } else {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {
                return redirect()->route('home')->with('success', 'Đăng nhập thành công');
            } else {
                return redirect()->back()->with('error', 'Sai email hoặc mật khẩu')->withInput(['email' => $request->email]);
            }
        }
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:user,email', // Sửa tên bảng
            'phone' => ['required', 'string', 'max:255', 'unique:user,phone', 'regex:/^[0-9]{10,11}$/'], // Sửa tên bảng
            'username' => 'required|string|max:255|unique:user,username', // Sửa tên bảng
            'password' => 'required|string|min:8|confirmed',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            $newUser = User::create([
                'name' => $request->name,
                'username' => $request->username,
                'email' => strtolower($request->email),
                'phone' => $request->phone,
                'password' => Hash::make($request->password),
                'gender' => 1,
                'address' => $request->ip(),
                'image' => '',
                'roles' => 'customer',
                'created_by' => 0,
                'status' => 1,
            ]);

            if ($newUser) {
                return redirect()->route('login')->with('success', 'Đăng ký thành công')->withInput(['username' => $request->username]);
            } else {
                return redirect()->back()->withErrors(['error' => 'Đăng ký thất bại'])->withInput(['username' => $request->username]);
            }
        } catch (\Throwable $e) {
            return redirect()->back()->withErrors(['error' => 'Đăng ký thất bại. Hãy thử lại vài lần'])->withInput();
        }
    }


    public function Logout(Request $request)
    {
        Session::flush();
        Auth::logout(Auth::user());
        return redirect()->route('login')->with('success', 'Bạn đã đăng xuất thành công.');
    }
}
