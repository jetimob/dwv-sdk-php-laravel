<?php

namespace Jetimob\DWV\Tests\Feature;

use Jetimob\DWV\Facade\DWV;
use Jetimob\DWV\Tests\TestCase;

class PropertyTestCase extends TestCase
{
    /** @test */
    public function wwww(): void
    {
        $response = DWV::properties()->list();
        self::assertNotEmpty($response);
        print_r($response);
    }
}
