<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class BuildingFeature
{
    use Serializable;

    protected string $type;
    /** @var string[] $tags */
    protected array $tags;

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string[]
     */
    public function getTags(): array
    {
        return $this->tags;
    }
}
