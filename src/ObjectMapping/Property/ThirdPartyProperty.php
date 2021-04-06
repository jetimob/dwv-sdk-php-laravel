<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class ThirdPartyProperty
{
    use Serializable;

    protected int $id;
    protected string $title;
    protected float $price;
    protected string $type;
    protected ?int $dorms;
    protected string $text_address;
    protected ?float $private_area;
    protected ?float $total_area;
    protected ?int $suites;
    protected ?int $parking_spaces;
    protected BuildingAddress $address;
    protected BuildingCover $cover;
    /** @var BuildingCover[]|null */
    protected ?array $gallery;
    /** @var BuildingFeature[] $features */
    protected ?array $features;
    /** @var UnitPaymentCondition[] */
    protected ?array $payment_conditions;

    protected function payment_conditionsItemType(): string
    {
        return UnitPaymentCondition::class;
    }

    protected function galleryItemType(): string
    {
        return BuildingCover::class;
    }

    protected function featuresItemType(): string
    {
        return BuildingFeature::class;
    }

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
     * @return int|null
     */
    public function getDorms(): ?int
    {
        return $this->dorms ?? null;
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
     * @return BuildingCover[]|null
     */
    public function getGallery(): ?array
    {
        return $this->gallery;
    }

    /**
     * @return BuildingFeature[]
     */
    public function getFeatures(): ?array
    {
        return $this->features ?? [];
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return float|null
     */
    public function getPrivateArea(): ?float
    {
        return $this->private_area ?? null;
    }

    /**
     * @return float|null
     */
    public function getTotalArea(): ?float
    {
        return $this->total_area ?? null;
    }

    /**
     * @return int|null
     */
    public function getSuites(): ?int
    {
        return $this->suites ?? null;
    }

    /**
     * @return int|null
     */
    public function getParkingSpaces(): ?int
    {
        return $this->parking_spaces ?? null;
    }

    /**
     * @return UnitPaymentCondition[]
     */
    public function getPaymentConditions(): ?array
    {
        return $this->payment_conditions ?? null;
    }
}
