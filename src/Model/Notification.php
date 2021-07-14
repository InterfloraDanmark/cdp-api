<?php

namespace Interflora\CdpApi\Model;

class Notification extends AbstractJsonSerializable
{
    public const TYPE_SMS = 'sms';

    public const TYPE_EMAIL = 'email';

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
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
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

    /**
     *
     * @return boolean
     */
    public function getValue(): bool
    {
        return $this->value;
    }
}
