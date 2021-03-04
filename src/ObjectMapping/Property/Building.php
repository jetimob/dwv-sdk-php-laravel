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
    /** @var BuildingDescription[] $description */
    protected ?array $description;
    protected ?BuildingAddress $address;
    /** @var BuildingFeature[] $features */
    protected ?array $features;
    protected ?BuildingCover $cover;

    protected function descriptionItemType(): string
    {
        return BuildingDescription::class;
    }

    protected function featuresItemType(): string
    {
        return BuildingFeature::class;
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
    public function getArchitecturalPlans(): ?string
    {
        return $this->architectural_plans ?? null;
    }

    /**
     * @return string|null
     */
    public function getGallery(): ?string
    {
        return $this->gallery ?? null;
    }

    /**
     * @return string|null
     */
    public function getVideo(): ?string
    {
        return $this->video ?? null;
    }

    /**
     * @return string|null
     */
    public function getTour360(): ?string
    {
        return $this->tour_360 ?? null;
    }

    /**
     * @return string|null
     */
    public function getTextAddress(): ?string
    {
        return $this->text_address ?? null;
    }

    /**
     * @return BuildingDescription[]
     */
    public function getDescription(): ?array
    {
        return $this->description ?? [];
    }

    /**
     * @return BuildingAddress|null
     */
    public function getAddress(): ?BuildingAddress
    {
        return $this->address ?? null;
    }

    /**
     * @return BuildingFeature[]
     */
    public function getFeatures(): ?array
    {
        return $this->features ?? [];
    }

    /**
     * @return BuildingCover|null
     */
    public function getCover(): ?BuildingCover
    {
        return $this->cover ?? null;
    }
}
