<?php

namespace App\Services;
use App\DTO\StockDTO;
use App\Repositories\StockRepository;

class StockImport
{
    public function __construct(
        private StockRepository $repository
    )
    {
    }

    public function import(StockDTO $stockDTO)
    {
        return $this->repository->create($stockDTO);
    }
}
