<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompanyLogoSizes
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
