<?php

namespace Jetimob\DWV\Api\Property;

use Jetimob\DWV\ObjectMapping\Property\PropertyData;
use Jetimob\Http\Response;

class PropertyListResponse extends Response
{
    use PaginatedResponse;

    /** @var PropertyData[] $data */
    protected array $data;

    protected function dataItemType(): string
    {
        return PropertyData::class;
    }

    /**
     * @return PropertyData[]
     */
    public function getData(): array
    {
        return $this->data;
    }
}
