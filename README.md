***ETL Import
Проект по получение внешних данных через API 
с дальнейшим сохранением в локальную базу SQL. 

** Stack **

- PHP 8.5.3
- Composer 2.9.2  
- Laravel 13.19.0
- docker compose
- MySQL 8.4.10

** Архитектура проекта: 
    -Command
    -DTO
    -Service
    -Repository 
    -Model
    -Data

** В базе данных создана таблица Orders: 
g_number,
date,
last_change_date,
supplier_article,
tech_size,
barcode,
total_price,
discount_percent,
warehouse_name,
oblast,
income_id,
odid,
nm_id,
subject,
category,
brand,
is_cancel,
cancel_dt,

** В базе данных создана таблица Sales:
'g_number',
'date',
'last_change_date',
'supplier_article',
'tech_size',
'barcode',
'total_price',
'discount_percent',
'is_supply',
'is_realization',
'promo_code_discount',
'warehouse_name',
'country_name',
'oblast_okrug_name',
'region_name',
'income_id',
'sale_id',
'odid',
'spp',
'for_pay',
'finished_price',
'price_with_disc',
'nm_id',
'subject',
'category',
'brand',
'is_storno',

** Запуск команды order осуществляется с помощью команды:
    php artisan app:import-orders-command

** Запуск команды order осуществляется с помощью команды:
    php artisan app:import-sales-command  

