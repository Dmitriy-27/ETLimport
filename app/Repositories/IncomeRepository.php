<?php

namespace App\Repositories;

use App\Models\Income;
use App\Dto\IncomeDto;
class IncomeRepository
{
    public function create(IncomeDTO $incomeDTo): Income
    {
        return Income::create([
            'income_id' => $incomeDTo->incomeId,
            'number' => $incomeDTo->number,
            'date' => $incomeDTo->date,
            'last_change_date' => $incomeDTo->lastChangeDate,
            'supplier_article' => $incomeDTo->supplierArticle,
            'tech_size' => $incomeDTo->techSize,
            'barcode' => $incomeDTo->barcode,
            'quantity' => $incomeDTo->quantity,
            'total_price' => $incomeDTo->totalPrice,
            'date_close' => $incomeDTo->dateClose,
            'warehouse_name' => $incomeDTo->warehouseName,
            'nm_id' => $incomeDTo->nmId,
        ]);
    }
}











