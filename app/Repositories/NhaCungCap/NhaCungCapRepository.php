<?php

namespace App\Repositories\NhaCungCap;

use App\Repositories\BaseRepositories;
use App\Models\NhaCungCap;
use PhpParser\Node\Stmt\Return_;

class NhaCungCapRepository extends BaseRepositories implements NhaCungCapRepositoryInterface
{
    public function getModel()
    {
        return NhaCungCap::class;
    }
    
}
