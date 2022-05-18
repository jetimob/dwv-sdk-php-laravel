<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class FloorPlanCategory
{
    use Serializable;

    // Título da categoria do tipo da unidade
    protected ?string $title;

    // Tag da categoria do tipo da unidade
    protected ?string $tag;

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
    public function getTag(): ?string
    {
        return $this->tag ?? null;
    }
}
