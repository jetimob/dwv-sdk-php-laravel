<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class BuildingDescription
{
    use Serializable;

    protected string $title;

    /** @var \Jetimob\DWV\ObjectMapping\Property\BuildingDescriptionItem[] $items */
    protected array $items;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return BuildingDescriptionItem[]
     */
    public function getItems(): array
    {
        return $this->items;
    }
}
