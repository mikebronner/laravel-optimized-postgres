# Optimized Postgres for Laravel

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
