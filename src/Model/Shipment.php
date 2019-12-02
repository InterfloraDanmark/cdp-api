<?php

namespace Interfloa\CdpApi\Model;

use DateTime;

class Shipment extends AbstractJsonSerializable
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $shipmentId;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var DateTime
     */
    protected $created;

    /**
     * @var DateTime
     */
    protected $updated;

    /**
     * @var float
     */
    protected $shipmentTotal;

    /**
     * @var float
     */
    protected $itemTotal;

    /**
     * @var float
     */
    protected $deliveryCost;

    /**
     * @var float
     */
    protected $extraCost;

    /**
     * @var float
     */
    protected $flowerTotal;

    /**
     * @var float
     */
    protected $netAmountTotal;

    /**
     * @var float
     */
    protected $floristCost;

    /**
     * @var bool
     */
    protected $leaveAtDoor;

    /**
     * @var bool
     */
    protected $leaveAtNeighbour;

    /**
     * @var Address
     */
    protected $deliveryAddress;

    /**
     * @var string
     */
    protected $cardText;

    /**
     * @var DateTime|null
     */
    protected $deliveryDate;

    /**
     * @var DateTime|null
     */
    protected $funeralTime;

    /**
     * @var string
     */
    protected $store;

    /**
     * @var int
     */
    protected $weeklyFrequency;

    /**
     * @var Item[]
     */
    protected $items;

    /**
     * @var Florist
     */
    protected $florist;

    /**
     * @var array
     */
    protected $extra;

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
    public function getShipmentId(): string {
        return $this->shipmentId;
    }

    /**
     * @param string $shipmentId
     *
     * @return self
     */
    public function setShipmentId(string $shipmentId): self {
        $this->shipmentId = $shipmentId;

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
     * @return \DateTime
     */
    public function getCreated(): \DateTime {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     *
     * @return self
     */
    public function setCreated(\DateTime $created): self {
        $this->created = $created;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated(): \DateTime {
        return $this->updated;
    }

    /**
     * @param \DateTime $updated
     *
     * @return self
     */
    public function setUpdated(\DateTime $updated): self {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @return float
     */
    public function getShipmentTotal(): float {
        return $this->shipmentTotal;
    }

    /**
     * @param float $shipmentTotal
     *
     * @return self
     */
    public function setShipmentTotal(float $shipmentTotal): self {
        $this->shipmentTotal = $shipmentTotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getItemTotal(): float {
        return $this->itemTotal;
    }

    /**
     * @param float $itemTotal
     *
     * @return self
     */
    public function setItemTotal(float $itemTotal): self {
        $this->itemTotal = $itemTotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getDeliveryCost(): float {
        return $this->deliveryCost;
    }

    /**
     * @param float $deliveryCost
     *
     * @return self
     */
    public function setDeliveryCost(float $deliveryCost): self {
        $this->deliveryCost = $deliveryCost;

        return $this;
    }

    /**
     * @return float
     */
    public function getExtraCost(): float {
        return $this->extraCost;
    }

    /**
     * @param float $extraCost
     *
     * @return self
     */
    public function setExtraCost(float $extraCost): self {
        $this->extraCost = $extraCost;

        return $this;
    }

    /**
     * @return float
     */
    public function getFlowerTotal(): float {
        return $this->flowerTotal;
    }

    /**
     * @param float $flowerTotal
     *
     * @return self
     */
    public function setFlowerTotal(float $flowerTotal): self {
        $this->flowerTotal = $flowerTotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getNetAmountTotal(): float {
        return $this->netAmountTotal;
    }

    /**
     * @param float $netAmountTotal
     *
     * @return self
     */
    public function setNetAmountTotal(float $netAmountTotal): self {
        $this->netAmountTotal = $netAmountTotal;

        return $this;
    }

    /**
     * @return float
     */
    public function getFloristCost(): float {
        return $this->floristCost;
    }

    /**
     * @param float $floristCost
     *
     * @return self
     */
    public function setFloristCost(float $floristCost): self {
        $this->floristCost = $floristCost;

        return $this;
    }

    /**
     * @return bool
     */
    public function isLeaveAtDoor(): bool {
        return $this->leaveAtDoor;
    }

    /**
     * @param bool $leaveAtDoor
     *
     * @return self
     */
    public function setLeaveAtDoor(bool $leaveAtDoor): self {
        $this->leaveAtDoor = $leaveAtDoor;

        return $this;
    }

    /**
     * @return bool
     */
    public function isLeaveAtNeighbour(): bool {
        return $this->leaveAtNeighbour;
    }

    /**
     * @param bool $leaveAtNeighbour
     *
     * @return self
     */
    public function setLeaveAtNeighbour(bool $leaveAtNeighbour): self {
        $this->leaveAtNeighbour = $leaveAtNeighbour;

        return $this;
    }

    /**
     * @return \Interfloa\CdpApi\Model\Address
     */
    public function getDeliveryAddress(): \Interfloa\CdpApi\Model\Address {
        return $this->deliveryAddress;
    }

    /**
     * @param \Interfloa\CdpApi\Model\Address $deliveryAddress
     *
     * @return self
     */
    public function setDeliveryAddress(\Interfloa\CdpApi\Model\Address $deliveryAddress): self {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @return string
     */
    public function getCardText(): string {
        return $this->cardText;
    }

    /**
     * @param string $cardText
     *
     * @return self
     */
    public function setCardText(string $cardText): self {
        $this->cardText = $cardText;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getDeliveryDate(): ?\DateTime {
        return $this->deliveryDate;
    }

    /**
     * @param \DateTime|null $deliveryDate
     *
     * @return self
     */
    public function setDeliveryDate(?\DateTime $deliveryDate): self {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @return \DateTime|null
     */
    public function getFuneralTime(): ?\DateTime {
       return $this->funeralTime;
    }

    /**
     * @param \DateTime|null $funeralTime
     *
     * @return self
     */
    public function setFuneralTime(?\DateTime $funeralTime): self {
        $this->funeralTime = $funeralTime;

        return $this;
    }

    /**
     * @return string
     */
    public function getStore(): string {
        return $this->store;
    }

    /**
     * @param string $store
     *
     * @return self
     */
    public function setStore(string $store): self {
        $this->store = $store;

        return $this;
    }

    /**
     * @return int
     */
    public function getWeeklyFrequency(): int {
        return $this->weeklyFrequency;
    }

    /**
     * @param int $weeklyFrequency
     *
     * @return self
     */
    public function setWeeklyFrequency(int $weeklyFrequency): self {
        $this->weeklyFrequency = $weeklyFrequency;

        return $this;
    }

    /**
     * @return \Interfloa\CdpApi\Model\Item[]
     */
    public function getItems(): array {
        return $this->items;
    }

    /**
     * @param \Interfloa\CdpApi\Model\Item[] $items
     *
     * @return self
     */
    public function setItems(array $items): self {
        $this->items = $items;

        return $this;
    }

    /**
     * @param Item $item
     *
     * @return $this
     */
    public function addItem(Item $item): self
    {
        $this->items[] = $item;

        return $this;
    }

    /**
     * @return \Interfloa\CdpApi\Model\Florist
     */
    public function getFlorist(): \Interfloa\CdpApi\Model\Florist {
        return $this->florist;
    }

    /**
     * @param \Interfloa\CdpApi\Model\Florist $florist
     *
     * @return self
     */
    public function setFlorist(\Interfloa\CdpApi\Model\Florist $florist): self {
        $this->florist = $florist;

        return $this;
    }

  /**
   * @return array
   */
  public function getExtra(): array {
    return $this->extra;
  }

  /**
   * @param array $extra
   *
   * @return self
   */
  public function setExtra(array $extra): self {
    $this->extra = $extra;

    return $this;
  }

}
