<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class PropertyData
{
    use Serializable;

    public const NEW = 'new';
    public const USED = 'used';
    public const UNDER_CONSTRUCTION = 'under construction';

    /** @var int $id - ID de integração do imóvel */
    protected int $id;

    protected ?string $title;

    /** @var string|null $advertisement_title - Titulo de anúncio do imóvel (depreciado) */
    protected ?string $advertisement_title;

    /** @var string|null $description - Descrição do imóvel integrado */
    protected ?string $description;

    /** @var string $status
     * enum: "active" "inactive" "auto_inactive"
     * Informa o estado de integração do imóvel (A imobiliaria pode ativar ou desativar a integração do imóvel,
     * mas quando o status for auto_inactive significa que o imóvel no momento não se encontra disponivel para
     * venda no sistema e por isso deve-se ignorar integração deste imóvel)
     */
    protected string $status;

    /** @var bool $deleted - Informa se o imóvel integrado pela imobiliária, foi deletada pela mesma da integração.*/
    protected bool $deleted;

    /** @var string|null $address_display_type - Tipo de exibição que a imobiliaria escolheu para exibir os endereços das propriedades */
    protected ?string $address_display_type;

    /** @var Unit $unit - Informações da unidade selecionada para integração */
    protected Unit $unit;

    /** @var Building $building - Informações do empreendimento */
    protected Building $building;

    /** @var ThirdPartyProperty $third_party_property - Informações do terceiro selecionado para integração */
    protected ThirdPartyProperty $third_party_property;

    /** @var ConstructionCompany $construction_company - Informações da construtora */
    protected ConstructionCompany $construction_company;

    /** @var string|null  */
    protected ?string $construction_stage;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getAdvertisementTitle(): ?string
    {
        return $this->advertisement_title;
    }

    /**
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getStatus(): string
    {
        return $this->status;
    }

    /**
     * @return string|null
     */
    public function getAddressDisplayType(): ?string
    {
        return $this->address_display_type;
    }

    /**
     * @return Unit|null
     */
    public function getUnit(): ?Unit
    {
        return $this->unit ?? null;
    }

    /**
     * @return Building|null
     */
    public function getBuilding(): ?Building
    {
        return $this->building ?? null;
    }

    /**
     * @return ThirdPartyProperty|null
     */
    public function getThirdPartyProperty(): ?ThirdPartyProperty
    {
        return $this->third_party_property ?? null;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool
    {
        return $this->deleted;
    }

    /**
     * @return ConstructionCompany
     */
    public function getConstructionCompany(): ConstructionCompany
    {
        return $this->construction_company;
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
    public function getConstructionStage(): ?string
    {
        return $this->construction_stage;
    }
}
