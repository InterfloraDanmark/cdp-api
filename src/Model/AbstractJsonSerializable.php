<?php

namespace Interflora\CdpApi\Model;

use JsonSerializable;

abstract class AbstractJsonSerializable implements JsonSerializable
{

    /**
     * Specify data which should be serialized to JSON
     * @link  https://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize(): array
    {
        $data = [];
        $numberFields = [
            'orderTotal',
            'shipmentTotal',
            'shipmentCost',
            'itemTotal',
            'flowerTotal',
            'floristCost',
            'netTotal',
            'itemTotal',
            'shipmentCost',
            'extraCost',
            'netAmountTotal',
            'floristCost',
            'price',
            'quantity',
            'total',
        ];

        foreach ($this as $key => $value) {
            if (null !== $value) {
                if (in_array($key, $numberFields)) {
                    $data[$key] = (float) number_format(round($value, 2), 2, ".", "");
                    continue;
                }
                if ($value instanceof \DateTime) {
                    $data[$key] = $value->format('Y-m-d\TH:i:s\Z');
                    continue;
                }
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
