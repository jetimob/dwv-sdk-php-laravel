<?php

namespace Jetimob\DWV\Http\RequestWrapper;

use Illuminate\Contracts\Support\Arrayable;
use Jetimob\DWV\Api\Property\PropertyConditionListResponse;
use Jetimob\DWV\Api\Property\PropertyListResponse;
use Jetimob\Http\Request;
use Jetimob\Http\Response;

class PropertyRequestWrapper extends RequestWrapper
{
    /**
     * @param Arrayable|array $params
     * @return Response
     */
    public function list($params = []): Response
    {
        if (!is_array($params)) {
            $params = $params->toArray();
        }

        return $this->dwv->getClient()->sendExpectingResponseClass(
            $this->createAuthorizedRequest('get', 'integration/properties'),
            PropertyListResponse::class,
            ['query' => $params],
        );
    }

    public function conditions(): Response
    {
        return $this->dwv->getClient()->sendExpectingResponseClass(
            $this->createAuthorizedRequest('get', 'integration/properties/conditions'),
            PropertyConditionListResponse::class,
        );
    }

    public function types(): Response
    {
        return $this->http->sendExpectingResponseClass(
            new Request('get', 'integration/properties/types'),
            PropertyConditionListResponse::class,
        );
    }
}
