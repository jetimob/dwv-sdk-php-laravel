<?php

namespace Jetimob\DWV\Api\Property;

use Illuminate\Contracts\Support\Arrayable;
use Jetimob\DWV\Api\Traits\ArrayableRequestParams;

/**
 * @link https://api.dwvapp.com.br/#tag/Propriedades/paths/~1integration~1properties/get
 */
class PropertyListRequestParams implements Arrayable
{
    use ArrayableRequestParams;

    /** @var int $limit - Define o máximo de propriedades que serão exibidos em cada página Default: 20 */
    protected int $limit;

    /** @var int $page - Seleciona a pagina para listar os items. Default: 1*/
    protected int $page;

    /** @var string $search
     * Traz propriedades onde algum dos campos foi encontrado no text search. Você pode pesquisar por propriedades
     * também baseado por informações da construtora e empreendimento.
     */
    protected string $search;

    /**
     * @var string $address - Filtra imóveis por endereço informado
     * @example address=Rua 248, 322
     */
    protected string $address;

    /** @var string $city - Filtrar imóveis por uma cidade em especifíco
     * @example city=Itapema
     */
    protected string $city;

    /** @var string $state - Filtrar imóveis por um estado em especifíco
     * @example city=SC
     */
    protected string $state;

    /**
     * @var string $bedrooms
     * Filtrar imóveis pela quantidade de quartos informado. Pode-se passar mais de um valor nesta query,
     * sendo que os mesmos tem que estar separados entre ",".
     * Esta query permite utilizar o operador +, sendo que este operador pode ser traduzido como >=.
     * @example bedrooms=1,3+
     */
    protected string $bedrooms;

    /**
     * @var string unit_suites
     * Filtrar imóveis pela quantidade de suites informado. Pode-se passar mais de um valor nesta query,
     * sendo que os mesmos tem que estar separados entre ",".
     * Esta query permite utilizar o operador +, sendo que este operador pode ser traduzido como >=.
     * @example bedrooms=1,3+
     */
    protected string $unit_suites;

    /**
     * @var string $unit_parking_spaces
     * Filtrar imóveis pela quantidade de suites informado. Pode-se passar mais de um valor nesta query,
     * sendo que os mesmos tem que estar separados entre ",".
     * Esta query permite utilizar o operador +, sendo que este operador pode ser traduzido como >=.
     * @example unit_parking_spaces=1,3+
     */
    protected string $unit_parking_spaces;

    /**
     * @var string $property_condition - Filtrar imóveis por condiçöes em que os mesmos se encontram.
     * Enum: "new" "used"
     */
    protected string $property_condition;

    /**
     * @var string $types - Filtrar imóveis por um tipo específico.
     * Enum: "apartment" "comercialRoom" "garden" "penthouse" "differentiated" "showroom" "decorated" "roof"
     * "furnished" "duplex" "smallFarm" "house" "hotel" "land" "warehouse"
     */
    protected string $types;

    /**
     * @var string $last_updates
     * Filtrar imóveis por um range de data definido. Sendo que estas datas devem estar no seguinte formato: 22/10/2020
     * @example last_updates=2020-10-25,2020-10-28
     */
    protected string $last_updates;

    /**
     * PropertyListRequestParams constructor.
     */
    public function __construct()
    {
    }

    /**
     * @param int $limit
     */
    public function setLimit(int $limit): void
    {
        $this->limit = $limit;
    }

    /**
     * @param int $page
     */
    public function setPage(int $page): void
    {
        $this->page = $page;
    }

    /**
     * @param string $search
     */
    public function setSearch(string $search): void
    {
        $this->search = $search;
    }

    /**
     * @param string $address
     */
    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    /**
     * @param string $state
     */
    public function setState(string $state): void
    {
        $this->state = $state;
    }

    /**
     * @param string $bedrooms
     */
    public function setBedrooms(string $bedrooms): void
    {
        $this->bedrooms = $bedrooms;
    }

    /**
     * @param string $unit_suites
     */
    public function setUnitSuites(string $unit_suites): void
    {
        $this->unit_suites = $unit_suites;
    }

    /**
     * @param string $unit_parking_spaces
     */
    public function setUnitParkingSpaces(string $unit_parking_spaces): void
    {
        $this->unit_parking_spaces = $unit_parking_spaces;
    }

    /**
     * @param string $property_condition
     */
    public function setPropertyCondition(string $property_condition): void
    {
        $this->property_condition = $property_condition;
    }

    /**
     * @param string $types
     */
    public function setTypes(string $types): void
    {
        $this->types = $types;
    }

    /**
     * @param string $last_updates
     */
    public function setLastUpdates(string $last_updates): void
    {
        $this->last_updates = $last_updates;
    }

    /**
     * @param string $city
     */
    public function setCity(string $city): void
    {
        $this->city = $city;
    }
}
