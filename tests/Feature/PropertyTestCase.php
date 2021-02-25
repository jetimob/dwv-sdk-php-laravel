<?php

namespace Jetimob\DWV\Tests\Feature;

use Jetimob\DWV\Api\Property\PropertyListRequestParams;
use Jetimob\DWV\Facade\DWV;
use Jetimob\DWV\Tests\TestCase;

class PropertyTestCase extends TestCase
{
    /** @test */
    public function canListPropertiesWithoutParams(): void
    {
        $response = DWV::properties()->list();
        self::assertNotEmpty($response);
    }

    /** @test */
    public function canListPropertiesWithParams(): void
    {
        $params = new PropertyListRequestParams();
        $params->setLimit(1);

        $response = DWV::properties()->list($params);
        self::assertNotEmpty($response);
    }

    /** @test */
    public function canListPropertiesConditions(): void
    {
        $response = DWV::properties()->conditions();

        self::assertNotEmpty($response);
    }
}
