<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class FloorPlan
{
    use Serializable;

    // Categoria do tipo da unidade
    protected FloorPlanCategory $category;

    /**
     * @return FloorPlanCategory
     */
    public function getCategory(): FloorPlanCategory
    {
        return $this->category;
    }
}
