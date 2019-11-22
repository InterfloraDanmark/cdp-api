<?php

namespace Interfloa\CdpApi\Model;

class Florist extends AbstractJsonSerializable
{

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
     * @param string $name
     *
     * @return $this
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param Address $address
     *
     * @return $this
     */
    public function setAddress(Address $address): self
    {
        $this->address = $address;

        return $this;
    }

    /**
     * @param string $phone
     *
     * @return $this
     */
    public function setPhone(?string $phone): self
    {
        $this->telephone = $phone;

        return $this;
    }

    /**
     * @param string $floristId
     *
     * @return $this
     */
    public function setFloristId(string $floristId): self
    {
        $this->floristId = $floristId;

        return $this;
    }


}
