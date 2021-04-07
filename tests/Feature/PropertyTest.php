<?php

namespace Jetimob\DWV\Tests\Feature;

use Jetimob\DWV\Api\Property\PropertyConditionListResponse;
use Jetimob\DWV\Api\Property\PropertyListRequestParams;
use Jetimob\DWV\Api\Property\PropertyListResponse;
use Jetimob\DWV\Facade\DWV;
use Jetimob\DWV\ObjectMapping\Property\Condition;
use Jetimob\DWV\ObjectMapping\Property\PropertyData;
use Jetimob\DWV\ObjectMapping\Property\UnitPaymentConditionOperator;
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
        $params->setLimit(50);

        /** @var PropertyListResponse $response */
        $response = DWV::properties(env('DWV_BEARER_TOKEN'))->list($params);
        self::assertNotEmpty($response);
        self::assertInstanceOf(PropertyListResponse::class, $response);

        foreach ($response->getData() as $propertyData) {
            self::assertInstanceOf(PropertyData::class, $propertyData);
            if ($unit = $propertyData->getUnit()) {
                self::assertIsInt($unit->getDorms());
                self::assertIsInt($unit->getId());
                self::assertIsString($unit->getType());
                self::assertIsString($unit->getTitle());
                self::assertIsArray($unit->getPaymentConditions());
                foreach ($unit->getPaymentConditions() as $paymentCondition) {
                    if (!is_null($operator = $paymentCondition->getOperator())) {
                        self::assertInstanceOf(UnitPaymentConditionOperator::class, $operator);
                    }
                    self::assertIsString($operator->getType());
                    self::assertIsString($paymentCondition->getTitle());
                    self::assertIsString($paymentCondition->getValue());
                }
                if (!is_null($unit->getPrivateArea())) {
                    self::assertIsFloat($unit->getPrivateArea());
                }
                if (!is_null($unit->getTotalArea())) {
                    self::assertIsFloat($unit->getTotalArea());
                }
            }
            if ($building = $propertyData->getBuilding()) {
                self::assertIsFloat($building->getAddress()->getLatitude());
                self::assertIsFloat($building->getAddress()->getLongitude());
            }
        }
    }

    /** @test */
    public function canListPropertiesConditions(): void
    {
        $response = DWV::properties(env('DWV_BEARER_TOKEN'))->conditions();

        self::assertNotEmpty($response->getData());
        self::assertInstanceOf(PropertyConditionListResponse::class, $response);
        self::assertInstanceOf(Condition::class, $response->getData()[0]);
    }

}
