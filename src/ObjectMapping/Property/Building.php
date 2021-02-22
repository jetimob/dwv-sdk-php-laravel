<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class Building
{
    use Serializable;

    protected ?string $title;
    protected ?string $architectural_plans;
    protected ?string $gallery;
    protected ?string $video;
    protected ?string $tour_360;
    protected ?string $text_address;
    /** @var \Jetimob\DWV\ObjectMapping\Property\BuildingDescription[] $description */
    protected ?array $description;
    protected ?BuildingAddress $address;
    /** @var \Jetimob\DWV\ObjectMapping\Property\BuildingFeature[] $features */
    protected ?array $features;
    protected ?BuildingCover $cover;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getGallery(): string
    {
        return $this->gallery;
    }

    /**
     * @return string
     */
    public function getArchitecturalPlans(): string
    {
        return $this->architectural_plans;
    }

    /**
     * @return string
     */
    public function getVideo(): string
    {
        return $this->video;
    }

    /**
     * @return string|null
     */
    public function getTour360(): ?string
    {
        return $this->tour_360;
    }

    /**
     * @return string
     */
    public function getTextAddress(): string
    {
        return $this->text_address;
    }

    /**
     * @return BuildingDescription[]
     */
    public function getDescription(): array
    {
        return $this->description;
    }

    /**
     * @return BuildingAddress
     */
    public function getAddress(): BuildingAddress
    {
        return $this->address;
    }

    /**
     * @return BuildingFeature[]
     */
    public function getFeatures(): array
    {
        return $this->features;
    }

    /**
     * @return BuildingCover
     */
    public function getCover(): BuildingCover
    {
        return $this->cover;
    }
}
