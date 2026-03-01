<?php

namespace GeneaLabs\LaravelOptimizedPostgres\Tests;

use GeneaLabs\LaravelOptimizedPostgres\SchemaGrammar;
use Illuminate\Support\Fluent;
use PHPUnit\Framework\TestCase;

class SchemaGrammarTest extends TestCase
{
    private SchemaGrammar $grammar;

    protected function setUp(): void
    {
        parent::setUp();

        $this->grammar = new SchemaGrammar();
    }

    public function test_char_type_returns_text(): void
    {
        $column = new Fluent(['type' => 'char', 'length' => 255]);

        $method = new \ReflectionMethod($this->grammar, 'typeChar');
        $result = $method->invoke($this->grammar, $column);

        $this->assertSame('text', $result);
    }

    public function test_string_type_returns_text(): void
    {
        $column = new Fluent(['type' => 'string', 'length' => 255]);

        $method = new \ReflectionMethod($this->grammar, 'typeString');
        $result = $method->invoke($this->grammar, $column);

        $this->assertSame('text', $result);
    }
}
