<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class PropertyData
{
    use Serializable;

    protected int $id;
    protected string $advertisement_title;
    protected string $description;
    protected string $status;
    protected ?string $address_display_type;

    protected Unit $unit;
    protected Building $building;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getAdvertisementTitle(): string
    {
        return $this->advertisement_title;
    }

    /**
     * @return string
     */
    public function getDescription(): string
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
     * @return Unit
     */
    public function getUnit(): Unit
    {
        return $this->unit;
    }

    /**
     * @return Building
     */
    public function getBuilding(): Building
    {
        return $this->building;
    }
}
