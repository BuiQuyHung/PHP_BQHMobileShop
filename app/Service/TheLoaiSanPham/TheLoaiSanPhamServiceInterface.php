<?php

namespace App\Service\TheLoaiSanPham;

use App\Service\ServiceInterface;

interface TheLoaiSanPhamServiceInterface extends ServiceInterface
{
    public function Menu();
    public function TheLoaiSanPham($theloaisanpham, $limit = 4);
    public function getSanPhamByTheLoai($theloaisanpham);
    
}
