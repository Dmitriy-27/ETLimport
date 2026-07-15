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
    -Command - запуск проекта
    -DTO - объект передачи 
    -Service - логика 
    -Repository - команды в БД 
    -Model - описание в базу
    -Database - таблицы (sale, orders, stocks, incomes)

**composer install 

**запуск контейнера через docker compose up -d

логин\пароль находится в БД в .env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wb_api
DB_USERNAME=wb_user
DB_PASSWORD=wb_password


//       Обязательно запусить все команды

** Запуск команды order осуществляется с помощью команды:
    php artisan app:import-orders-command

** Запуск команды sales осуществляется с помощью команды:
    php artisan app:import-sales-command 

**Запуск команды incomes осуществляется с помощью команды:
    php artisan app:import-incomes-command    

**Запуск команды stocks осуществляется с помощью команды:
    php artisan app:import-stocks-command                                                   
                                   
Используемые мною эндпоинты в постмане:
INCOMES
http://109.73.206.144:6969/api/incomes?dateFrom=2026-01-01&dateTo=2026-12-31&page=1&limit=10&key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie
SALES
http://109.73.206.144:6969/api/sales?dateFrom=2024-01-01&dateTo=2026-12-31&page=1&limit=10&key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie
ORDER
http://109.73.206.144:6969/api/orders?dateFrom=2024-01-01&dateTo=2026-12-31&page=1&limit=10&key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie
STOCKS
http://109.73.206.144:6969/api/stocks?dateFrom=2026-07-15&dateTo=2026-12-31&page=1&limit=10&key=E6kUTYrYwZq2tN4QEtyzsbEBk3ie
