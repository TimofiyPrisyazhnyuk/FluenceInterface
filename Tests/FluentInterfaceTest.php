<?php

namespace Tests;

use Sql;

spl_autoload_register(function ($class) {
    include __DIR__ . '/../' . $class . '.php';
});

/**
 * Class FluentInterfaceTest
 * @package Tests
 */
class FluentInterfaceTest
{
    /**
     * Test FluentInterface
     */
    public function testBuildSQL()
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        print_r((string)$query);
    }
}

// Run test.
(new FluentInterfaceTest())->testBuildSQL();