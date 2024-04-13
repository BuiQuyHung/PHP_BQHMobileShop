<?php

namespace App\Http\Controllers\Front;

use App\Models\User;

use App\Http\Controllers\Controller;
use App\Service\User\UserServiceInterface;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Service\TheLoaiSanPham\TheLoaiSanPhamServiceInterface;

class AccountController extends Controller
{
    private $userService;
    private $theloaisanphamService;
    public function __construct(UserServiceInterface $userService, TheLoaiSanPhamServiceInterface $theloaisanphamService)
    {
        $this->userService = $userService;
        $this->theloaisanphamService = $theloaisanphamService;
    }
    public function login()
    {
        $menu = $this->theloaisanphamService->Menu();
        return view('front.account.login', compact('menu'));
    }

    public function checkLogin(Request $request)
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password,
            'level' => 2
        ];
        $remember = $request->remember;

        if (Auth::attempt($credentials)) {
            return 'success';
        } else {
            return back()
                ->with('notification', 'ERROR: Email or password is wrong');
        }
    }

    public function register()
    {
        $menu = $this->theloaisanphamService->Menu();
        return view('front.account.register', compact('menu'));
    }


    public function postRegister(Request $request)
    {
        if ($request->password != $request->password_confirmation) {
            return back()
                ->with('notification', 'ERROR: Confirm password does not match');
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Hash mật khẩu trước khi lưu vào cơ sở dữ liệu
            'level' => 2,
        ];
        $this->userService->create($data);
        return redirect('account/login')
            ->with('notification', 'Register Successfully! Please Login to continue');
    }
}
