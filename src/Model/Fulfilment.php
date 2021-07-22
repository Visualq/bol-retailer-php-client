<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class Fulfilment extends AbstractModel
{
    /**
     * Returns the definition of the model: an associative array with field names as key and
     * field definition as value. The field definition contains of
     * model: Model class or null if it is a scalar type
     * array: Boolean whether it is an array
     * @return array The model definition
     */
    public function getModelDefinition(): array
    {
        return [
            'method' => [ 'model' => null, 'array' => false ],
            'deliveryCode' => [ 'model' => null, 'array' => false ],
            'pickUpPoints' => [ 'model' => PickUpPoint::class, 'array' => true ],
        ];
    }

    /**
     * @var string Specifies whether this shipment has been fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). Defaults to FBR.
     */
    public $method;

    /**
     * @var string The delivery promise that applies to this offer. This value will only be used in combination with fulfilmentMethod 'FBR'.
     */
    public $deliveryCode;

    /**
     * @var PickUpPoint[] Indicates whether this order is shipped to a Pick Up Point.
     */
    public $pickUpPoints = [];

    /**
     * Returns an array with the codes from pickUpPoints.
     * @return string[] Codes from pickUpPoints.
     */
    public function getPickUpPointsCodes(): array
    {
        return array_map(function ($model) {
            return $model->code;
        }, $this->pickUpPoints);
    }

    /**
     * Sets pickUpPoints by an array of codes.
     * @param string[] $codes Codes for pickUpPoints.
     */
    public function setPickUpPointsCodes(array $codes): void
    {
        $this->pickUpPoints = array_map(function ($code) {
            return PickUpPoint::constructFromArray(['code' => $code]);
        }, $codes);
    }

    /**
     * Adds a new PickUpPoint to pickUpPoints by code.
     * @param string $code Code for the PickUpPoint to add.
     */
    public function addPickUpPointsCode(string $code): void
    {
        $this->pickUpPoints[] = PickUpPoint::constructFromArray(['code' => $code]);
    }
}
