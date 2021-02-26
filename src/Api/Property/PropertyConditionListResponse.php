<?php

namespace Jetimob\DWV\Api\Property;

use Jetimob\Http\Response;
use Jetimob\DWV\ObjectMapping\Property\Condition;

class PropertyConditionListResponse extends Response
{
    /** @var Condition[] $data */
    protected array $data;

    public function dataItemType(): string
    {
        return Condition::class;
    }

    /**
     * @return Condition[]
     */
    public function getData(): array
    {
        return $this->data;
    }
}
