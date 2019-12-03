<?php

namespace Interflora\CdpApi\Model;

class Account extends AbstractJsonSerializable {

  /**
   * Male gender.
   */
  public const MALE = 'm';

  /**
   * Female gender.
   */
  public const FEMALE = 'f';

  /**
   * @var string|null
   */
  protected $id;

  /**
   * @var integer
   */
  protected $debitorNumber;

  /**
   * @var string
   */
  protected $firstName;

  /**
   * @var string
   */
  protected $lastName = ' ';

  /**
   * @var string
   */
  protected $email;

  /**
   * @var string
   */
  protected $pwd1 = ' ';

  /**
   * @var string
   */
  protected $type = 'protected';

  /**
   * @var string
   */
  protected $telephone;

  /**
   * @var string
   */
  protected $gender = self::MALE;

  /**
   * @var Address
   */
  protected $address;

  /**
   * @var Business
   */
  protected $business;

  /**
   * @return string
   */
  public function getId(): string {
    return $this->id;
  }

  /**
   * @param string|null $id
   *
   * @return $this
   */
  public function setId(?string $id): self {
    $this->id = $id;

    return $this;
  }

  /**
   * @return int
   */
  public function getDebitorNumber(): int {
    return $this->debitorNumber;
  }

  /**
   * @param int $debitorNumber
   *
   * @return $this
   */
  public function setDebitorNumber(int $debitorNumber): self {
    $this->debitorNumber = $debitorNumber;

    return $this;
  }

  /**
   * @return string
   */
  public function getFirstName(): string {
    return $this->firstName;
  }

  /**
   * @param string $firstName
   *
   * @return $this
   */
  public function setFirstName(string $firstName): self {
    $this->firstName = $firstName;

    return $this;
  }

  /**
   * @return string
   */
  public function getLastName(): string {
    return $this->lastName;
  }

  /**
   * @param string $lastName
   *
   * @return $this
   */
  public function setLastName(string $lastName): self {
    $this->lastName = $lastName;

    return $this;
  }

  /**
   * @return string
   */
  public function getEmail(): string {
    return $this->email;
  }

  /**
   * @param string $email
   *
   * @return $this
   */
  public function setEmail(string $email): self {
    $this->email = $email;

    return $this;
  }

  /**
   * @return string
   */
  public function getPwd1(): string {
    return $this->pwd1;
  }

  /**
   * @param string $pwd1
   *
   * @return $this
   */
  public function setPwd1(string $pwd1): self {
    $this->pwd1 = $pwd1;

    return $this;
  }

  /**
   * @return string
   */
  public function getType(): string {
    return $this->type;
  }

  /**
   * @param string $type
   *
   * @return $this
   */
  public function setType(string $type): self {
    $this->type = $type;

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
   * @return $this
   */
  public function setTelephone(string $telephone): self {
    $this->telephone = $telephone;

    return $this;
  }

  /**
   * @return string
   */
  public function getGender(): string {
    return $this->gender;
  }

  /**
   * @param string $gender
   *
   * @return $this
   */
  public function setGender(string $gender): self {
    $this->gender = $gender;

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
   * @return $this
   */
  public function setAddress(\Interflora\CdpApi\Model\Address $address): self {
    $this->address = $address;

    return $this;
  }

  /**
   * @return \Interflora\CdpApi\Model\Business
   */
  public function getBusiness(): \Interflora\CdpApi\Model\Business {
    return $this->business;
  }

  /**
   * @param \Interflora\CdpApi\Model\Business $business
   *
   * @return $this
   */
  public function setBusiness(\Interflora\CdpApi\Model\Business $business): self {
    $this->business = $business;

    return $this;
  }


}
