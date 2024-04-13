<?php

namespace App\Repositories\ChiTietDonHang;

use App\Repositories\BaseRepositories;
use App\Models\ChiTietDonHang;
use PhpParser\Node\Stmt\Return_;

class ChiTietDonHangRepository extends BaseRepositories implements ChiTietDonHangRepositoryInterface
{
    public function getModel()
    {
        return ChiTietDonHang::class;
    }
    
}
