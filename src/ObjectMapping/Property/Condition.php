<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class Condition
{
    use Serializable;

    /** @var string $name - Nome da condição */
    protected string $name;

    /** @var string $tag - Nome da tag para ser utilizada como filtro na query chamada property_condition */
    protected string $tag;

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getTag(): string
    {
        return $this->tag;
    }

}
