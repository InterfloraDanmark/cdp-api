<?php

namespace Interflora\CdpApi\Model;

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
  protected $telephone = '';

  /**
   * @var string
   */
  protected $fax = '';

  /**
   * @var bool
   */
  protected $monthlyInvoice = FALSE;

  /**
   * @var bool
   */
  protected $electronicInvoice = FALSE;

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
   * @return \Interflora\CdpApi\Model\Business
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
   * @return \Interflora\CdpApi\Model\Business
   */
  public function setName(?string $name): self {
    $this->name = $name;

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
   * @return \Interflora\CdpApi\Model\Business
   */
  public function setTelephone(?string $telephone): self {
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
   * @return \Interflora\CdpApi\Model\Business
   */
  public function setFax(?string $fax): self {
    $this->fax = $fax;

    return $this;
  }

  /**
   * @return bool
   */
  public function getMonthlyInvoice(): bool {
    return $this->monthlyInvoice;
  }

  /**
   * @param bool $monthlyInvoice
   *
   * @return \Interflora\CdpApi\Model\Business
   */
  public function setMonthlyInvoice(bool $monthlyInvoice): self {
    $this->monthlyInvoice = $monthlyInvoice;

    return $this;
  }

  /**
   * @return bool
   */
  public function getElectronicInvoice(): bool {
    return $this->electronicInvoice;
  }

  /**
   * @param bool $electronicInvoice
   *
   * @return \Interflora\CdpApi\Model\Business
   */
  public function setElectronicInvoice(bool $electronicInvoice): self {
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
   * @return \Interflora\CdpApi\Model\Business
   */
  public function setEanNumber(?string $eanNumber): self {
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
   * @return \Interflora\CdpApi\Model\Business
   */
  public function setCvrNumber(?string $cvrNumber): self {
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
   * @return \Interflora\CdpApi\Model\Business
   */
  public function setCompanyReference(?string $companyReference): self {
    $this->companyReference = $companyReference;

    return $this;
  }

  /**
   * @return \Interflora\CdpApi\Model\Address|null
   */
  public function getAddress(): ?\Interflora\CdpApi\Model\Address {
    return $this->address;
  }

  /**
   * @param \Interflora\CdpApi\Model\Address $address
   *
   * @return \Interflora\CdpApi\Model\Business
   */
  public function setAddress(?\Interflora\CdpApi\Model\Address $address): self {
    $this->address = $address;

    return $this;
  }


}
