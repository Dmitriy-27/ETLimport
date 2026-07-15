<?php

namespace App\Services;

use App\DTO\OrderDTO;
use App\DTO\SalesDTO;
use App\Repositories\SalesRepository;

class SalesImport
{
        public function __construct(
            private SalesRepository $Repository)
        {
        }
        public function import(SalesDTO $salesDTO)
        {
            return $this->repository->import($salesDTO);
        }
}
