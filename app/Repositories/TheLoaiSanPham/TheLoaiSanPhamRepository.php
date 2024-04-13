<?php

namespace App\Repositories\TheLoaiSanPham;

use App\Repositories\BaseRepositories;
use App\Models\TheLoaiSanPham;
use App\Models\SanPham;
use PhpParser\Node\Stmt\Return_;


class TheLoaiSanPhamRepository extends BaseRepositories implements TheLoaiSanPhamRepositoryInterface
{
    public function getModel()
    {
        return TheLoaiSanPham::class;
    }
    public function Menu()
    {
        return $this->model->all();
    }
    public function TheLoaiSanPham($theloaisanpham, $limit = 4)
    {
        return $this->model->where('MaDanhMuc', $theloaisanpham->MaDanhMuc)
            ->limit($limit)
            ->get();
    }
    public function getSanPhamByTheLoai(TheLoaiSanPham $theloaisanpham)
    {

        return SanPham::where('MaDanhMuc', $theloaisanpham->MaDanhMuc)->paginate(8);
    }
}
