<?php

namespace Jetimob\DWV\Tests;

use Jetimob\DWV\DWVServiceProvider;
use Jetimob\Http\HttpServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            DWVServiceProvider::class,
            HttpServiceProvider::class,
        ];
    }
}
