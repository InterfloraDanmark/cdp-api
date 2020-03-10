<?php

namespace Interflora\CdpApi\Service;

use Interflora\CdpApi\Model\Account;
use Interflora\CdpApi\Model\Address;
use Interflora\CdpApi\Model\Business;
use Interflora\CdpApi\Model\MarketingPermission;
use Interflora\CdpApi\Model\Occasion;
use Interflora\CdpApi\Model\OccasionPreference;

/**
 * Class Decoder
 *
 * @package Interflora\CdpApi\Service
 */
class Decoder {

    /**
     * @param array $response
     *
     * @return \Interflora\CdpApi\Model\Account
     */
    public function decodeAccountResponse(array $response): Account {
        $account = new Account();
        $account
            ->setId($response['id'])
            ->setDebitorNumber($response['debitorNumber'])
            ->setType($response['type'])
            ->setEmail($response['email'])
            ->setLastName($response['lastName'])
            ->setFirstName($response['firstName'])
            ->setPwd1($response['pwd1'])
            ->setTelephone($response['telephone'])
            ->setGender($response['gender']);
        if (!empty($response['address'])) {
            $account->setAddress($this->decodeAddressResponse($response['address']));
        }
        if (!empty($response['business'])) {
            $account->setBusiness($this->decodeBusinessResponse($response['business']));
        }
        if (!empty($response['marketingPermissions'])) {
            $account->setMarketingPermissions($this->decodePermissions($response['marketingPermissions']));
        }
        return $account;
    }

    /**
     * @param array $response
     *
     * @return \Interflora\CdpApi\Model\Address
     */
    public function decodeAddressResponse(array $response): Address {
        $address = new Address();
        $address
            ->setId($response['id'])
            ->setFirstName($response['firstName'])
            ->setFamilyName($response['familyName'])
            ->setAddressLine1($response['addressLine1'])
            ->setLocality($response['locality'])
            ->setPostalCode($response['postalCode'])
            ->setCountryCode($response['countryCode']);
        return $address;
    }

    /**
     * @param array $response
     *
     * @return \Interflora\CdpApi\Model\Business
     */
    public function decodeBusinessResponse(array $response): Business {
        $business = new Business();
        $business
            ->setId($response['id'])
            ->setName($response['name'])
            ->setTelephone($response['telephone'])
            ->setEanNumber($response['eanNumber'])
            ->setCvrNumber($response['cvrNumber'])
            ->setElectronicInvoice($response['electronicInvoice'])
            ->setMonthlyInvoice($response['monthlyInvoice'])
            ->setCompanyReference($response['companyReference'])
            ->setFax($response['fax']);
        if (!empty($response['address'])) {
            $business->setAddress($this->decodeAddressResponse($response['address']));
        }
        return $business;
    }

  /**
   * @param array $response
   *
   * @return array
   */
  public function decodePermissions(array $response): array {
    $permissions = [];
    foreach ($response as $result) {
      $permission = new MarketingPermission();
      $permission->setId($result['id'])
        ->setValue($result['value'])
        ->setSource($result['source'])
        ->setGranted($result['granted'])
        ->setOwner($result['owner'])
        ->setChannelId($result['channelId']);
      $permissions[] =  $permission;
    }
    return $permissions;
  }

  /**
   * @param array $response
   *
   * @return array
   */
  public function decodeOccasions(array $response): array {
    $occasions = [];
    foreach ($response as $result) {
      $occasion = new Occasion();
      $occasion->setId($result['id'] ?? '')
        ->setName($result['name'] ?? '')
        ->setAccountId($result['accountId'] ?? '')
        ->setTargetName($result['targetName'] ?? '')
        ->setOccasionType($result['occasionType'] ?? '')
        ->setDate($result['date'] ?? '')
        ->setDateNext($result['dateNext'] ?? '')
        ->setSingle($result['single'] ?? false)
        ->setCommemoration($result['commemoration'] ?? false)
        ->setDeleted($result['deleted'] ?? false);
      $preferences = [];
      foreach ($result['occasionPreference'] as $preference) {
        $occasionPreference = new OccasionPreference();
        $occasionPreference
          ->setId($preference['id'] ?? '')
          ->setName($preference['name'] ?? '')
          ->setSelected($preference['selected'] ?? '')
          ->setMain($preference['main'] ?? '');
        $preferences[] = $occasionPreference;
      }
      $occasion->setOccasionPreferences($preferences);
      $occasions[] =  $occasion;
    }
    return $occasions;
  }
}