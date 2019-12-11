<?php

namespace Interflora\CdpApi\Service;

use Interflora\CdpApi\Model\Account;
use Interflora\CdpApi\Model\Business;
use Interflora\CdpApi\Model\Order;
use Interflora\CdpApi\Traits\Loggable;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use JsonSerializable;
use Symfony\Component\Cache\Adapter\AdapterInterface;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

/**
 * Class CdpClient
 */
class CdpClient
{
    use Loggable;

    public const API_ROOT = '/api/v1';

    /**
     * @var Client
     */
    protected $client;
    /**
     * @var string
     */
    protected $apiKey;

    /**
     * The serializer.
     *
     * @var \Symfony\Component\Serializer\Serializer
     */
    protected $serializer;

    /**
     * @var AdapterInterface
     */
    protected $cache;

    /**
     * CdpClient constructor.
     *
     * @param string                $url
     * @param string                $apiKey
     * @param AdapterInterface|null $adapter
     */
    public function __construct(string $url, string $apiKey, AdapterInterface $adapter = null)
    {
        $this->client = new Client([
            'base_uri' => $url,
        ]);
        $this->apiKey = $apiKey;
        if($adapter === null){
            $adapter = new FilesystemAdapter();
        }
        $this->cache  = $adapter;
    }

    /**
     * @param \Interflora\CdpApi\Model\Order $order
     *
     * @return mixed|null
     */
    public function getOrder(Order $order)
    {
        try {
            $path = sprintf('%s/order/%s', self::API_ROOT, $order->getId());
            $result = $this->get($path);
            return json_decode($result->getBody(), true);

        } catch (RequestException $exception) {
            // Order could not be retrieved, usually because of 404 - not found
            return null;
        }
    }

    /**
     * @param \Interflora\CdpApi\Model\Account $account
     *
     * @return mixed|null
     */
    public function getAccount(Account $account)
    {
        try {
            $path = sprintf('%s/account/%s', self::API_ROOT, $account->getId());
            $result = $this->get($path);
            $content = json_decode($result->getBody(), true);
            return $content;

        } catch (RequestException $exception) {
            // Order could not be retrieved, usually because of 404 - not found
            return null;
        }
    }

    /**
     * @param \Interflora\CdpApi\Model\Business $business
     *
     * @return mixed|null
     */
    public function getBusiness(Business $business)
    {
        try {
            $path = sprintf('%s/business/%s', self::API_ROOT, $business->getId());
            $result = $this->get($path);
            return json_decode($result->getBody(), true);

        } catch (RequestException $exception) {
            // Order could not be retrieved, usually because of 404 - not found
            return null;
        }
    }

    /**
     * @param \Interflora\CdpApi\Model\Order $order
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createOrder(Order $order)
    {
        $path = sprintf('%s/order', self::API_ROOT);
        $result = $this->post($path, $order);
        return json_decode($result->getBody(), true);
    }

    /**
     * @param \Interflora\CdpApi\Model\Order $order
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createOrderByAccount(Order $order)
    {
        if ($order->hasAccountId()) {
            $account = $this->getAccount($order);
        }

        if (!isset($account['data']['id']) && $order->getAccount() !== null) {
            $account = $this->getAccountByEmail($order->getAccount()->getEmail());
            if (isset($account['data']['id'])) {
                $order->setAccountId($account['data']['id']);
            } else {
                $account = $this->createAccount($order->getAccount());
                if (isset($account['data']['id'])) {
                    $order->setAccountId($account['data']['id']);
                }
            }
        }

        $order->setAccount(null);

        return $this->post('/api/v1/order', $order);
    }

    public function updateOrder(Order $order)
    {
        $order->setAccount(null);
        $path = sprintf('%s/order/%s', self::API_ROOT, $order->getId());
        return $this->patch($path, $order);
    }

    /**
     * @param string $email
     *
     * @return mixed|null
     */
    public function getAccountByEmail(string $email)
    {
        try {
            $path = sprintf('%s/account/email/%s', self::API_ROOT, $email);
            return json_decode($this->get($path)->getBody(), true);
        } catch (RequestException $exception) {
            // Account could not be retrieved, usually because of 404 - not found
            return null;
        }
    }

    /**
     * @param string $uuid
     *
     * @return mixed|null
     */
    public function getAccountById(string $uuid)
    {
        try {
            $path = sprintf('%s/account/%s', self::API_ROOT, $uuid);
            return json_decode($this->get($path)->getBody(), true);
        } catch (RequestException $exception) {
            // Account could not be retrieved, usually because of 404 - not found
            return null;
        }
    }

