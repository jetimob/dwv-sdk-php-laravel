<?php

namespace Jetimob\DWV\Api\Traits;

trait PaginatedResponse
{
    protected int $total;
    protected int $perPage;
    protected int $page;
    protected int $lastPage;

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return $this->total;
    }

    /**
     * @return int
     */
    public function getPerPage(): int
    {
        return $this->perPage;
    }

    /**
     * @return int
     */
    public function getPage(): int
    {
        return $this->page;
    }

    /**
     * @return int
     */
    public function getLastPage(): int
    {
        return $this->lastPage;
    }
}
