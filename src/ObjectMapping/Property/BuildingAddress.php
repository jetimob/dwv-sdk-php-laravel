<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class BuildingAddress
{
    use Serializable;

    protected string $street_name;
    protected string $street_number;
    protected string $neighborhood;
    protected string $complement;
    protected string $zip_code;
    protected string $city;
    protected string $state;
    protected string $country;

    /**
     * @return string
     */
    public function getStreetName(): string
    {
        return $this->street_name;
    }

    /**
     * @return string
     */
    public function getStreetNumber(): string
    {
        return $this->street_number;
    }

    /**
     * @return string
     */
    public function getNeighborhood(): string
    {
        return $this->neighborhood;
    }

    /**
     * @return string
     */
    public function getComplement(): string
    {
        return $this->complement;
    }

    /**
     * @return string
     */
    public function getZipCode(): string
    {
        return $this->zip_code;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }
}
