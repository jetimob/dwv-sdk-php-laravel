<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class Building
{
    use Serializable;

    protected int $id;
    protected ?string $title;
    /** @var BuildingCover[]|null */
    protected ?array $architectural_plans;
    /** @var BuildingCover[]|null */
    protected ?array $gallery;
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

    protected function architectural_plansItemType(): string
    {
        return BuildingCover::class;
    }

    protected function galleryItemType(): string
    {
        return BuildingCover::class;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title ?? null;
    }

    /**
     * @return BuildingCover[]|null
     */
    public function getArchitecturalPlans(): ?array
    {
        return $this->architectural_plans ?? [];
    }

    /**
     * @return BuildingCover[]|null
     */
    public function getGallery(): ?array
    {
        return $this->gallery ?? [];
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

}
