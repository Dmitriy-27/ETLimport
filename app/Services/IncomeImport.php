<?php

namespace App\Services;

use App\DTO\IncomeDTO;
use App\Repositories\IncomeRepository;

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
