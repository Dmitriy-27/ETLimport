<?php

namespace App\Repositories;

use App\Models\Stock;
use App\DTO\StockDTO;

class StockRepository
{
    public function create(StockDTO $stockDTO): Stock
    {
        return Stock::create([
            'date' => $stockDTO->date,
            'last_change_date' => $stockDTO->lastChangeDate,
            'supplier_article' => $stockDTO->supplierArticle,
            'tech_size' => $stockDTO->techSize,
            'barcode' => $stockDTO->barcode,
            'quantity' => $stockDTO->quantity,
            'is_supply' => $stockDTO->isSupply,
            'is_realization' => $stockDTO->isRealization,
            'quantity_full' => $stockDTO->quantityFull,
            'warehouse_name' => $stockDTO->warehouseName,
            'in_way_to_client' => $stockDTO->inWayToClient,
            'in_way_from_client' => $stockDTO->inWayFromClient,
            'nm_id' => $stockDTO->nmId,
            'subject' => $stockDTO->subject,
            'category' => $stockDTO->category,
            'brand' => $stockDTO->brand,
            'sc_code' => $stockDTO->scCode,
            'price' => $stockDTO->price,
            'discount' => $stockDTO->discount,
        ]);
    }

}
