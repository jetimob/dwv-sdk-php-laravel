<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompanyLogo
{
    use Serializable;

    protected ?string $url;

    protected ConstructionCompanyLogoSizes $sizes;

    /**
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * @return ConstructionCompanyLogoSizes
     */
    public function getSizes(): ConstructionCompanyLogoSizes
    {
        return $this->sizes;
    }

}
