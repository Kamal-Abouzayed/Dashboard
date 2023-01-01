<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('dashboard.auth.login');
    }

    public function login(Request $request)
    {
        //attempt to log admin
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'isAdmin' => 1])) {
            return redirect()->intended(route('dashboard.home'))->with('success', 'Login Successfully');
        }

        return redirect()->back()->withInput($request->only('email', 'remember'))->with('error', 'البريد الالكترونى او كلمة المرور غير صحيحة');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        return redirect()->route('dashboard.login_form');
    }
}
