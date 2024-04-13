<?php

namespace App\Repositories\User;

use App\Repositories\BaseRepositories;
use App\Models\User;
use App\Models\Sach;
use PhpParser\Node\Stmt\Return_;


class UserRepository extends BaseRepositories implements UserRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }
}
