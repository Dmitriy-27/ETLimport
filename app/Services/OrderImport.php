<?php

namespace App\Services;

use App\DTO\OrderDTO;
use App\Repositories\OrderRepository;

class OrderImport
{
    public function __construct(
        private OrderRepository $repository)
    {
    }

    public function import(OrderDTO $orderDTO)
    {
        return $this->repository->create($orderDTO);
    }
}
