<?php

namespace Interflora\CdpApi\Model;

class Subscription extends AbstractJsonSerializable
{

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $startDate;

    /**
     * @var string
     */
    protected $endDate;

    /**
     * @var integer
     */
    protected $frequency;

    /**
     * @var string
     */
    protected $florist;

    /**
     * @var string
     */
    protected $product;

    /**
     * @var string
     */
    protected $planId;

    /**
     * @var string
     */
    protected $subscriptionId;

    /**
     * @var bool
     */
    protected $deleted;

    /**
     * @var \Interflora\CdpApi\Model\Address
     */
    protected $address;

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
     * @return string
     */
    public function getAccountId(): string {
        return $this->accountId;
    }

    /**
     * @param string $accountId
     *
     * @return self
     */
    public function setAccountId(string $accountId): self {
        $this->accountId = $accountId;

      return $this;
    }

    /**
     * @return string
     */
    public function getName(): string {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getStartDate(): string {
        return $this->startDate;
    }

    /**
     * @param string $startDate
     *
     * @return self
     */
    public function setStartDate(string $startDate): self {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getEndDate(): string {
        return $this->endDate;
    }

    /**
     * @param string $endDate
     *
     * @return self
     */
    public function setEndDate(string $endDate): self {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return int
     */
    public function getFrequency(): int {
        return $this->frequency;
    }

    /**
     * @param int $frequency
     *
     * @return self
     */
    public function setFrequency(int $frequency): self {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * @return string
     */
    public function getFlorist(): string {
        return $this->florist;
    }

    /**
     * @param string $florist
     *
     * @return self
     */
    public function setFlorist(string $florist): self {
        $this->florist = $florist;

        return $this;
    }

    /**
     * @return string
     */
    public function getProduct(): string {
        return $this->product;
    }

    /**
     * @param string $product
     *
     * @return self
     */
    public function setProduct(string $product): self {
        $this->product = $product;

        return $this;
    }

    /**
     * @return string
     */
    public function getPlanId(): string {
        return $this->planId;
    }

    /**
     * @param string $planId
     *
     * @return self
     */
    public function setPlanId(string $planId): self {
        $this->planId = $planId;

        return $this;
    }

    /**
     * @return string
     */
    public function getSubscriptionId(): string {
        return $this->subscriptionId;
    }

    /**
     * @param string $subscriptionId
     *
     * @return self
     */
    public function setSubscriptionId(string $subscriptionId): self {
        $this->subscriptionId = $subscriptionId;

        return $this;
    }

    /**
     * @return bool
     */
    public function isDeleted(): bool {
        return $this->deleted;
    }

    /**
     * @param bool $deleted
     *
     * @return self
     */
    public function setDeleted(bool $deleted): self {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * @return \Interflora\CdpApi\Model\Address
     */
    public function getAddress(): \Interflora\CdpApi\Model\Address {
        return $this->address;
    }

    /**
     * @param \Interflora\CdpApi\Model\Address $address
     *
     * @return self
     */
    public function setAddress(\Interflora\CdpApi\Model\Address $address): self {
        $this->address = $address;

        return $this;
    }

}
