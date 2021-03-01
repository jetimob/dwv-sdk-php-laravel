<?php

namespace Jetimob\DWV\Facade;

use Illuminate\Support\Facades\Facade;

class DWV extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'jetimob.dwv';
    }
}
