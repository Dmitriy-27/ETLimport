<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Attributes\Description;
use App\Services\IncomeImport;
use App\DTO\IncomeDTO;
#[Signature('app:import-incomes-command')]
#[Description('Command description')]
class ImportIncomesCommand extends Command
{
    public function __construct(
        private IncomeImport $incomeImport
    )
    {
        parent::__construct();
    }
    public function handle()
    {
        $page = 1;
        do {

            $response = Http::get(
                'http://109.73.206.144:6969/api/incomes',
                [
                    'dateFrom' => '2026-01-01',
                    'dateTo' => '2026-12-31',
                    'page' => 1,
                    'limit' => 500,
                    'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie'
                ]
            );
            $incomes = $response->json()['data'];
            foreach ($incomes as $income) {
                $dto = new IncomeDTO(
                    incomeId: $income['income_id'],
                    number: $income['number'] ?: null,
                    date: $income['date'],
                    lastChangeDate: $income['last_change_date'],
                    supplierArticle: $income['supplier_article'],
                    techSize: $income['tech_size'],
                    barcode: (int)$income['barcode'],
                    quantity: (int)$income['quantity'],
                    totalPrice: (float)$income['total_price'],
                    dateClose: $income['date_close'],
                    warehouseName: $income['warehouse_name'],
                    nmId: (int)$income['nm_id'],
                );
                $this->incomeImport->import($dto);
            }
            $this->info('Stocks imported successfully!');

            $lastPage = $response->json('meta.last_page');

            $this->info("Imported page {$page} of {$lastPage}");
            $page++;
        } while ($page <= $lastPage);

    }
}
