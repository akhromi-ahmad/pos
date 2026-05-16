# POS

Simple Laravel CRUD example for products.

## Requirements

- PHP 8.2+
- Composer

## Setup

1. Install dependencies:
   ```bash
   composer install
   ```
2. Prepare environment file:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```
3. Run migrations:
   ```bash
   php artisan migrate
   ```
4. Start server:
   ```bash
   php artisan serve
   ```

## Product CRUD

- List products: `GET /products`
- Create product: `GET /products/create` then submit form
- Show product: `GET /products/{product}`
- Edit product: `GET /products/{product}/edit` then submit form
- Delete product: `DELETE /products/{product}`

## Run Tests

```bash
php artisan test
```
