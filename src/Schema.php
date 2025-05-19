<?php namespace GeneaLabs\LaravelOptimizedPostgres;

use Illuminate\Support\Facades\Schema as OriginalSchema;
use Illuminate\Database\Schema\Builder;

class Schema extends OriginalSchema
{
    public static function connection($name) : Builder
    {
        return self::setCustomGrammar(static::$app['db']->connection($name));
    }

    protected static function getFacadeAccessor()
    {
        self::setCustomGrammar(static::$app["db"]->connection());

        return "db.schema";
    }

    protected static function setCustomGrammar($connection)
    {
        if (get_class($connection) === 'Illuminate\Database\PostgresConnection') {
            $connection->setSchemaGrammar(app(SchemaGrammar::class));
        }

        return $connection->getSchemaBuilder();
    }
}
