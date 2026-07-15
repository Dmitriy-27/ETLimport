<?php

namespace App\DTO;

readonly class StockDTO
{
    public function __construct(
        public string $date,
        public ?string $lastChangeDate,
        public string $supplierArticle,
        public string $techSize,
        public int $barcode,
        public int $quantity,
        public ?bool $isSupply,
        public ?bool $isRealization,
        public ?int $quantityFull,
        public string $warehouseName,
        public ?int $inWayToClient,
        public ?int $inWayFromClient,
        public int $nmId,
        public ?string $subject,
        public ?string $category,
        public ?string $brand,
        public ?int $scCode,
        public ?float $price,
        public ?float $discount,
    ){}
}
