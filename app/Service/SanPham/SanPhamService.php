<?php

namespace App\Service\SanPham;

use App\Repositories\SanPham\SanPhamRepositoryInterface;
use App\Service\BaseService;


class SanPhamService extends BaseService implements SanPhamServiceInterface
{
    public $repository;
    public function __construct(SanPhamRepositoryInterface $sanphamRepository)
    {
        $this->repository = $sanphamRepository;
    }
    public function SanPhamLienQuan($sanpham, $limit = 4)
    {
        return $this->repository->SanPhamLienQuan($sanpham, $limit);
    }

    public function Iphone($limit = 8)
    {
        return $this->repository->Iphone($limit);
    }
    public function SamSung($limit = 8)
    {
        return $this->repository->SamSung($limit);
    }
    public function Pixel($limit = 5)
    {
        return $this->repository->Pixel($limit);
    }
    public function Vivo($limit = 5)
    {
        return $this->repository->Vivo($limit);
    }
    public function Oppo($limit = 5)
    {
        return $this->repository->Oppo($limit);
    }
    public function Realme($limit = 5)
    {
        return $this->repository->Realme($limit);
    }
    public function Lenovo($limit = 5)
    {
        return $this->repository->Lenovo($limit);
    }
}
