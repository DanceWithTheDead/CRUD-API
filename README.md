# Laravel CRUD API

Простое REST API для управления ресурсами (например, постами) с базовыми CRUD-операциями.

## 📌 Особенности
- Реализация CRUD (Create, Read, Update, Delete)
- Использование Eloquent ORM
- RESTful-маршрутизация
- Примеры запросов

## 🚀 Быстрый старт

### Установка
1. Клонируйте репозиторий:
```bash
git clone https://github.com/DanceWithTheDead/CRUD-API.git

cd CRUD-API
cp .env.example .env
composer install
```
2. Запуск докера
```bash
в папке докера следующие команды 
cp .env.example .env

docker compose up -d

```
3. Подключиться к БД через DATABASE
   .....
4. Запустите миграции:
```bash
в контейнере php-fpm
php artisan migrate
php artisan db:seed
```
5. Вставить в постман коллекцию 
ApiCrud.collection.json
