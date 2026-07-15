<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;
use App\DTO\OrderDTO;
use App\Services\OrderImport;
#[Signature('app:import-orders-command')]
#[Description('Command description')]
class ImportOrdersCommand extends Command
{
    public function __construct(private OrderImport $orderImport)
    {
        parent::__construct();
    }
    public function handle()
    {
        $response = Http::get(
            'http://109.73.206.144:6969/api/orders',
            [
                'dateFrom' => '2024-01-01',
                'dateTo' => '2026-12-31',
                'page' => 1,
                'limit' => 100,
                'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie'
            ]
        );
            $orders = $response->json('data');
                foreach ($orders as $order) {
                    $dto = new OrderDTO(
                        gNumber: $order['g_number'],
                        date: $order['date'],
                        lastChangeDate: $order['last_change_date'],
                        supplierArticle: $order['supplier_article'],
                        techSize: $order['tech_size'],
                        barcode: (int)$order['barcode'],
                        totalPrice: (float)$order['total_price'],
                        discountPercent: (int)$order['discount_percent'],
                        warehouseName: $order['warehouse_name'],
                        oblast: $order['oblast'],
                        incomeId: $order['income_id'] ?: null,
                        odid: $order['odid'],
                        nmId: (int)$order['nm_id'],
                        subject: $order['subject'],
                        category: $order['category'],
                        brand: $order['brand'],
                        isCancel: (bool)$order['is_cancel'],
                        cancelDt: $order['cancel_dt']
                    );
                        $this->orderImport->import($dto);
                }
                $this->info('Orders imported successfully!');
    }







}
