<?php

namespace Jetimob\DWV\Api\Traits;

trait ArrayableRequestParams
{
    public function toArray(): array
    {
        $arr = [];
        $reflectionClass = new \ReflectionClass(self::class);
        $properties = $reflectionClass->getProperties(\ReflectionProperty::IS_PROTECTED);

        foreach ($properties as $property) {
            $property->setAccessible(true);

            if (!$property->isInitialized($this)) {
                continue;
            }

            $arr[$property->getName()] = $property->getValue($this);
        }

        return $arr;
    }
}
