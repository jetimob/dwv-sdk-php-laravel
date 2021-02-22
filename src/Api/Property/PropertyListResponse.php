<?php

namespace Jetimob\DWV\Api\Property;

use Jetimob\Http\Response;

class PropertyListResponse extends Response
{
    use PaginatedResponse;

    /** @var \Jetimob\DWV\ObjectMapping\Property\PropertyData[] $data */
    protected array $data;

    /**
     * @return \Jetimob\DWV\ObjectMapping\Property\PropertyData[]
     */
    public function getData(): array
    {
        return $this->data;
    }
}
