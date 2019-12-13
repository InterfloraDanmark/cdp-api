<?php

namespace Interflora\CdpApi\Service;

use Interflora\CdpApi\Model\Account;
use Interflora\CdpApi\Model\Address;
use Interflora\CdpApi\Model\Business;

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
        if ($response['address']) {
            $account->setAddress($this->decodeAddressResponse($response['address']));
        }
        if ($response['business']) {
            $account->setBusiness($this->decodeBusinessResponse($response['business']));
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
}