<?php

namespace Interflora\CdpApi\Model;

class Notification extends AbstractJsonSerializable
{
    /**
     * @var string
     */
    protected $type;

    /**
     * @var bool
     */
    protected $value;

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param bool $value
     *
     * @return $this
     */
    public function setValue(bool $value): self
    {
        $this->value = $value;

        return $this;
    }


}
