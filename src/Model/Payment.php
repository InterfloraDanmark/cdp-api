<?php

namespace Interfloa\CdpApi\Model;

class Payment extends AbstractJsonSerializable
{

    /**
     * @var string|null
     */
    protected $type;

    /**
     * @var string
     */
    protected $gateway;

    /**
     * @var string
     */
    protected $transaction;

    /**
     * @var string
     */
    protected $state;

    /**
     * @param string|null $type
     *
     * @return $this
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $gateway
     *
     * @return $this
     */
    public function setGateway(string $gateway): self
    {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * @param string $transaction
     *
     * @return $this
     */
    public function setTransaction(string $transaction): self
    {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @param string $state
     *
     * @return $this
     */
    public function setState(string $state): self
    {
        $this->state = $state;

        return $this;
    }

}
