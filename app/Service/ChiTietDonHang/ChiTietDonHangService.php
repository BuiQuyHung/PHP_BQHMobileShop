<?php

namespace App\Service\ChiTietDonHang;

use App\Repositories\ChiTietDonHang\ChiTietDonHangRepositoryInterface;
use App\Service\BaseService;


class ChiTietDonHangService extends BaseService implements ChiTietDonHangServiceInterface
{
    public $repository;
    public function __construct(ChiTietDonHangRepositoryInterface $chitietdonhangRepository)
    {
        $this->repository = $chitietdonhangRepository;
    }
    
    
}
