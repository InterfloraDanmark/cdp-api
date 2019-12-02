<?php

namespace Interflora\CdpApi\Model;

/**
 * Class MarketPlace
 *
 * @package Interflora\CdpApi\Model
 */
class MarketPlace extends AbstractJsonSerializable
{
    /**
     * @var string
     */
    protected $name;

    /**
     * MarketPlace constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

}
