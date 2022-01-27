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
     * @var string|null
     */
    protected $uuid;

    /**
     * Data constructor.
     *
     * @param string|null $type
     * @param string|null $name
     * @param string|null $uuid
     */
    public function __construct(?string $type = null, ?string $name = null, $uuid = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->uuid = $uuid;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    public function getUuid(): ?string
    {
      return $this->uuid;

    }

}
