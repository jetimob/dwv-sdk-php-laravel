<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class FloorPlanCategory
{
    use Serializable;

    // Título da categoria do tipo da unidade
    protected string $title;

    // Tag da categoria do tipo da unidade
    protected string $tag;

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }
}
