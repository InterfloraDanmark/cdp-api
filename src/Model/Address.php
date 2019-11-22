<?php

namespace Interfloa\CdpApi\Model;

class Address extends AbstractJsonSerializable
{
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
     * @param string $countryCode
     *
     * @return $this
     */
    public function setCountryCode(string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

}
