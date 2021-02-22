<?php

namespace Jetimob\DWV;

use Jetimob\DWV\Http\RequestWrapper\PropertyRequestWrapper;
use Jetimob\Http\Http;

class DWV
{
    protected Http $http;
    protected array $config;

    public function __construct(array $config = [])
    {
        $this->http = new Http($config['http'] ?? []);
        $this->config = $config;
    }

    public function properties(): PropertyRequestWrapper
    {
        return new PropertyRequestWrapper($this->http);
    }
}
