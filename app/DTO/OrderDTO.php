<?php

namespace App\DTO;

readonly class OrderDTO
{
    public function __construct(
        public string $gNumber,
        public string $date,
        public string $lastChangeDate,
        public string $supplierArticle,
        public string $techSize,
        public int $barcode,
        public float $totalPrice,
        public int $discountPercent,
        public string $warehouseName,
        public string $oblast,
        public ?int $incomeId,
        public ?string $odid,
        public int $nmId,
        public string $subject,
        public string $category,
        public string $brand,
        public bool $isCancel,
        public ?string $cancelDt,
    ) {}
}
