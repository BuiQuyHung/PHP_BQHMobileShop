<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\ChiTietDonHang\ChiTietDonHangServiceInterface;
use App\Service\DonHang\DonHangServiceInterface;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Service\TheLoaiSanPham\TheLoaiSanPhamServiceInterface;

class CheckOutController extends Controller
{
    private $donHangService;
    private $chiTietDonHangService;
    private $theloaisanphamService;

    public function __construct(
        DonHangServiceInterface $donHangService,
        ChiTietDonHangServiceInterface $chiTietDonHangService,
        TheLoaiSanPhamServiceInterface $theloaisanphamService
    ) {
        $this->donHangService = $donHangService;
        $this->chiTietDonHangService = $chiTietDonHangService;
        $this->theloaisanphamService = $theloaisanphamService;
    }
    public function index()
    {
        $menu = $this->theloaisanphamService->Menu();
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.checkout.index', compact('carts', 'total', 'subtotal', 'menu'));
    }
    public function addOrder(Request $request)
    {
        // dd($request->all());
        //01. Thêm đơn hàng
        $donhang = $this->donHangService->create($request->all());
        //02. Thêm chi tiết đơn hàng
        $carts = Cart::content();
        foreach ($carts as $cart) {
            $data = [
                'MaDonHang' => $donhang->MaDonHang,
                'MaSP' => $cart->id,
                'SoLuong' => $cart->qty,
                'GiaSP' => $cart->price,
                'TongTien' => $cart->qty * $cart->price

            ];
            $this->chiTietDonHangService->create($data);
        }
        //03. Xóa giỏ hàng
        Cart::destroy();
        //04. Trả về kết quả thông báo
        return "Bạn đã đặt hàng thành công";
    }
}
