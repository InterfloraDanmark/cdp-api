<?php

namespace Interfloa\CdpApi\Service;

use Interfloa\CdpApi\Model\Account;
use Interfloa\CdpApi\Model\Order;
use Interfloa\CdpApi\Traits\Loggable;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use JsonSerializable;

/**
 * Class DmpClient
 */
class DmpClient
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
    private $apiKey;

    public function __construct(string $url, string $apiKey)
    {
        $this->client = new Client([
            'base_uri' => $url,
        ]);
        $this->apiKey = $apiKey;
    }

    public function getOrder(Order $order)
    {
        try {
            return json_decode($this->get(self::API_ROOT . '/order/' . $order->getId()), true);

        } catch (RequestException $exception) {
            // Order could not be retrieved, usually because of 404 - not found
            return null;
        }
    }
    public function getAccount(Order $order)
    {
        try {
            return json_decode($this->get(self::API_ROOT . '/account/' . $order->getId()), true);

        } catch (RequestException $exception) {
            // Order could not be retrieved, usually because of 404 - not found
            return null;
        }
    }
    public function createOrder(Order $order)
    {
        $account = $this->getAccount($order);

        // @TODO Do we need to update account at some point?
        // If there is no account, we try to get by Email or create a new one
        if (!isset($account['data']['id'])) {
            $account = $this->getAccountByEmail($order->getAccount()->getEmail());
            if (isset($account['data']['id'])) {
                $order->setAccountId($account['data']['id']);
                $order->setAccount(null);
            } else {
                $account = $this->createAccount($order->getAccount());
                if (isset($account['data']['id'])) {
                    $order->setAccountId($account['data']['id']);
                    $order->setAccount(null);
                }
            }
        }

        return $this->post(self::API_ROOT . '/order', $order);
    }

    public function updateOrder(Order $order)
    {
        // @TODO check if it is a correct order id
        return $this->put(self::API_ROOT . '/order/' . $order->getId(), $order);
    }

    public function getAccountByEmail(string $email)
    {
        try {
            return json_decode($this->get(self::API_ROOT . '/account/email/' . $email)->getBody(), true);
        } catch (RequestException $exception) {
            // Account could not be retrieved, usually because of 404 - not found
            return null;
        }
    }

    public function createAccount(Account $account)
    {
        return json_decode($this->post(self::API_ROOT . '/account', $account)->getBody(), true);
    }

    protected function put($uri, $data)
    {
        $options = $this->getOptions($data);
        $this->getLogger()->notice('PUT request to uri: ' . $uri);
        $this->getLogger()->notice(json_encode($options));

        return $this->client->put($uri, $options);
    }

    protected function post($uri, $data)
    {
        $options = $this->getOptions($data);
        $this->getLogger()->notice('POST request to uri: ' . $uri);
        $this->getLogger()->notice(json_encode($options));

        return $this->client->post($uri, $options);
    }

    protected function get($uri, $data = null)
    {
        $options = $this->getOptions($data);
        $this->getLogger()->notice('GET request to uri: ' . $uri);
        $this->getLogger()->notice(json_encode($options));

        return $this->client->get($uri, $options);
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
