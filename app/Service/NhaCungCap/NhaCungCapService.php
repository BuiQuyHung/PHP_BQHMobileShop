<?php

namespace App\Service\NhaCungCap;

use App\Repositories\NhaCungCap\NhaCungCapRepositoryInterface;
use App\Service\BaseService;


class NhaCungCapService extends BaseService implements NhaCungCapServiceInterface
{
    public $repository;
    public function __construct(NhaCungCapRepositoryInterface $nhacungcapRepository)
    {
        $this->repository = $nhacungcapRepository;
    }
    
    
}
