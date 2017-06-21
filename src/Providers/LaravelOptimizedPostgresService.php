<?php namespace GeneaLabs\LaravelOptimizedPostgres\Providers;

use GeneaLabs\LaravelOptimizedPostgres\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

class LaravelOptimizedPostgresService extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
    }

    public function register()
    {
        //TODO: figure out how to overwrite the already loaded schema alias.
        AliasLoader::getInstance()->alias('Schema', Schema::class);
    }

    public function provides() : array
    {
        return ['genealabs-laravel-optimized-postgres'];
    }
}
