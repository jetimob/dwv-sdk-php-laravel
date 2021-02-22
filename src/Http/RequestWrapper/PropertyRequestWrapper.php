<?php

namespace Jetimob\DWV\Http\RequestWrapper;

use Jetimob\DWV\Api\Property\PropertyListResponse;
use Jetimob\Http\Request;
use Jetimob\Http\Response;

class PropertyRequestWrapper extends RequestWrapper
{
    public function list(): Response
    {
        return $this->http->sendExpectingResponseClass(
            new Request('get', 'integration/properties'),
            PropertyListResponse::class
        );
    }
}
