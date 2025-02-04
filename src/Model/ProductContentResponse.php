<?php

namespace Picqer\BolRetailerV7\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ProductContentResponse extends AbstractModel
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
            'internalReference' => [ 'model' => null, 'array' => false ],
            'rejectedAttributes' => [ 'model' => RejectedAttributeResponse::class, 'array' => true ],
            'status' => [ 'model' => null, 'array' => false ],
            'errorCode' => [ 'model' => null, 'array' => false ],
            'errorDescription' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var string A user defined unique reference to identify the products in the upload.
     */
    public $internalReference;

    /**
     * @var RejectedAttributeResponse[]
     */
    public $rejectedAttributes = [];

    /**
     * @var string The end status of the rejected attribute.
     */
    public $status;

    /**
     * @var int The rejection error code.
     */
    public $errorCode;

    /**
     * @var string The rejection error message explains why the value was rejected.
     */
    public $errorDescription;
}
