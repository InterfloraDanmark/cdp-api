<?php

namespace Interfloa\CdpApi\Model;

class Item extends AbstractJsonSerializable
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string
     */
    protected $sku;
    /**
     * @var string
     */
    protected $type;
    /**
     * @var float
     */
    protected $price;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var float
     */
    protected $total;

    /**
     * @TODO we don't have this in IFOS
     *
     * @var string
     */
    protected $url;
    /**
     * @var string
     */
    protected $imageUrl;

    /**
     * @var Data[]|array
     */
    protected $category = [];

    /**
     * @var Data[]|array
     */
    protected $occation = [];
    /**
     * @var Data[]|array
     */
    protected $receiver = [];
    /**
     * @var Data[]|array
     */
    protected $colour = [];
    /**
     * @var string
     */
    protected $marketplace;
    /**
     * @var string
     */
    protected $size;
    /**
     * @var bool
     */
    protected $flowerProduct;
    /**
     * @var string[]|array
     */
    protected $ribbonTexts = [];

    /**
     * @param string $name
     *
     * @return $this
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @param string $sku
     *
     * @return $this
     */
    public function setSku(string $sku): self
    {
        $this->sku = $sku;

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
     * @param float $price
     *
     * @return $this
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }

    /**
     * @param int $quantity
     *
     * @return $this
     */
    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @param float $total
     *
     * @return $this
     */
    public function setTotal(float $total): self
    {
        $this->total = $total;

        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @param string $imageUrl
     *
     * @return $this
     */
    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;

        return $this;
    }

    /**
     * @param string $marketplace
     *
     * @return $this
     */
    public function addMarketplace(string $marketplace): self
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * @param string $size
     *
     * @return $this
     */
    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @param bool $flowerProduct
     *
     * @return $this
     */
    public function setFlowerProduct(bool $flowerProduct): self
    {
        $this->flowerProduct = $flowerProduct;

        return $this;
    }

    /**
     * @param array|string[] $ribbonTexts
     *
     * @return $this
     */
    public function setRibbonTexts(array $ribbonTexts)
    {
        $this->ribbonTexts = $ribbonTexts;

        return $this;
    }

    /**
     * @param Data[]|array $category
     *
     * @return $this
     */
    public function setCategory(array $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * @param Data[]|array $occation
     *
     * @return $this
     */
    public function setOccation(array $occation)
    {
        $this->occation = $occation;

        return $this;
    }

    /**
     * @param Data[]|array $receiver
     *
     * @return $this
     */
    public function setReceiver(array $receiver)
    {
        $this->receiver = $receiver;

        return $this;
    }

    /**
     * @param Data[]|array $colour
     *
     * @return $this
     */
    public function setColour(array $colour)
    {
        $this->colour = $colour;

        return $this;
    }
}
