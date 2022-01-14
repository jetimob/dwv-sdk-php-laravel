<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class BuildingCoverSizes
{
    use Serializable;

    protected ?string $small;
    protected ?string $medium;
    protected ?string $large;
    protected ?string $circle;

    /**
     * @return string|null
     */
    public function getSmall(): ?string
    {
        return $this->small;
    }

    /**
     * @return string|null
     */
    public function getMedium(): ?string
    {
        return $this->medium;
    }

    /**
     * @return string|null
     */
    public function getLarge(): ?string
    {
        return $this->large;
    }

    /**
     * @return string|null
     */
    public function getCircle(): ?string
    {
        return $this->circle;
    }

}
