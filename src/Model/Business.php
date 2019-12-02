<?php

namespace Interfloa\CdpApi\Model;

class Business extends AbstractJsonSerializable {

  /**
   * @var string|null
   */
  protected $id;

  /**
   * @var string
   */
  protected $name = '';

  /**
   * @var string
   */
  protected $debitorNumber = '';

  /**
   * @var string
   */
  protected $telephone = '';

  /**
   * @var string
   */
  protected $fax = '';

  /**
   * @var string
   */
  protected $monthlyInvoice = '';

  /**
   * @var string
   */
  protected $electronicInvoice = '';

  /**
   * @var string
   */
  protected $eanNumber = '';

  /**
   * @var string
   */
  protected $cvrNumber = '';

  /**
   * @var string
   */
  protected $companyReference = '';

  /**
   * @var Address
   */
  protected $address;

  /**
   * @return string|null
   */
  public function getId(): ?string {
    return $this->id;
  }

  /**
   * @param string|null $id
   *
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setId(?string $id): self {
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
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setName(string $name): self {
    $this->name = $name;

    return $this;
  }

  /**
   * @return string
   */
  public function getDebitorNumber(): string {
    return $this->debitorNumber;
  }

  /**
   * @param string $debitorNumber
   *
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setDebitorNumber(string $debitorNumber): self {
    $this->debitorNumber = $debitorNumber;

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
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setTelephone(string $telephone): self {
    $this->telephone = $telephone;

    return $this;
  }

  /**
   * @return string
   */
  public function getFax(): string {
    return $this->fax;
  }

  /**
   * @param string $fax
   *
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setFax(string $fax): self {
    $this->fax = $fax;

    return $this;
  }

  /**
   * @return string
   */
  public function getMonthlyInvoice(): string {
    return $this->monthlyInvoice;
  }

  /**
   * @param string $monthlyInvoice
   *
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setMonthlyInvoice(string $monthlyInvoice): self {
    $this->monthlyInvoice = $monthlyInvoice;

    return $this;
  }

  /**
   * @return string
   */
  public function getElectronicInvoice(): string {
    return $this->electronicInvoice;
  }

  /**
   * @param string $electronicInvoice
   *
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setElectronicInvoice(string $electronicInvoice): self {
    $this->electronicInvoice = $electronicInvoice;

    return $this;
  }

  /**
   * @return string
   */
  public function getEanNumber(): string {
    return $this->eanNumber;
  }

  /**
   * @param string $eanNumber
   *
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setEanNumber(string $eanNumber): self {
    $this->eanNumber = $eanNumber;

    return $this;
  }

  /**
   * @return string
   */
  public function getCvrNumber(): string {
    return $this->cvrNumber;
  }

  /**
   * @param string $cvrNumber
   *
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setCvrNumber(string $cvrNumber): self {
    $this->cvrNumber = $cvrNumber;

    return $this;
  }

  /**
   * @return string
   */
  public function getCompanyReference(): string {
    return $this->companyReference;
  }

  /**
   * @param string $companyReference
   *
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setCompanyReference(string $companyReference): self {
    $this->companyReference = $companyReference;

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
   * @return \Interfloa\CdpApi\Model\Business
   */
  public function setAddress(\Interfloa\CdpApi\Model\Address $address): self {
    $this->address = $address;

    return $this;
  }


}
