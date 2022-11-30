<?php

namespace Interflora\CdpApi\Model;

class Voucher extends AbstractJsonSerializable {

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var float 
     */
    protected float $discount;

    /**
     * @var 
     */
    protected string $code;

    
    public function __construct(string $name, float $discount, string $code)
    {
        $this->name = $name;
        $this->discount = $discount;
        $this->code = $code;
    }
    
    /**
     * @return string|null
     */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * @param string|null $id
     *
     * @return self
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
     * @return Voucher
     */
    public function setName(string $name): Voucher {
      $this->name = $name;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount(): float {
      return $this->discount;
    }

    /**
     * @param float $discount
     *
     * @return Voucher
     */
    public function setDiscount(float $discount): Voucher {
      $this->discount = $discount;
      return $this;
    }

    /**
     * @return mixed
     */
    public function getCode() {
      return $this->code;
    }

    /**
     * @param mixed $code
     *
     * @return Voucher
     */
    public function setCode($code) {
      $this->code = $code;
      return $this;
    }

}
