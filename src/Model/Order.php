<?php

namespace Interflora\CdpApi\Model;

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
        'mobile'        => 'web',
        'ifos'          => 'ifos',
    ];

    /**
     * @TODO check mappings
     */
    public const MARKETPLACE_MAP = [
        'interflora.dk' => 'Interflora',
        'mobile'        => 'Interflora',
        'ifos'          => 'Interflora',
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
     * @var Account|null
     */
    protected $account;

    /**
     * @var string|null
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
     * @var DateTime
     */
    protected $created;

    /**
     * @var DateTime
     */
    protected $updated;

    /**
     * @var DateTime
     */
    protected $placed;

    /**
     * @var string
     */
    protected $orderStatus;

    /**
     * @var string|integer|null
     */
    protected $orderTotal;

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
     * @var Address|null
     */
    protected $billingAddress;

    /**
     * @var Shipment[]
     */
    protected $shipments = [];
    /**
     * @var Permission[]
     */
    protected $permissions = [];

    /**
     * @var Payment[]
     */
    protected $payments = [];

    /**
     * @var string
     */
    protected $ip;

    /**
     * @var string
     */
    protected $store;

    /**
     * @var integer
     */
    protected $version;

    /**
     * @var Extra
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
            $this->setName($matches[1]);
        }

        return $this;
    }

  /**
   * @return string|null
   */
  public function getName():? string {
    return $this->name;
  }

  /**
   * @param string|null $name
   *
   * @return $this
   */
  public function setName(?string $name): self {
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
   * @return $this
   */
  public function setType(string $type): self {
    $this->type = $type;

    return $this;
  }

  /**
   * @return \Interflora\CdpApi\Model\Notification[]
   */
  public function getNotifications(): array {
    return $this->notifications;
  }

  /**
   * @param \Interflora\CdpApi\Model\Notification[] $notifications
   *
   * @return $this
   */
  public function setNotifications(array $notifications): self {
    $this->notifications = $notifications;

    return $this;
  }

  /**
   * @return \Interflora\CdpApi\Model\Payment[]
   */
  public function getPayments(): array {
    return $this->payments;
  }

  /**
   * @param \Interflora\CdpApi\Model\Payment[] $payments
   *
   * @return $this
   */
  public function setPayments(array $payments): self {
    $this->payments = $payments;

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

    /**
     * @return string
     */
    public function getAccountId(): string
    {
        return $this->accountId;
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
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
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
     * @return string
     */
    public function getOrdertotal(): string
    {
        return $this->orderStatus;
    }

    /**
     * @param string|null $orderTotal
     *
     * @return $this
     */
    public function setOrderTotal(?string $orderTotal): self
    {
        $this->orderTotal = $orderTotal;

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
     * @param Permission $permission
     *
     * @return $this
     */
    public function addPermission(Permission $permission): self
    {
        $this->permissions[] = $permission;

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
     * @return string $extra
     */
    public function getExtra(): string
    {
        return $this->extra;
    }

    /**
     * @param Extra $extra
     *
     * @return $this
     */
    public function setExtra(Extra $extra): self
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
            $this->marketplace[$source] = new MarketPlace(self::MARKETPLACE_MAP[$source]);
        }

        return $this;
    }

    public function setStoreBySource(string $source)
    {
        if (empty($this->store) && array_key_exists($source, self::STORE_MAP)) {
            $this->store = self::STORE_MAP[$source];
        }

        return $this;
    }

  /**
   * @param string $marketplace
   *
   * @return $this
   */
  public function addMarketplace(string $marketplace): self
  {
    $this->marketplace[] = $marketplace;

    return $this;
  }

  /**
   * @param array $marketplace
   *
   * @return $this
   */
    public function setMarketplace(array $marketplace): self
    {
      $this->marketplace = $marketplace;

      return $this;
    }

    /**
     * @return int
     */
    public function getVersion(): int {
        return $this->version;
    }

    /**
     * @param int $version
     *
     * @return $this
     */
    public function setVersion(int $version): self {
        $this->version = $version;

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
     * @return Account|null
     */
    public function getAccount():? Account
    {
        return $this->account;
    }

    /**
     * @param string $source
     *
     * @return Permission|null
     */
    public function getPermissionBySource(string $source): ?Permission
    {
        foreach ($this->permissions as $permission) {
            if ($permission->getSource() === $source) {
                return $permission;
            }
        }

        return null;
    }

    /**
     * @param $transaction
     * @param $state
     *
     * @return Payment|null
     */
    public function getPaymentByTransactionAndState($transaction, $state): ?Payment
    {
        foreach ($this->payments as $payment) {
            if ($payment->getTransaction() === $transaction && $payment->getState() === $state) {
                return $payment;
            }
        }

        return null;
    }

    /**
     * @param $transaction
     *
     * @return Payment|null
     */
    public function getPaymentByTransaction($transaction): ?Payment
    {
        foreach ($this->payments as $payment) {
            if ($payment->getTransaction() === $transaction) {
                return $payment;
            }
        }

        return null;
    }


    /**
     * @param $shipmentId
     *
     * @return Shipment|null
     */
    public function getShipmentById($shipmentId): ?Shipment
    {
        foreach ($this->shipments as $shipment) {
            if ($shipment->getShipmentId() === $shipmentId) {
                return $shipment;
            }
        }

        return null;
    }

    /**
     * @return Address|null
     */
    public function getBillingAddress():? Address
    {
        return $this->billingAddress;
    }

    /**
     * @param $type
     *
     * @return Notification|null
     */
    public function getNotificationByType($type): ?Notification
    {
        foreach ($this->notifications as $notification) {
            if ($notification->getType() === $type) {
                return $notification;
            }
        }

        return null;
    }
}
