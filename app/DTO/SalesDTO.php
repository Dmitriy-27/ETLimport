<?php

namespace App\DTO;

readonly class SalesDTO
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
        public bool $isSupply,
        public bool $isRealization,
        public ?float $promoCodeDiscount,
        public string $warehouseName,
        public string $countryName,
        public string $oblastOkrugName,
        public string $regionName,
        public ?int $incomeId,
        public string $saleId,
        public ?string $odid,
        public ?int $spp,
        public float $forPay,
        public float $finishedPrice,
        public float $priceWithDisc,
        public int $nmId,
        public string $subject,
        public string $category,
        public string $brand,
        public ?bool $isStorno,
    ) {}
}
