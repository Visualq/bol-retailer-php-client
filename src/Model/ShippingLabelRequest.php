<?php

namespace Picqer\BolRetailer\Model;

// This class is auto generated by OpenApi\ModelGenerator
class ShippingLabelRequest extends AbstractModel
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
            'orderItems' => [ 'model' => OrderItem::class, 'array' => true ],
            'shippingLabelOfferId' => [ 'model' => null, 'array' => false ],
        ];
    }

    /**
     * @var OrderItem[] Order items for which the delivery options are requested.
     */
    public $orderItems = [];

    /**
     * @var string Shipping label offer id for which you request a shipping label.
     */
    public $shippingLabelOfferId;

    /**
     * Returns an array with the orderItemIds from orderItems.
     * @return string[] OrderItemIds from orderItems.
     */
    public function getOrderItemIds(): array
    {
        return array_map(function ($model) {
            return $model->orderItemId;
        }, $this->orderItems);
    }

    /**
     * Sets orderItems by an array of orderItemIds.
     * @param string[] $orderItemIds OrderItemIds for orderItems.
     */
    public function setOrderItemIds(array $orderItemIds): void
    {
        $this->orderItems = array_map(function ($orderItemId) {
            return OrderItem::constructFromArray(['orderItemId' => $orderItemId]);
        }, $orderItemIds);
    }

    /**
     * Adds a new OrderItem to orderItems by orderItemId.
     * @param string $orderItemId OrderItemId for the OrderItem to add.
     */
    public function addOrderItemId(string $orderItemId): void
    {
        $this->orderItems[] = OrderItem::constructFromArray(['orderItemId' => $orderItemId]);
    }
}
