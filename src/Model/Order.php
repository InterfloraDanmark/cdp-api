<?php

namespace Interfloa\CdpApi\Model;

use DateTime;

/**
 * Class Order
 */
class Order extends AbstractJsonSerializable
{

    /**
     * @TODO check mappings
     */
    private const TYPE_MAP = [
        'interflora.dk' => 'web',
        'mobile'        => 'mobile',
        'ifos'          => 'ifos',
    ];

    /**
     * @TODO check mappings
     */
    public const MARKETPLACE_MAP = [
        'interflora.dk' => 'Interflora',
        'mobile'        => 'mobile',
        'ifos'          => 'ifos',
    ];

    /**
     * @TODO check mappings
     */
    private const STORE_MAP = [
        'interflora.dk' => 'online',
        'mobile'        => 'mobile',
        'ifos'          => 'ifos',
    ];

    /**
     * @var string|null
     */
    protected $id;

    /**
     * @var string
     */
    protected $orderId;

    /**
     * @var string
     */
    protected $accountId;

    /**
     * @var Account
     */
    protected $account;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $email;

    /**
     * @TODO consider removing this, as we don't have that information in IFOS
     * @var DateTime
     */
//    protected $created;

    /**
     * @TODO consider removing this, as we don't have that information in IFOS
     * @var DateTime
     */
//    protected $updated;

    /**
     * @var DateTime
     */
    protected $placed;

    /**
     * @var string
     */
    protected $orderStatus;

    /**
     * @var string
     */
    protected $telephone;

    /**
     * @var MarketPlace[]
     */
    protected $marketplace = [];

    /**
     * @var Notification[]
     */
    protected $notifications = [];

    /**
     * @var Address
     */
    protected $billingAddress;

    /**
     * @var Shipment[]
     */
    protected $shipments;
    /**
     * @var Permission[]
     */
    protected $permissions;

    /**
     * @var Payment[]
     */
    protected $payments;

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var string
     */
    protected $store;

    /**
     * @TODO not clear what has to go here, gciCertificate is not stored in IFOS
     * @var Extra[]
     */
    protected $extra;

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
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }

    /**
     * @return bool
     */
    public function hasId(): bool
    {
        return $this->id !== null;
    }

    /**
     * @param string $orderId
     *
     * @return $this
     */
    public function setOrderId(string $orderId): self
    {
        $this->orderId = $orderId;

        preg_match('/^.+?-(\d+)/', $orderId, $matches);

        if (isset($matches[1])) {
            $this->name = $matches[1];

        }

        return $this;
    }

    /**
     * @param string|null $accountId
     *
     * @return $this
     */
    public function setAccountId(?string $accountId): self
    {
        $this->accountId = $accountId;

        return $this;
    }

    public function hasAccountId(): bool
    {
        return $this->accountId !== null;
    }

    /**
     * @param Account|null $account
     *
     * @return $this
     */
    public function setAccount(?Account $account): self
    {
        $this->account = $account;

        return $this;
    }

    /**
     * @param string $source
     *
     * @return $this
     */
    public function setTypeBySource(string $source): self
    {
        if (array_key_exists($source, self::TYPE_MAP)) {
            $this->type = self::TYPE_MAP[$source];
        }

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
     * @param DateTime $created
     *
     * @return $this
     */
    public function setCreated(DateTime $created): self
    {
        $this->created = $created;

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
     * @param DateTime $placed
     *
     * @return $this
     */
    public function setPlaced(DateTime $placed): self
    {
        $this->placed = $placed;

        return $this;
    }

    /**
     * @param string $orderStatus
     *
     * @return $this
     */
    public function setOrderStatus(string $orderStatus): self
    {
        $this->orderStatus = $orderStatus;

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
     * @param Notification $notifications
     *
     * @return $this
     */
    public function addNotification(Notification $notifications): self
    {
        $this->notifications[] = $notifications;

        return $this;
    }

    /**
     * @param Address $billingAddress
     *
     * @return $this
     */
    public function setBillingAddress(Address $billingAddress): self
    {
        $this->billingAddress = $billingAddress;

        return $this;
    }

    /**
     * @param Shipment[] $shipments
     *
     * @return $this
     */
    public function setShipments(array $shipments): self
    {
        $this->shipments = $shipments;

        return $this;
    }

    /**
     * @param Permission[] $permissions
     *
     * @return $this
     */
    public function setPermissions(array $permissions): self
    {
        $this->permissions = $permissions;

        return $this;
    }

    /**
     * @param Payment $payment
     *
     * @return $this
     */
    public function addPayment(Payment $payment): self
    {
        $this->payments[] = $payment;

        return $this;
    }

    /**
     * @param string $ip
     *
     * @return $this
     */
    public function setIp(string $ip): self
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @param Extra[] $extra
     *
     * @return $this
     */
    public function setExtra(array $extra): self
    {
        $this->extra = $extra;

        return $this;
    }

    /**
     * @param string $source
     *
     * @return $this
     */
    public function addMarketplaceBySource(string $source)
    {
        if (array_key_exists($source, self::MARKETPLACE_MAP)) {
            $this->marketplace[] = new MarketPlace(self::MARKETPLACE_MAP[$source]);
        }

        return $this;
    }

    public function setStoreBySource(string $source)
    {
        if (array_key_exists($source, self::STORE_MAP)) {
            $this->store = self::STORE_MAP[$source];
        }

        return $this;
    }

    /**
     * @return MarketPlace[]
     */
    public function getMarketplace(): array
    {
        return $this->marketplace;
    }

    /**
     * @return string
     */
    public function getStore(): string
    {
        return $this->store;
    }

    /**
     * @return Account
     */
    public function getAccount(): Account
    {
        return $this->account;
    }

}
