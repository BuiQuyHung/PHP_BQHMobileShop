<?php

namespace App\Service\TheLoaiSanPham;

use App\Repositories\TheLoaiSanPham\TheLoaiSanPhamRepositoryInterface;
use App\Service\BaseService;


class TheLoaiSanPhamService extends BaseService implements TheLoaiSanPhamServiceInterface
{
    public $repository;
    public function __construct(TheLoaiSanPhamRepositoryInterface $theloaisanphamRepository)
    {
        $this->repository = $theloaisanphamRepository;
    }
    public function Menu()
    {
        return $this->repository->Menu();
    }
    public function TheLoaiSanPham($theloaisanpham, $limit = 4)
    {
        return $this->repository->TheLoaiSanPham($theloaisanpham, $limit);
    }
    public function getSanPhamByTheLoai($theloaisanpham)
    {
        return $this->repository->getSanPhamByTheLoai($theloaisanpham);
    }
}