    /**
     * @param \Interflora\CdpApi\Model\Account $account
     *
     * @return mixed
     */
    public function createAccount(Account $account)
    {
        $path = sprintf('%s/account', self::API_ROOT);
        $result = $this->post($path, $account);
        return json_decode($result->getBody(), true);
    }

    /**
     * @param \Interflora\CdpApi\Model\Account $account
     *
     * @return mixed
     */
    public function updateAccount(Account $account)
    {
        $path = sprintf('%s/account/%s', self::API_ROOT, $account->getId());
        $result = $this->patch($path, $account);
        return json_decode($result->getBody(), true);
    }

    /**
     * @param $uuid
     *
     * @return mixed
     */
    public function deleteAccount($uuid)
    {
        $path = sprintf('%s/account/%s', self::API_ROOT, $uuid);
        $result = $this->delete($path);
        return json_decode($result->getBody(), true);
    }

    /**
     * @param \Interflora\CdpApi\Model\Business $business
     *
     * @return mixed
     */
    public function createBusiness(Business $business)
    {
        $path = sprintf('%s/business', self::API_ROOT);
        $result = $this->post($path, $business);
        return json_decode($result->getBody(), true);
    }

    /**
     * @param \Interflora\CdpApi\Model\Business $business
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function updateBusiness(Business $business)
    {
      $path = sprintf('%s/business/%s', self::API_ROOT, $business->getId());
      $result = $this->patch($path, $business);
      return json_decode($result->getBody(), true);
    }

  /**
   * @param $uuid
   *
   * @return mixed
   */
    public function deleteBusiness($uuid)
    {
        $path = sprintf('%s/business/%s', self::API_ROOT, $uuid);
        $result = $this->delete($path);
        return json_decode($result->getBody(), true);
    }

    /**
     * @param string $type
     *
     * @return string|null
     * @throws \Psr\Cache\InvalidArgumentException
     */
    public function getMarketingChannelByType(string $type): ?string
    {
        $key       = 'marketingChannel_' . $type;
        $cacheItem = $this->cache->getItem($key);

        if ($cacheItem->isHit()) {
            return $cacheItem->get();
        }

        $channels  = json_decode($this->get('api/v1/marketingChannels')->getBody(), true);
        $channelId = null;

        if (isset($channels['data'])) {
            foreach ($channels['data'] as $channel) {
                if ($channel['type'] === $type) {
                    $channelId = $channel['id'];
                    break;
                }
            }
        }

        if ($channelId !== null) {
            // @TODO once we are live, increase to P1D
            $cacheItem->expiresAfter(new \DateInterval('PT10M'));
            $cacheItem->set($channelId);
            $this->cache->save($cacheItem);
        }

        return $channelId;
    }

    /**
     * @param $uri
     * @param $data
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function put($uri, $data)
    {
        $options = $this->getOptions($data);
        $this->getLogger()->notice('PUT request to uri: ' . $uri);
        $this->getLogger()->notice(json_encode($options));

        return $this->client->put($uri, $options);
    }

    /**
     * @param $uri
     * @param $data
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function patch($uri, $data)
    {
        $options = $this->getOptions($data);
        $this->getLogger()->notice('PUT request to uri: ' . $uri);
        $this->getLogger()->notice(json_encode($options));

        return $this->client->patch($uri, $options);
    }

    /**
     * @param $uri
     * @param $data
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function post($uri, $data)
    {
        $options = $this->getOptions($data);
        $this->getLogger()->notice('POST request to uri: ' . $uri);
        $this->getLogger()->notice(json_encode($options));

        return $this->client->post($uri, $options);
    }

    /**
     * @param $uri
     * @param null $data
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function get($uri, $data = null)
    {
        $options = $this->getOptions($data);
        $this->getLogger()->notice('GET request to uri: ' . $uri);
        $this->getLogger()->notice(json_encode($options));

        return $this->client->get($uri, $options);
    }

    /**
     * @param $uri
     * @param null $data
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    protected function delete($uri)
    {
        $options = $this->getOptions(null);
        $this->getLogger()->notice('DELETE request to uri: ' . $uri);
        $this->getLogger()->notice(json_encode($options));

        return $this->client->delete($uri, $options);
    }

    /**
     * @param JsonSerializable|null $data
     *
     * @return array
     */
    protected function getOptions(?JsonSerializable $data): array
    {
        $options = [
            'headers' => [
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json; charset=UTF-8',
                'Authorization' => sprintf('Api-Key %s', $this->apiKey),
            ],

        ];
        if ($data !== null) {
            $options['json'] = $data;
        }

        return $options;
    }
}
