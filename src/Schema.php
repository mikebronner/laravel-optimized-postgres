<?php namespace GeneaLabs\LaravelOptimizedPostgres;

use Illuminate\Support\Facades\Schema as OriginalSchema;
use Illuminate\Database\Schema\Builder;

class Schema extends OriginalSchema
{
    public static function connection($name) : Builder
    {
        return $this->setCustomGrammar(static::$app['db']->connection($name));
    }

    protected static function getFacadeAccessor()
    {
        return self::setCustomGrammar(static::$app['db']->connection());
    }

    protected static function setCustomGrammar($connection)
    {
        if (get_class($connection) === 'Illuminate\Database\PostgresConnection') {
            $grammar = $connection->withTablePrefix(new SchemaGrammar);
            $connection->setSchemaGrammar($grammar);
        }

        return $connection->getSchemaBuilder();
    }
}
