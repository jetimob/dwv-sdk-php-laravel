<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompanyLogoSizes
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
        return $this->small ?? null;
    }

    /**
     * @return string|null
     */
    public function getMedium(): ?string
    {
        return $this->medium ?? null;
    }

    /**
     * @return string|null
     */
    public function getLarge(): ?string
    {
        return $this->large ?? null;
    }

    /**
     * @return string|null
     */
    public function getCircle(): ?string
    {
        return $this->circle ?? null;
    }

}
