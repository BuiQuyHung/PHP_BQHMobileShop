<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Service\SanPham\SanPhamServiceInterface;
use App\Service\TheLoaiSanPham\TheLoaiSanPhamServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $sanphamService;
    private $theloaisanphamService;

    public function __construct(SanPhamServiceInterface $sanphamService, TheLoaiSanPhamServiceInterface $theloaisanphamService)
    {
        $this->sanphamService = $sanphamService;
        $this->theloaisanphamService = $theloaisanphamService;
    }
    public function index()
    {
        $menu = $this->theloaisanphamService->Menu();
        $Iphone = $this->sanphamService->Iphone();
        $SamSung = $this->sanphamService->SamSung();
        $Pixel = $this->sanphamService->Pixel();
        $Vivo = $this->sanphamService->Vivo();
        $Oppo = $this->sanphamService->Oppo();
        $Realme = $this->sanphamService->Realme();
        $Lenovo = $this->sanphamService->Lenovo();


        // Gom tất cả các biến compact vào một mảng compact
        $data = compact('Iphone', 'SamSung', 'Pixel', 'Vivo', 'Oppo', 'Realme', 'Lenovo', 'menu');

        return view('front.index', $data);
    }
}
