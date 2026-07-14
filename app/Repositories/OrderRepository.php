<?php

namespace App\Repositories;

use App\Models\Order;
use App\DTO\OrderDTO;

class OrderRepository
{
    public function create(OrderDTO $orderDTO): Order
    { return Order::create([
            'g_number'=> $orderDTO->gNumber,
            'date'=> $orderDTO->date,
            'last_change_date'=> $orderDTO->lastChangeDate,
            'supplier_article' =>$orderDTO->supplierArticle,
            'tech_size'=>$orderDTO->techSize,
            'barcode'=>$orderDTO->barcode,
            'total_price'=>$orderDTO->totalPrice,
            'discount_percent'=>$orderDTO->discountPercent,
            'warehouse_name'=>$orderDTO->warehouseName,
            'oblast'=>$orderDTO->oblast,
            'income_id'=>$orderDTO->incomeId,
            'odid'=>$orderDTO->odid,
            'nm_id'=>$orderDTO->nmId,
            'subject'=>$orderDTO->subject,
            'category'=>$orderDTO->category,
            'brand'=>$orderDTO->brand,
            'is_cancel'=>$orderDTO->isCancel,
            'cancel_dt'=>$orderDTO->cancelDt,
        ]);
    }

}
