<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class UnitPaymentCondition
{
    use Serializable;

    protected string $title;
    protected ?UnitPaymentConditionOperator $operator;
    protected ?string $value;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return UnitPaymentConditionOperator|null
     */
    public function getOperator(): ?UnitPaymentConditionOperator
    {
        return $this->operator ?? null;
    }

    /**
     * @return string|null
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

}
