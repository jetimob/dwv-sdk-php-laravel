<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompanyAdditionalContact
{
    use Serializable;

    protected string $responsible;
    protected string $whatsapp;

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
    public function getWhatsapp(): string
    {
        return $this->whatsapp;
    }


}
