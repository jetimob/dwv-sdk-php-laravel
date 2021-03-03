<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompanyBusinessContact
{
    use Serializable;

    protected string $responsible;
    protected string $phone_number;

    /**
     * @return string
     */
    public function getResponsible(): string
    {
        return $this->responsible;
    }

    /**
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }


}
