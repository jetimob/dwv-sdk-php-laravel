<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class Unit
{
    use Serializable;

    protected int $id;
    protected string $title;
    protected float $price;
    protected FloorPlan $floor_plan;
    protected string $type;
    protected int $parking_spaces;
    protected int $dorms;
    protected int $suites;
    protected ?int $bathroom;
    protected ?float $util_area;
    protected ?float $private_area;
    protected ?float $total_area;
    /** @var UnitPaymentCondition[] */
    protected ?array $payment_conditions;

    protected function payment_conditionsItemType(): string
    {
        return UnitPaymentCondition::class;
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
    public function getParkingSpaces(): int
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
     * @return int
     */
    public function getSuites(): int
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

}
