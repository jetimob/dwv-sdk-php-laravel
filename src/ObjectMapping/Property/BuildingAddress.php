<?php

namespace Jetimob\DWV\ObjectMapping\Property;

use Jetimob\Http\Traits\Serializable;

class BuildingAddress
{
    use Serializable;

    protected int $id;
    protected ?string $street_name;
    protected ?string $street_number;
    protected ?string $neighborhood;
    protected ?string $complement;
    protected ?string $zip_code;
    protected ?string $city;
    protected ?string $state;
    protected ?string $country;
    protected ?float $latitude;
    protected ?float $longitude;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getStreetName(): ?string
    {
        return $this->street_name;
    }

    /**
     * @return string|null
     */
    public function getStreetNumber(): ?string
    {
        return $this->street_number;
    }

    /**
     * @return string|null
     */
    public function getNeighborhood(): ?string
    {
        return $this->neighborhood;
    }

    /**
     * @return string|null
     */
    public function getComplement(): ?string
    {
        return $this->complement ?? null;
    }

    /**
     * @return string|null
     */
    public function getZipCode(): ?string
    {
        return $this->zip_code;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @return string|null
     */
    public function getState(): ?string
    {
        return $this->state;
    }

    /**
     * @return string|null
     */
    public function getCountry(): ?string
    {
        return $this->country ?? null;
    }

    /**
     * @return float|null
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @return float|null
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

}
