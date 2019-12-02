<?php

namespace Interfloa\CdpApi\Model;

class Permission
{
  /**
   * @var string
   */
  protected $id;

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
     * @var bool
     */
    protected $value;

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
   * @return bool
   */
  public function isValue(): bool {
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


}
