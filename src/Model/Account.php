<?php

namespace Interfloa\CdpApi\Model;

class Account extends AbstractJsonSerializable
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
    protected $type = 'private';
    /**
     * @var string
     */
    protected $telephone;
    /**
     * @var string
     */
    protected $gender = 'm';
    /**
     * @var Address
     */
    protected $address;

    /**
     * @param string|null $id
     *
     * @return $this
     */
    public function setId(?string $id): self
    {
        $this->id = $id;

        return $this;
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
     * @param string $lastName
     *
     * @return $this
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * @param string $email
     *
     * @return $this
     */
    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $pwd1
     *
     * @return $this
     */
    public function setPwd1(string $pwd1): self
    {
        $this->pwd1 = $pwd1;

        return $this;
    }

    /**
     * @param string $type
     *
     * @return $this
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @param string $telephone
     *
     * @return $this
     */
    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * @param string $gender
     *
     * @return $this
     */
    public function setGender(string $gender): self
    {
        $this->gender = $gender;

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

}
