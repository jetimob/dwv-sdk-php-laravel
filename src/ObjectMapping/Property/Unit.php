<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class Unit
{
    use Serializable;

    protected int $id;
    protected ?string $title;
    protected ?float $price;
    protected FloorPlan $floor_plan;
    protected ?string $type;
    protected ?int $parking_spaces;
    protected ?int $dorms;
    protected ?int $suites;
    protected ?int $bathroom;
    protected ?float $util_area;
    protected ?float $private_area;
    protected ?float $total_area;
    /** @var UnitPaymentCondition[] */
    protected ?array $payment_conditions;
    /** @var UnitAdditionalGalleries[] $additional_galleries */
    protected ?array $additional_galleries;
    protected ?BuildingCover $cover = null;

    protected function paymentConditionsItemType(): string
    {
        return UnitPaymentCondition::class;
    }

    protected function additionalGalleriesItemType(): string
    {
        return UnitAdditionalGalleries::class;
    }

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
    public function getTitle(): string
    {
        return $this->title ?? '';
    }

    /**
     * @return float|null
     */
    public function getPrice(): ?float
    {
        return $this->price;
    }

    /**
     * @return ?string|null
     */
    public function getType(): ?string
    {
        return $this->type ?? null;
    }

    /**
     * @return int|null
     */
    public function getParkingSpaces(): ?int
    {
        return $this->parking_spaces;
    }

    /**
     * @return int|null
     */
    public function getDorms(): ?int
    {
        return $this->dorms ?? null;
    }

    /**
     * @return int|null
     */
    public function getSuites(): ?int
    {
        return $this->suites;
    }

    /**
     * @return UnitPaymentCondition[]
     */
    public function getPaymentConditions(): array
    {
        return $this->payment_conditions ?? [];
    }

    /**
     * @return float|null
     */
    public function getPrivateArea(): ?float
    {
        return $this->private_area;
    }

    /**
     * @return float|null
     */
    public function getTotalArea(): ?float
    {
        return $this->total_area;
    }

    /**
     * @return int|null
     */
    public function getBathroom(): ?int
    {
        return $this->bathroom;
    }

    /**
     * @return float|null
     */
    public function getUtilArea(): ?float
    {
        return $this->util_area;
    }

    /**
     * @return FloorPlan
     */
    public function getFloorPlan(): FloorPlan
    {
        return $this->floor_plan;
    }

    public function getAdditionalGalleries(): ?array
    {
        return $this->additional_galleries;
    }

    public function getCover(): ?BuildingCover
    {
        return $this->cover;
    }
}
