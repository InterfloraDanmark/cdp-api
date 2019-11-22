<?php

namespace Interfloa\CdpApi\Model;

use DateTime;

class Shipment extends AbstractJsonSerializable
{
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
     * @TODO IFOS doesn't have this information
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
     * @TODO Not clear what to set
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
     * @param string $shipmentId
     *
     * @return $this
     */
    public function setShipmentId(string $shipmentId): self
    {
        $this->shipmentId = $shipmentId;

        return $this;
    }

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
     * @param DateTime $updated
     *
     * @return $this
     */
    public function setUpdated(DateTime $updated): self
    {
        $this->updated = $updated;

        return $this;
    }

    /**
     * @param float $shipmentTotal
     *
     * @return $this
     */
    public function setShipmentTotal(float $shipmentTotal): self
    {
        $this->shipmentTotal = $shipmentTotal;

        return $this;
    }

    /**
     * @param float $itemTotal
     *
     * @return $this
     */
    public function setItemTotal(float $itemTotal): self
    {
        $this->itemTotal = $itemTotal;

        return $this;
    }

    /**
     * @param float $deliveryCost
     *
     * @return $this
     */
    public function setDeliveryCost(float $deliveryCost): self
    {
        $this->deliveryCost = $deliveryCost;

        return $this;
    }

    /**
     * @param float $extraCost
     *
     * @return $this
     */
    public function setExtraCost(float $extraCost): self
    {
        $this->extraCost = $extraCost;

        return $this;
    }

    /**
     * @param float $flowerTotal
     *
     * @return $this
     */
    public function setFlowerTotal(float $flowerTotal): self
    {
        $this->flowerTotal = $flowerTotal;

        return $this;
    }

    /**
     * @param float $netAmountTotal
     *
     * @return $this
     */
    public function setNetAmountTotal(float $netAmountTotal): self
    {
        $this->netAmountTotal = $netAmountTotal;

        return $this;
    }

    /**
     * @param float $floristCost
     *
     * @return $this
     */
    public function setFloristCost(float $floristCost): self
    {
        $this->floristCost = $floristCost;

        return $this;
    }

    /**
     * @param bool $leaveAtDoor
     *
     * @return $this
     */
    public function setLeaveAtDoor(bool $leaveAtDoor): self
    {
        $this->leaveAtDoor = $leaveAtDoor;

        return $this;
    }

    /**
     * @param bool $leaveAtNeighbour
     *
     * @return $this
     */
    public function setLeaveAtNeighbour(bool $leaveAtNeighbour): self
    {
        $this->leaveAtNeighbour = $leaveAtNeighbour;

        return $this;
    }

    /**
     * @param Address $deliveryAddress
     *
     * @return $this
     */
    public function setDeliveryAddress(Address $deliveryAddress): self
    {
        $this->deliveryAddress = $deliveryAddress;

        return $this;
    }

    /**
     * @param string $cardText
     *
     * @return $this
     */
    public function setCardText(string $cardText): self
    {
        $this->cardText = $cardText;

        return $this;
    }

    /**
     * @param DateTime|null $deliveryDate
     *
     * @return $this
     */
    public function setDeliveryDate(?DateTime $deliveryDate): self
    {
        $this->deliveryDate = $deliveryDate;

        return $this;
    }

    /**
     * @param DateTime|null $funeralTime
     *
     * @return $this
     */
    public function setFuneralTime(?DateTime $funeralTime): self
    {
        $this->funeralTime = $funeralTime;

        return $this;
    }

    /**
     * @param string $store
     *
     * @return $this
     */
    public function setStore(string $store): self
    {
        $this->store = $store;

        return $this;
    }

    /**
     * @param int $weeklyFrequency
     *
     * @return $this
     */
    public function setWeeklyFrequency(int $weeklyFrequency): self
    {
        $this->weeklyFrequency = $weeklyFrequency;

        return $this;
    }

    /**
     * @param Item[] $items
     *
     * @return $this
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }

    /**
     * @param Florist $florist
     *
     * @return $this
     */
    public function setFlorist(Florist $florist): self
    {
        $this->florist = $florist;

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

}
