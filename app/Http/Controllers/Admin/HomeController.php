<?php

namespace App\Http\Controllers\Admin;

use App\Utilities\Constant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 0
        ];
        $remember = $request->remember;

        if (Auth::attempt($credentials, $remember)) {
            // return redirect()->intended('admin');
            return view('admin.user.index');
        } else {
            // return back()
            //     ->with('notification', 'ERROR: Email or password is wrong');
            return 'false';
        }
    }
}
