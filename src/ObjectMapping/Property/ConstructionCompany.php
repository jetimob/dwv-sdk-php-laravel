<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ConstructionCompany
{
    use Serializable;

    protected ?string $title;
    protected ?string $site;
    protected ?string $whatsapp;
    protected ?string $instagram;
    /** @var ConstructionCompanyBusinessContact[]|null */
    protected ?array $business_contacts;
    /** @var ConstructionCompanyAdditionalContact[]|null */
    protected ?array $additionals_contacts;
    protected ConstructionCompanyLogo $logo;

    protected function businessContactsItemType(): string
    {
        return ConstructionCompanyBusinessContact::class;
    }

    protected function additionalsContactsItemType(): string
    {
        return ConstructionCompanyAdditionalContact::class;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title ?? null;
    }

    /**
     * @return string|null
     */
    public function getSite(): ?string
    {
        return $this->site ?? null;
    }

    /**
     * @return string|null
     */
    public function getWhatsapp(): ?string
    {
        return $this->whatsapp ?? null;
    }

    /**
     * @return string|null
     */
    public function getInstagram(): ?string
    {
        return $this->instagram ?? null;
    }

    /**
     * @return ConstructionCompanyBusinessContact[]|null
     */
    public function getBusinessContacts(): ?array
    {
        return $this->business_contacts ?? [];
    }

    /**
     * @return ConstructionCompanyAdditionalContact[]|null
     */
    public function getAdditionalsContacts(): ?array
    {
        return $this->additionals_contacts ?? [];
    }

    /**
     * @return ConstructionCompanyLogo
     */
    public function getLogo(): ConstructionCompanyLogo
    {
        return $this->logo;
    }
}
