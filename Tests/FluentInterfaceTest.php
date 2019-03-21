<?php

namespace FluentInterface\Tests;

use FluentInterface\Sql;

require __DIR__ . '/../Sql.php';

class FluentInterfaceTest
{
    public function testBuildSQL()
    {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');

        print_r((string)$query);
    }
}

(new FluentInterfaceTest())->testBuildSQL();