<?php

namespace App\Repositories\SanPham;

use App\Repositories\BaseRepositories;
use App\Models\SanPham;
use PhpParser\Node\Stmt\Return_;

class SanPhamRepository extends BaseRepositories implements SanPhamRepositoryInterface
{
    public function getModel()
    {
        return SanPham::class;
    }
    public function SanPhamLienQuan($sanpham, $limit = 4)
    {
        return $this->model->where('MaDanhMuc', $sanpham->MaDanhMuc)
            ->limit($limit)
            ->get();
    }

    public function Iphone($limit = 8)
    {
        return $this->model->where('MaDanhMuc', 1)
            ->limit($limit)
            ->get();
    }
    public function SamSung($limit = 8)
    {
        return $this->model->where('MaDanhMuc', 2)
            ->limit($limit)
            ->get();
    }
    public function Pixel($limit = 5)
    {
        return $this->model->where('MaDanhMuc', 3)
            ->limit($limit)
            ->get();
    }
    public function Vivo($limit = 5)
    {
        return $this->model->where('MaDanhMuc', 4)
            ->limit($limit)
            ->get();
    }
    public function Oppo($limit = 5)
    {
        return $this->model->where('MaDanhMuc', 5)
            ->limit($limit)
            ->get();
    }
    public function Realme($limit = 5)
    {
        return $this->model->where('MaDanhMuc', 6)
            ->limit($limit)
            ->get();
    }
    public function Lenovo($limit = 5)
    {
        return $this->model->where('MaDanhMuc', 7)
            ->limit($limit)
            ->get();
    }
}
