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

class BuildingCoverSizes
{
    use Serializable;


    protected string $small;
    protected string $medium;
    protected string $large;
    protected string $circle;

    /**
     * @return string
     */
    public function getSmall(): string
    {
        return $this->small;
    }

    /**
     * @return string
     */
    public function getMedium(): string
    {
        return $this->medium;
    }

    /**
     * @return string
     */
    public function getLarge(): string
    {
        return $this->large;
    }

    /**
     * @return string
     */
    public function getCircle(): string
    {
        return $this->circle;
    }

}
