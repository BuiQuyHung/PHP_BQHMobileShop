<?php

namespace App\Service\SanPham;

use App\Service\ServiceInterface;

interface SanPhamServiceInterface extends ServiceInterface
{
    public function SanPhamLienQuan($sanpham, $limit = 4);


    public function Iphone($limit = 8);
    public function SamSung($limit = 8);
    public function Pixel($limit = 5);
    public function Vivo($limit = 5);
    public function Oppo($limit = 5);
    public function Realme($limit = 5);
    public function Lenovo($limit = 5);
}
