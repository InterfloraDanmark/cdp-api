<?php

namespace Interfloa\CdpApi\Model;

class MarketPlace extends AbstractJsonSerializable
{
    /**
     * @var string
     */
    protected $name;

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
