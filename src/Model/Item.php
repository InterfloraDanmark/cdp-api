<?php

namespace Interflora\CdpApi\Model;

class Item extends AbstractJsonSerializable
{

    /**
     * @var string
     */
    protected $id;

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
     * @var float
     */
    protected $profit;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var float
     */
    protected $total;

    /**
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
     * @var string
     */
    protected $cardFrontText = '';

    /**
     * @var string
     */
    protected $cardBackText = '';

    /**
     * @var string
     */
    protected $cardTextFont = '';

    /**
     * @var string
     */
    protected $cardTextColour = '';

  /**
   * @var string
   */
  protected $cardImageUrl = '';

  /**
   * @var string
   */
  protected $cardPdfUrl = '';

  /**
   * @return string
   */
  public function getId(): string {
    return $this->id;
  }

  /**
   * @param string $id
   *
   * @return self
   */
  public function setId(string $id): self {
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
   * @return string
   */
  public function getSku(): string {
    return $this->sku;
  }

  /**
   * @param string $sku
   *
   * @return self
   */
  public function setSku(string $sku): self {
    $this->sku = $sku;

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
   * @return self
   */
  public function setType(string $type): self {
    $this->type = $type;

    return $this;
  }

  /**
   * @return float
   */
  public function getPrice(): float {
    return $this->price;
  }

  /**
   * @param float $price
   *
   * @return self
   */
  public function setPrice(float $price): self {
    $this->price = $price;

    return $this;
  }

  /**
   * @return float
   */
  public function getProfit(): float {
    return $this->profit;
  }

  /**
   * @param float $profit
   *
   * @return self
   */
  public function setProfit(float $profit): self {
    $this->profit = $profit;

    return $this;
  }

  /**
   * @return int
   */
  public function getQuantity(): int {
    return $this->quantity;
  }

  /**
   * @param int $quantity
   *
   * @return self
   */
  public function setQuantity(int $quantity): self {
    $this->quantity = $quantity;

    return $this;
  }

  /**
   * @return float
   */
  public function getTotal(): float {
    return $this->total;
  }

  /**
   * @param float $total
   *
   * @return self
   */
  public function setTotal(float $total): self {
    $this->total = $total;

    return $this;
  }

  /**
   * @return string
   */
  public function getUrl(): string {
    return $this->url;
  }

  /**
   * @param string $url
   *
   * @return self
   */
  public function setUrl(string $url): self {
    $this->url = $url;

    return $this;
  }

  /**
   * @return string
   */
  public function getImageUrl(): string {
    return $this->imageUrl;
  }

  /**
   * @param string $imageUrl
   *
   * @return self
   */
  public function setImageUrl(string $imageUrl): self {
    $this->imageUrl = $imageUrl;

    return $this;
  }

  /**
   * @return array|\Interflora\CdpApi\Model\Data[]
   */
  public function getCategory() {
    return $this->category;
  }

  /**
   * @param array|\Interflora\CdpApi\Model\Data[] $category
   *
   * @return self
   */
  public function setCategory($category): self {
    $this->category = $category;

    return $this;
  }

  /**
   * @return array|\Interflora\CdpApi\Model\Data[]
   */
  public function getOccation() {
    return $this->occation;
  }

  /**
   * @param array|\Interflora\CdpApi\Model\Data[] $occation
   *
   * @return self
   */
  public function setOccation($occation): self {
    $this->occation = $occation;

    return $this;
  }

  /**
   * @return array|\Interflora\CdpApi\Model\Data[]
   */
  public function getReceiver() {
    return $this->receiver;
  }

  /**
   * @param array|\Interflora\CdpApi\Model\Data[] $receiver
   *
   * @return self
   */
  public function setReceiver($receiver): self {
    $this->receiver = $receiver;

    return $this;
  }

  /**
   * @return array|\Interflora\CdpApi\Model\Data[]
   */
  public function getColour() {
    return $this->colour;
  }

  /**
   * @param array|\Interflora\CdpApi\Model\Data[] $colour
   *
   * @return self
   */
  public function setColour($colour): self {
    $this->colour = $colour;

    return $this;
  }

  /**
   * @return string|null
   */
  public function getMarketplace(): ?string {
    return $this->marketplace;
  }

  /**
   * @param string $marketplace
   *
   * @return self
   */
  public function setMarketplace(string $marketplace): self {
    $this->marketplace = $marketplace;

    return $this;
  }

  /**
   * @return string
   */
  public function getSize(): string {
    return $this->size;
  }

  /**
   * @param string $size
   *
   * @return self
   */
  public function setSize(string $size): self {
    $this->size = $size;

    return $this;
  }

  /**
   * @return bool
   */
  public function isFlowerProduct(): bool {
    return $this->flowerProduct;
  }

  /**
   * @param bool $flowerProduct
   *
   * @return self
   */
  public function setFlowerProduct(bool $flowerProduct): self {
    $this->flowerProduct = $flowerProduct;

    return $this;
  }

  /**
   * @return array|string[]
   */
  public function getRibbonTexts() {
    return $this->ribbonTexts;
  }

  /**
   * @param array|string[] $ribbonTexts
   *
   * @return self
   */
  public function setRibbonTexts($ribbonTexts): self {
    $this->ribbonTexts = $ribbonTexts;

    return $this;
  }

  /**
   * @return string
   */
  public function getCardFrontText(): string {
    return $this->cardFrontText;
  }

  /**
   * @param string $cardFrontText
   *
   * @return self
   */
  public function setCardFrontText(string $cardFrontText): self {
    $this->cardFrontText = $cardFrontText;

    return $this;
  }

  /**
   * @return string
   */
  public function getCardBackText(): string {
    return $this->cardBackText;
  }

  /**
   * @param string $cardBackText
   *
   * @return self
   */
  public function setCardBackText(string $cardBackText): self {
    $this->cardBackText = $cardBackText;

    return $this;
  }

  /**
   * @return string
   */
  public function getCardTextFont(): string {
    return $this->cardTextFont;
  }

  /**
   * @param string $cardTextFont
   *
   * @return self
   */
  public function setCardTextFont(string $cardTextFont): self {
    $this->cardTextFont = $cardTextFont;

    return $this;
  }

  /**
   * @return string
   */
  public function getCardTextColour(): string {
    return $this->cardTextColour;
  }

  /**
   * @param string $cardTextColour
   *
   * @return self
   */
  public function setCardTextColour(string $cardTextColour): self {
    $this->cardTextColour = $cardTextColour;

    return $this;
  }

  /**
   * @return string
   */
  public function getCardImageUrl(): string {
    return $this->cardImageUrl;
  }

  /**
   * @param string $cardImageUrl
   *
   * @return self
   */
  public function setCardImageUrl(string $cardImageUrl): self {
    $this->cardImageUrl = $cardImageUrl;

    return $this;
  }

  /**
   * @return string
   */
  public function getCardPdfUrl(): string {
    return $this->cardPdfUrl;
  }

  /**
   * @param string $cardPdfUrl
   *
   * @return self
   */
  public function setCardPdfUrl(string $cardPdfUrl): self {
    $this->cardPdfUrl = $cardPdfUrl;

    return $this;
  }


}
