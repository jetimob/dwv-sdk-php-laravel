<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompanyAdditionalContact
{
    use Serializable;

    protected ?string $responsible;
    protected ?string $whatsapp;

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
    public function getWhatsapp(): ?string
    {
        return $this->whatsapp ?? null;
    }


}
