<?php

namespace App\Services;

use App\DTO\SalesDTO;
use App\Repositories\SalesRepository;

class SalesImport
{
        public function __construct(
            private SalesRepository $repository)
        {
        }
        public function import(SalesDTO $salesDTO)
        {
            return $this->repository->create($salesDTO);
        }
}
