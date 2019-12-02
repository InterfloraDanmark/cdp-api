<?php

namespace Interfloa\CdpApi\Model;

class Florist extends AbstractJsonSerializable
{

    /**
     * @var
     */
    protected $id;
    /**
     * @var string
     */
    protected $name;
    /**
     * @var Address
     */
    protected $address;

    /**
     * @var string
     */
    protected $telephone;

    /**
     * @var string
     */
    protected $floristId;

  /**
   * @return mixed
   */
  public function getId() {
    return $this->id;
  }

  /**
   * @param mixed $id
   *
   * @return self
   */
  public function setId($id): self {
    $this->id = $id;

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
   * @return \Interfloa\CdpApi\Model\Address
   */
  public function getAddress(): \Interfloa\CdpApi\Model\Address {
    return $this->address;
  }

  /**
   * @param \Interfloa\CdpApi\Model\Address $address
   *
   * @return self
   */
  public function setAddress(\Interfloa\CdpApi\Model\Address $address): self {
    $this->address = $address;

    return $this;
  }

  /**
   * @return string
   */
  public function getTelephone(): string {
    return $this->telephone;
  }

  /**
   * @param string $telephone
   *
   * @return self
   */
  public function setTelephone(string $telephone): self {
    $this->telephone = $telephone;

    return $this;
  }

  /**
   * @return string
   */
  public function getFloristId(): string {
    return $this->floristId;
  }

  /**
   * @param string $floristId
   *
   * @return self
   */
  public function setFloristId(string $floristId): self {
    $this->floristId = $floristId;

    return $this;
  }

}
