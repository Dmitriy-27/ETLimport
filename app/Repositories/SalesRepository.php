<?php

namespace App\Repositories;

use App\Models\Sales;

class SalesRepository
{
    public function create(salesDTO $salesDTO): sale
    {
        return Sales::create([
            'g_number' => $salesDTO->g_number,
            'date' => $salesDTO->date,
            'last_change_date' => $salesDTO->last_change_date,
            'supplier_article' => $salesDTO->supplier_article,
            'tech_size' => $salesDTO->tech_size,
            'barcode'=> $salesDTO->barcode,
            'total_price'=> $salesDTO->total_price,
            'discount_percent' => $salesDTO->discount_percent,
            'is_supply' => $salesDTO->is_supply,
            'is_realization' => $salesDTO->is_realization,
            'promo_code_discount' => $salesDTO->promo_code_discount,
            'warehouse_name' => $salesDTO->warehouse_name,
            'country_name' => $salesDTO->country_name,
            'oblast_okrug_name' => $salesDTO->oblast_okrug_name,
            'region_name' => $salesDTO->region_name,
            'income_id' => $salesDTO->income_id,
            'sale_id' => $salesDTO->sale_id,
            'odid' => $salesDTO->odid,
            'spp' => $salesDTO->spp,
            'for_pay' => $salesDTO->for_pay,
            'finished_price' => $salesDTO->finished_price,
            'price_with_disc' => $salesDTO->price_with_disc,
            'nm_id' => $salesDTO->nm_id,
            'subject' => $salesDTO->subject,
            'category' => $salesDTO->category,
            'brand' => $salesDTO->brand,
            'is_storno' => $salesDTO->is_storno,
        ]);
    }
}
