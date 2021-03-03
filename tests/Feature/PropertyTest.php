<?php

namespace Jetimob\DWV\Tests\Feature;

use Jetimob\DWV\Api\Property\PropertyConditionListResponse;
use Jetimob\DWV\Api\Property\PropertyListRequestParams;
use Jetimob\DWV\Api\Property\PropertyListResponse;
use Jetimob\DWV\Facade\DWV;
use Jetimob\DWV\ObjectMapping\Property\Condition;
use Jetimob\DWV\ObjectMapping\Property\PropertyData;
use Jetimob\DWV\Tests\TestCase;

class PropertyTest extends TestCase
{
    /** @test */
    public function canListPropertiesWithoutParams(): void
    {
        /** @var PropertyListResponse $response */
        $response = DWV::properties(env('DWV_BEARER_TOKEN'))->list();
        self::assertNotEmpty($response->getData());
        self::assertInstanceOf(PropertyListResponse::class, $response);
        self::assertInstanceOf(PropertyData::class, $response->getData()[0]);
    }

    /** @test */
    public function canListPropertiesWithParams(): void
    {
        $params = new PropertyListRequestParams();
        $params->setLimit(1);

        /** @var PropertyListResponse $response */
        $response = DWV::properties(env('DWV_BEARER_TOKEN'))->list($params);
        self::assertNotEmpty($response);
        self::assertInstanceOf(PropertyListResponse::class, $response);
        self::assertInstanceOf(PropertyData::class, $response->getData()[0]);
    }

    /** @test */
    public function canListPropertiesConditions(): void
    {
        $response = DWV::properties(env('DWV_BEARER_TOKEN'))->conditions();

        self::assertNotEmpty($response->getData());
        self::assertInstanceOf(PropertyConditionListResponse::class, $response);
        self::assertInstanceOf(Condition::class, $response->getData()[0]);
    }

    public function canListPropertiesTypes(): void
    {
        $response = DWV::properties()->types();
    }
}
