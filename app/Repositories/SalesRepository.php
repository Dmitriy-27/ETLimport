<?php

namespace App\Repositories;

use App\Models\Sales;
use App\DTO\SalesDTO;
class SalesRepository
{
    public function create(SalesDTO $salesDTO): Sales
    {
        return Sales::create([
            'g_number' => $salesDTO->gNumber,
            'date' => $salesDTO->date,
            'last_change_date' => $salesDTO->lastChangeDate,
            'supplier_article' => $salesDTO->supplierArticle,
            'tech_size' => $salesDTO->techSize,
            'barcode'=> $salesDTO->barcode,
            'total_price'=> $salesDTO->totalPrice,
            'discount_percent' => $salesDTO->discountPercent,
            'is_supply' => $salesDTO->isSupply,
            'is_realization' => $salesDTO->isRealization,
            'promo_code_discount' => $salesDTO->promoCodeDiscount,
            'warehouse_name' => $salesDTO->warehouseName,
            'country_name' => $salesDTO->countryName,
            'oblast_okrug_name' => $salesDTO->oblastOkrugName,
            'region_name' => $salesDTO->regionName,
            'income_id' => $salesDTO->incomeId,
            'sale_id' => $salesDTO->saleId,
            'odid' => $salesDTO->odid,
            'spp'=> $salesDTO->spp,
            'for_pay' => $salesDTO->forPay,
            'finished_price' => $salesDTO->finishedPrice,
            'price_with_disc' => $salesDTO->priceWithDisc,
            'nm_id' => $salesDTO->nmId,
            'subject' => $salesDTO->subject,
            'category' => $salesDTO->category,
            'brand' => $salesDTO->brand,
            'is_storno' => $salesDTO->isStorno,
        ]);
    }
}
