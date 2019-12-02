<?php

namespace Interflora\CdpApi\Model;

class Data extends AbstractJsonSerializable
{

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $name;

    /**
     * Data constructor.
     *
     * @param string|null $type
     * @param string|null $name
     */
    public function __construct(?string $type = null, ?string $name = null)
    {
        $this->type = $type;
        $this->name = $name;
    }
}
