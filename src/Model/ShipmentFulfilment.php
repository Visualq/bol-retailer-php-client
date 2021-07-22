<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ShipmentFulfilment extends AbstractModel
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
            'distributionParty' => [ 'model' => null, 'array' => false ],
            'latestDeliveryDate' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string Specifies whether this shipment has been fulfilled by the retailer (FBR) or fulfilled by bol.com (FBB). Defaults to FBR.
     */
    public $method;

    /**
     * @var string The party that manages the distribution, either bol.com or the retailer itself.
     */
    public $distributionParty;

    /**
     * @var string The ultimate delivery date at which this order must be delivered at the customer's shipping address. This field is empty in case the exactDeliveryDate is filled.
     */
    public $latestDeliveryDate;
}
