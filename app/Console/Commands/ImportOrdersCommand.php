<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

#[Signature('app:import-orders-command')]
#[Description('Command description')]
class ImportOrdersCommand extends Command
{
    public function handle()
    {
        $response = Http::get(
            'http://109.73.206.144:6969/api/orders',
            [
                'dateFrom' => '2024-01-01',
                'dateTo' => '2026-12-31',
                'page' => 1,
                'limit' => 10,
                'key' => 'E6kUTYrYwZq2tN4QEtyzsbEBk3ie'
            ]
        );

        dump($response->json());
    }
}
