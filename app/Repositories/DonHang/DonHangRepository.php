<?php

namespace App\Repositories\DonHang;

use App\Repositories\BaseRepositories;
use App\Models\DonHang;
use PhpParser\Node\Stmt\Return_;

class DonHangRepository extends BaseRepositories implements DonHangRepositoryInterface
{
    public function getModel()
    {
        return DonHang::class;
    }
    
}
