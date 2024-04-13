<?php

namespace App\Http\Controllers\Front;

use App\Service\TheLoaiSanPham\TheLoaiSanPhamServiceInterface;

use App\Http\Controllers\Controller;
use App\Service\SanPham\SanPhamService;
use App\Service\SanPham\SanPhamServiceInterface;
use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class CartController extends Controller
{
    private $theloaisanphamService;
    private $sanphamService;
    public function __construct(SanPhamServiceInterface $sanphamService, TheLoaiSanPhamServiceInterface $theloaisanphamService)
    {
        $this->sanphamService = $sanphamService;
        $this->theloaisanphamService = $theloaisanphamService;
    }
    public function add($id)
    {
        $id = (int)$id;
        $sanpham = $this->sanphamService->find($id);
        Cart::add([
            'id' => $sanpham->MaSP,
            'name' => $sanpham->TenSP,
            'qty' => 1,
            'price' => $sanpham->giatien,
            'weight' => 1
        ]);


        return back();
    }
    public function index()
    {
        $menu = $this->theloaisanphamService->Menu();
        $carts = Cart::content();
        $total = Cart::total();
        $subtotal = Cart::subtotal();
        return view('front.shop.cart', compact('carts', 'total', 'subtotal', 'menu'));
    }
    public function delete(Request $request)
    {
        if ($request->ajax()) {
            $respone['cart'] = Cart::remove($request->rowId);
            $respone['count'] = Cart::count();
            $respone['total'] = Cart::total();
            $respone['subtotal'] = Cart::subtotal();
            return $respone;
        }
        return back();
    }
    public function destroy()
    {
        Cart::destroy();
    }
    public function update(Request $request)
    {
        if ($request->ajax()) {
            $respone['cart'] = Cart::update($request->rowId, $request->qty);
            $respone['count'] = Cart::count();
            $respone['total'] = Cart::total();
            $respone['subtotal'] = Cart::subtotal();
            return $respone;
        }
        return back();
    }
}
