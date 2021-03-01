<?php

namespace Jetimob\DWV;

use Jetimob\DWV\Http\RequestWrapper\PropertyRequestWrapper;
use Jetimob\Http\Http;

class DWV
{
    protected Http $client;
    protected array $config;
    private ?string $bearerToken = null;

    public function __construct(array $config = [])
    {
        $this->client = new Http($config['http'] ?? []);
        $this->config = $config;
        $this->bearerToken = $config['dwv_bearer_token'] ?? null;
    }

    /**
     * @return mixed|string|null
     */
    public function getBearerToken(): ?string
    {
        return $this->bearerToken;
    }

    /**
     * @return Http
     */
    public function getClient(): Http
    {
        return $this->client;
    }

    private function handleBearerTokenInitialization(?string $bearerToken): void
    {
        $bearerToken ??= $this->bearerToken;

        if (empty($bearerToken)) {
            throw new \RuntimeException(
                'A bearer token must be provided as argument or declared in the configuration "dwv_bearer_token"'
            );
        }

        $this->bearerToken = $bearerToken;
    }

    public function properties(?string $bearerToken = null): PropertyRequestWrapper
    {
        $this->handleBearerTokenInitialization($bearerToken);
        return new PropertyRequestWrapper($this);
    }
}
