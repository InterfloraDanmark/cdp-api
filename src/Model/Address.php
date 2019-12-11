<?php

namespace Interflora\CdpApi\Model;

class Address extends AbstractJsonSerializable
{
    /**
     * @var string|null
     */
    protected $id;
    /**
     * @var string
     */
    protected $firstName;
    /**
     * @var string
     */
    protected $familyName;
    /**
     * @var string
     */
    protected $addressLine1;
    /**
     * @var string
     */
    protected $postalCode;
    /**
     * @var string
     */
    protected $locality;
    /**
     * @var string
     */
    protected $countryCode;

    /**
     * @var string
     */
    protected $organization;

    /**
     * @var string
     */
    protected $specialRequest;

    /**
     * @return string|null
     */
    public function getId():? string {
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
    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * @return string
     */
    public function getFamilyName(): string {
        return $this->familyName;
    }

    /**
     * @param string $familyName
     *
     * @return $this
     */
    public function setFamilyName(string $familyName): self
    {
        $this->familyName = $familyName;

        return $this;
    }

    /**
     * @return string
     */
    public function getAddressLine1(): string {
        return $this->addressLine1;
    }

    /**
     * @param string $addressLine1
     *
     * @return $this
     */
    public function setAddressLine1(string $addressLine1): self
    {
        $this->addressLine1 = $addressLine1;

        return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode(): string {
        return $this->postalCode;
    }

    /**
     * @param string $postalCode
     *
     * @return $this
     */
    public function setPostalCode(string $postalCode): self
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocality(): string {
        return $this->locality;
    }

    /**
     * @param string $locality
     *
     * @return $this
     */
    public function setLocality(string $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * @return string
     */
    public function getCountryCode(): string {
        return $this->countryCode;
    }

    /**
     * @param string $countryCode
     *
     * @return $this
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @param string $organization
     *
     * @return $this
     */
    public function setOrganization(string $organization): self
    {
        $this->organization = $organization;

        return $this;
    }

    /**
     * @param string $specialRequest
     *
     * @return $this
     */
    public function setSpecialRequest(string $specialRequest): self
    {
        $this->specialRequest = $specialRequest;

        return $this;
    }

}
