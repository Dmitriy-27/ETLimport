<?php

namespace App\DTO;

readonly class IncomeDTO
{
    public function __construct(
        public int     $incomeId,
        public ?string $number,
        public string  $date,
        public string  $lastChangeDate,
        public string  $supplierArticle,
        public string  $techSize,
        public int     $barcode,
        public int     $quantity,
        public float   $totalPrice,
        public ?string $dateClose,
        public string  $warehouseName,
        public int     $nmId,
    )
    {
    }
}
