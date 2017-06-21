<?php namespace GeneaLabs\LaravelOptimizedPostgres;

use Illuminate\Database\Schema\Grammars\PostgresGrammar;
use Illuminate\Support\Fluent;

class SchemaGrammar extends PostgresGrammar
{
    protected function typeChar(Fluent $column)
    {
        return "text";
    }

    protected function typeString(Fluent $column)
    {
        return "text";
    }
}
