<?php

namespace Interflora\CdpApi\Model;

class Extra extends AbstractJsonSerializable
{
    /**
     * @var array
     */
    public $gciCertificates = [];

    /**
     * @var array
     */
    public $subscription;
}
