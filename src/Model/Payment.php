<?php

namespace Interfloa\CdpApi\Model;

class Payment extends AbstractJsonSerializable
{

  /**
   * @var string
   */
  protected $id;

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
     * @var string
     */
    protected $ean_number;

    /**
     * @var string
     */
    protected $vat_number;

    /**
     * @var string
     */
    protected $internal_number;

    /**
     * @var string
     */
    protected $internal_reference;

    /**
     * @return string
     */
    public function getId(): string {
        return $this->id;
    }

    /**
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getType(): ?string {
        return $this->type;
    }

    /**
     * @param string|null $type
     *
     * @return self
     */
    public function setType(?string $type): self {
        $this->type = $type;

        return $this;
    }

    /**
     * @return string
     */
    public function getGateway(): string {
        return $this->gateway;
    }

    /**
     * @param string $gateway
     *
     * @return self
     */
    public function setGateway(string $gateway): self {
        $this->gateway = $gateway;

        return $this;
    }

    /**
     * @return string
     */
    public function getTransaction(): string {
        return $this->transaction;
    }

    /**
     * @param string $transaction
     *
     * @return self
     */
    public function setTransaction(string $transaction): self {
        $this->transaction = $transaction;

        return $this;
    }

    /**
     * @return string
     */
    public function getState(): string {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self {
        $this->state = $state;

        return $this;
    }

    /**
     * @return string
     */
    public function getEanNumber(): string {
        return $this->ean_number;
    }

    /**
     * @param string $ean_number
     *
     * @return self
     */
    public function setEanNumber(string $ean_number): self {
        $this->ean_number = $ean_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatNumber(): string {
        return $this->vat_number;
    }

    /**
     * @param string $vat_number
     *
     * @return self
     */
    public function setVatNumber(string $vat_number): self {
        $this->vat_number = $vat_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getInternalNumber(): string {
        return $this->internal_number;
    }

    /**
     * @param string $internal_number
     *
     * @return self
     */
    public function setInternalNumber(string $internal_number): self {
        $this->internal_number = $internal_number;

        return $this;
    }

    /**
     * @return string
     */
    public function getInternalReference(): string {
        return $this->internal_reference;
    }

    /**
     * @param string $internal_reference
     *
     * @return self
     */
    public function setInternalReference(string $internal_reference): self {
        $this->internal_reference = $internal_reference;

        return $this;
    }

}
