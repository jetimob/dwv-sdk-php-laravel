<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompanyBusinessContact
{
    use Serializable;

    protected ?string $responsible;
    protected ?string $phone_number;

    /**
     * @return string|null
     */
    public function getResponsible(): ?string
    {
        return $this->responsible ?? null;
    }

    /**
     * @return string|null
     */
    public function getPhoneNumber(): ?string
    {
        return $this->phone_number ?? null;
    }


}
