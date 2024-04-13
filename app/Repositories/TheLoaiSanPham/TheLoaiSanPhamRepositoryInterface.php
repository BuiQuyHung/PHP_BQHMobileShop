<?php

namespace App\Repositories\TheLoaiSanPham;

use App\Repositories\RepositoriesInterface;
use App\Models\TheLoaiSanPham;


interface TheLoaiSanPhamRepositoryInterface extends RepositoriesInterface
{
    public function Menu();
    public function TheLoaiSanPham($theloaisanpham, $limit = 4);
    public function getSanPhamByTheLoai(TheLoaiSanPham $theloaisanpham);
}
