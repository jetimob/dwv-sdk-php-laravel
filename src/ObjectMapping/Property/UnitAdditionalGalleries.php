<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class UnitAdditionalGalleries
{
    use Serializable;

    protected ?string $title;
    /** @var BuildingCover[] $files */
    protected array $files;

    protected function filesItemType(): string
    {
        return BuildingCover::class;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @return BuildingCover[]
     */
    public function getFiles(): array
    {
        return $this->files ?? [];
    }
}
