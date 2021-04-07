<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class BuildingCover
{
    use Serializable;

    protected string $url;

    protected BuildingCoverSizes $sizes;

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @return BuildingCoverSizes
     */
    public function getSizes(): BuildingCoverSizes
    {
        return $this->sizes;
    }
}
