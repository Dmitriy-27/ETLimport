<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\DTO\SalesDTO;
use App\Services\SalesImport;

class ImportSalesCommand extends Command
{
    protected $signature = 'app:import-sales-command';
    protected $description = 'Import sales from API';
    public function __construct(private SalesImport $salesImport
    ) {
        parent::__construct();
    }
    public function handle()
    {
        $response = Http::get(
            'http://109.73.206.144:6969/api/sales',
            [
                'dateFrom' => '2026-07-13',
                'dateTo' => '2026-12-31',
                'page' => 1,
                'limit' => 100,
                'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie'
            ]
        );

        $sales = $response->json()['data'];

        foreach ($sales as $sale) {
            $dto = new SalesDTO(
                gNumber: $sale['g_number'],
                date: $sale['date'],
                lastChangeDate: $sale['last_change_date'],
                supplierArticle: $sale['supplier_article'],
                techSize: $sale['tech_size'],
                barcode: (int)$sale['barcode'],
                totalPrice: (float)$sale['total_price'],
                discountPercent: (int)$sale['discount_percent'],
                isSupply: (bool)$sale['is_supply'],
                isRealization: (bool)$sale['is_realization'],
                promoCodeDiscount: $sale['promo_code_discount']
                    ? (float)$sale['promo_code_discount']
                    : null,
                warehouseName: $sale['warehouse_name'],
                countryName: $sale['country_name'],
                oblastOkrugName: $sale['oblast_okrug_name'],
                regionName: $sale['region_name'],
                incomeId: $sale['income_id'] ?: null,
                saleId: $sale['sale_id'],
                odid: $sale['odid'],
                spp: $sale['spp'] ? (int)$sale['spp'] : null,
                forPay: (float)$sale['for_pay'],
                finishedPrice: (float)$sale['finished_price'],
                priceWithDisc: (float)$sale['price_with_disc'],
                nmId: (int)$sale['nm_id'],
                subject: $sale['subject'],
                category: $sale['category'],
                brand: $sale['brand'],
                isStorno: $sale['is_storno']
            );
            $this->salesImport->import($dto);
        }

        $this->info('Sales imported successfully!');
    }
}
