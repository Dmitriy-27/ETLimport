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

** Запуск команды осуществляется с помощью команды:
    php artisan app:import-orders-command


