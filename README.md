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


** Запуск команды order осуществляется с помощью команды:
    php artisan app:import-orders-command

** Запуск команды order осуществляется с помощью команды:
    php artisan app:import-sales-command 

**Запуск команды incomes осуществляется с помощью команды:
    php artisan app:import-incomes-command    

**Запуск команды stocks осуществляется с помощью команды:
    php artisan app:import-stocks-command                                                   
                                   

