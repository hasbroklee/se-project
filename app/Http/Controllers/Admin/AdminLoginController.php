<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminLoginController extends Controller
{
    public function login()
    {
        $data['title'] = 'Đăng nhập';
        return view('admin.login', $data);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('user_name', $request->user_name)->first();

        if ($user->user_name == $request->user_name) {
            if ($request->password == $user->password && $user->role == 1) {
                $request->session()->regenerate();
                return redirect()->intended('admin/posts');
            } else if ($user->role == 2 && $request->password == $user->password) {
                $request->session()->regenerate();
                return redirect()->intended('/');
            }
             else {
                return back()->withErrors('Sai mật khẩu');
            }
        } else {
            return back()->withErrors('Sai tên đăng nhập');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }

    public function password()
    {
        $data['title'] = 'Đổi mật khẩu';
        return view('admin.password', $data);
    }

    public function password_action(Request $request)
    {
        $user = User::first();

        if ($request->old_password == $user->password) {
            if ($request->old_password != $request->new_password) {
                if ($request->new_password == $request->new_password_cofirmation) {
                    $user->password = $request->new_password;
                    $user->save();
                    $request->session()->regenerate();
                    return back()->with('success', 'Đổi mật khẩu thành công');
                } else {
                    return back()->withErrors('Mật khẩu mới không khớp');
                }
            } else {
                return back()->withErrors('Mật khẩu mới không được trùng mật khẩu cũ');
            }
        } else {
            return back()->withErrors('Sai mật khẩu');
        }
    }

}
