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
    public function __construct(UserServiceInterface $userService, TheLoaiSanPhamServiceInterface $theloaisachService)
    {
        $this->userService = $userService;
        $this->theloaisanphamService = $theloaisachService;
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
            return 'fail';
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
        return back()->with('notification', 'LỖI: Mật khẩu xác nhận không khớp');
    }

    $user = new User(); // Tạo một thể hiện mới của User
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->level = 2; // Thiết lập cấp độ của người dùng là 2

    // Lưu người dùng vào cơ sở dữ liệu
    $user->save();

    return redirect('account/login')->with('notification', 'Đăng ký thành công! Vui lòng đăng nhập để tiếp tục');
}

}
