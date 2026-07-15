<?php

namespace App\Services;

use App\DTO\OrderDTO;
use App\Repositories\OrderRepository;

class IncomeImport
{
    public function __construct(
        private IncomeRepository $repository
    )
    {
    }
    public function import(IncomeDTO $incomeDTO)
    {
        return $this->repository->create($incomeDTO);
    }
}
