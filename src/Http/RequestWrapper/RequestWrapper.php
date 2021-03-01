<?php

namespace Jetimob\DWV\Http\RequestWrapper;

use Jetimob\DWV\DWV;
use Jetimob\Http\Request;

abstract class RequestWrapper
{
    protected DWV $dwv;

    public function __construct(DWV $dwv)
    {
        $this->dwv = $dwv;
    }

    protected function createAuthorizedRequest(string $method, string $uri)
    {
        return new Request($method, $uri, [
            'Authorization' => "Bearer {$this->dwv->getBearerToken()}"
        ]);
    }
}
