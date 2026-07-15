<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\DTO\StockDTO;
use App\Services\StockImport;

#[Signature('app:import-stocks-command')]
#[Description('Import stocks from API')]

class ImportStocksCommand extends Command
{
    public function __construct(
        private StockImport $stockImport
    ) {
        parent::__construct();
    }
    public function handle()
    {
        $page = 1;
        do {

        $response = Http::get(
            'http://109.73.206.144:6969/api/stocks',
            [
                'dateFrom' => '2026-07-15',
                'dateTo' => '2026-12-31',
                'page' => 1,
                'limit' => 500,
                'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie'
            ]
        );

        $stocks = $response->json('data');

        foreach ($stocks as $stock) {
            $dto = new StockDTO(
                date: $stock['date'],
                lastChangeDate: $stock['last_change_date'],
                supplierArticle: $stock['supplier_article'],
                techSize: $stock['tech_size'],
                barcode: (int)$stock['barcode'],
                quantity: (int)$stock['quantity'],
                isSupply: $stock['is_supply'],
                isRealization: $stock['is_realization'],
                quantityFull: $stock['quantity_full'],
                warehouseName: $stock['warehouse_name'],
                inWayToClient: $stock['in_way_to_client'],
                inWayFromClient: $stock['in_way_from_client'],
                nmId: (int)$stock['nm_id'],
                subject: $stock['subject'],
                category: $stock['category'],
                brand: $stock['brand'],
                scCode: $stock['sc_code'],
                price: $stock['price'] !== null ? (float)$stock['price'] : null,
                discount: $stock['discount'] !== null ? (float)$stock['discount'] : null,
            );
            $this->stockImport->import($dto);
        }
        $this->info('Stocks imported successfully!');
            $lastPage = $response->json('meta.last_page');

            $this->info("Imported page {$page} of {$lastPage}");
            $page++;
        } while ($page <= $lastPage);
    }
}
