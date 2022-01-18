<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class BuildingDescription
{
    use Serializable;

    protected ?string $title;

    /** @var BuildingDescriptionItem[] $items */
    protected array $items;

    protected function itemsItemType(): string
    {
        return BuildingDescriptionItem::class;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
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
