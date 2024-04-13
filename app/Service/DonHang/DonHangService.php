<?php

namespace App\Service\DonHang;

use App\Repositories\DonHang\DonHangRepositoryInterface;
use App\Service\BaseService;


class DonHangService extends BaseService implements DonHangServiceInterface
{
    public $repository;
    public function __construct(DonHangRepositoryInterface $donhangRepository)
    {
        $this->repository = $donhangRepository;
    }
    
}
