<?php

namespace App\Http\Controllers\Front;

use App\Models\SanPham;

use App\Http\Controllers\Controller;
use App\Service\SanPham\SanPhamServiceInterface;
use App\Service\TheLoaiSanPham\TheLoaiSanPhamServiceInterface;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    private $sanphamService;
    private $theloaisanphamService;
    public function __construct(SanPhamServiceInterface $sanphamService, TheLoaiSanPhamServiceInterface $theloaisanphamService)
    {
        $this->sanphamService = $sanphamService;
        $this->theloaisanphamService = $theloaisanphamService;
    }

    public function ChiTietSanPham($id)
    {
        $menu = $this->theloaisanphamService->Menu();
        $sanpham = $this->sanphamService->find($id);
        $sanphamlienquan = $this->sanphamService->SanPhamLienQuan($sanpham);
        return view('front.shop.ChiTietSanPham', compact('sanpham', 'sanphamlienquan', 'menu'));
    }
    public function DanhMucSanPham($id, Request $request)
    {
        $menu = $this->theloaisanphamService->Menu();
        $sanpham = $this->sanphamService->all();
        $theloaisanpham = $this->theloaisanphamService->find($id);
        $getTheLoaiSanPham = $this->theloaisanphamService->getSanPhamByTheLoai($theloaisanpham);

        return view('front.shop.DanhMucSanPham', compact('sanpham', 'menu', 'getTheLoaiSanPham'));
    }
    public function TimKiemSanPham(Request $request)
    {
        $searchTerm = $request->input('search');
        $menu = $this->theloaisanphamService->Menu();
        // Tìm sách có tên chứa từ khóa tìm kiếm
        $sanpham = SanPham::where('TenSP', 'like', "%$searchTerm%")
            //    ->take(8)
            ->get();


        return view('front.shop.TimKiemSanPham', compact('sanpham', 'menu', 'searchTerm'));
    }
}
