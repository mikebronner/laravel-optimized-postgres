# Optimized Postgres for Laravel

![Optimized Postgres for Laravel](https://repository-images.githubusercontent.com/94943563/38eea380-f344-11e9-95f0-1cd990116866)

[![Join the chat at https://gitter.im/GeneaLabs/laravel-optimized-postgres](https://badges.gitter.im/GeneaLabs/laravel-optimized-postgres.svg)](https://gitter.im/GeneaLabs/laravel-optimized-postgres?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

## Impetus
By default I like my Postgres database to use `text` type for all textual fields.
 When you run your migrations with this package installed, it will convert the
 following migration types to `text`: `char`, and `string`.

## Installation
### Requirements
- PHP >=7.0
- Laravel >=5.4

### Composer Command
```sh
composer require genealabs/laravel-optimized-postgres
```

### Service Provider
If you are on Laravel 5.5, the service provider will auto-register once the
 package is installed. You can skip this step. If you haven't upgraded to
 Laravel 5.5 yet, add the following to the `providers` array in your
 `\config\app.php` file:
```php
GeneaLabs\LaravelOptimizedPostgres\Providers\LaravelOptimizedPostgresService::class,
```

## Usage
When writing migrations, be sure to remove the following use statement from the
 top of the file:
```php
use Illuminate\Support\Facades\Schema;
```

This is included in the two default migrations provided with Laravel projects,
 but I don't believe is added when you `make` a new migration.

## Future Updates
- possibly expand to normalize numbers, more research needed.
