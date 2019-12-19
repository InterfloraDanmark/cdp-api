<?php

namespace Interflora\CdpApi\Model;

/**
 * Class MarketingPermission
 *
 * @package Interflora\CdpApi\Model
 */
class MarketingPermission extends AbstractJsonSerializable
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
    protected $channelId;

    /**
     * @var string
     */
    protected $owner;

    /**
     * @var string
     */
    protected $source;

    /**
     * @var string
     */
    protected $campaign;

    /**
     * @var bool
     */
    protected $value;

    /**
     * @var string|null
     */
    protected $granted;

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
    public function getChannelId(): string {
        return $this->channelId;
    }

    /**
     * @param string $channelId
     *
     * @return self
     */
    public function setChannelId(string $channelId): self {
        $this->channelId = $channelId;

        return $this;
    }

    /**
     * @return string
     */
    public function getOwner(): string {
        return $this->owner;
    }

    /**
     * @param string $owner
     *
     * @return self
     */
    public function setOwner(string $owner): self {
        $this->owner = $owner;

        return $this;
    }

    /**
     * @return string
     */
    public function getSource(): string {
        return $this->source;
    }

    /**
     * @param string $source
     *
     * @return self
     */
    public function setSource(string $source): self {
        $this->source = $source;

        return $this;
    }

    /**
     * @return string
     */
    public function getCampaign(): string {
        return $this->campaign;
    }

    /**
     * @param string $campaign
     *
     * @return self
     */
    public function setCampaign(string $campaign): self {
       $this->campaign = $campaign;

      return $this;
    }

    /**
     * @return bool
     */
    public function getValue(): bool {
        return $this->value;
    }

    /**
     * @param bool $value
     *
     * @return self
     */
    public function setValue(bool $value): self {
        $this->value = $value;

        return $this;
    }

    /**
     * @return string|null
     */
    public function getGranted():? string {
        return $this->granted;
    }

    /**
     * @param string|null $granted
     *
     * @return self
     */
    public function setGranted(?string $granted): self {
        $this->granted = $granted;

      return $this;
    }

}
