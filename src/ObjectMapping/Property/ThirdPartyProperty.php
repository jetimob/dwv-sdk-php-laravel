<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ThirdPartyProperty
{
    use Serializable;

    protected string $title;
    protected float $price;
    protected string $type;
    protected int $dorms;
    protected string $text_address;
    protected BuildingAddress $address;
    protected BuildingCover $cover;
    /** @var BuildingFeature[] $features */
    protected ?array $features;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return int
     */
    public function getDorms(): int
    {
        return $this->dorms;
    }

    /**
     * @return string
     */
    public function getTextAddress(): string
    {
        return $this->text_address;
    }

    /**
     * @return BuildingAddress
     */
    public function getAddress(): BuildingAddress
    {
        return $this->address;
    }

    /**
     * @return BuildingCover
     */
    public function getCover(): BuildingCover
    {
        return $this->cover;
    }

    /**
     * @return BuildingFeature[]
     */
    public function getFeatures(): ?array
    {
        return $this->features;
    }
}
