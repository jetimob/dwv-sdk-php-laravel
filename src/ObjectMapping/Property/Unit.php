<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class Unit
{
    use Serializable;

    protected int $id;
    protected int $title;
    protected float $price;
    protected string $type;
    protected int $parking_spaces;
    protected int $dorms;
    protected int $suites;
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
     * @return int
     */
    public function getTitle(): int
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
    public function getParkingSpaces(): int
    {
        return $this->parking_spaces;
    }

    /**
     * @return int
     */
    public function getDorms(): int
    {
        return $this->dorms;
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
}
