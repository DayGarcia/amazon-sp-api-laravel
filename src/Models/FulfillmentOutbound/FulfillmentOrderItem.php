<?php

/**
 * FulfillmentOrderItem.
 *
 * PHP version 5
 *
 * @author   Stefan Neuhaus / ClouSale
 */

/**
 * Selling Partner APIs for Fulfillment Outbound.
 *
 * The Selling Partner API for Fulfillment Outbound lets you create applications that help a seller fulfill Multi-Channel Fulfillment orders using their inventory in Amazon's fulfillment network. You can get information on both potential and existing fulfillment orders.
 *
 * OpenAPI spec version: 2020-07-01
 */

namespace DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound;

use ArrayAccess;
use DayGarcia\AmazonSPApiLaravel\Models\ModelInterface;
use DayGarcia\AmazonSPApiLaravel\ObjectSerializer;

/**
 * FulfillmentOrderItem Class Doc Comment.
 *

 * @description Item information for a fulfillment order.
 *
 * @author   Stefan Neuhaus / ClouSale
 */
class FulfillmentOrderItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = 'FulfillmentOrderItem';

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'seller_sku' => 'string',
        'seller_fulfillment_order_item_id' => 'string',
        'quantity' => '\DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Quantity',
        'gift_message' => 'string',
        'displayable_comment' => 'string',
        'fulfillment_network_sku' => 'string',
        'order_item_disposition' => 'string',
        'cancelled_quantity' => '\DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Quantity',
        'unfulfillable_quantity' => '\DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Quantity',
        'estimated_ship_date' => '\DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Timestamp',
        'estimated_arrival_date' => '\DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Timestamp',
        'per_unit_price' => '\DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Money',
        'per_unit_tax' => '\DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Money',
        'per_unit_declared_value' => '\DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Money',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'seller_sku' => null,
        'seller_fulfillment_order_item_id' => null,
        'quantity' => null,
        'gift_message' => null,
        'displayable_comment' => null,
        'fulfillment_network_sku' => null,
        'order_item_disposition' => null,
        'cancelled_quantity' => null,
        'unfulfillable_quantity' => null,
        'estimated_ship_date' => null,
        'estimated_arrival_date' => null,
        'per_unit_price' => null,
        'per_unit_tax' => null,
        'per_unit_declared_value' => null,
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization.
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'seller_sku' => 'sellerSku',
        'seller_fulfillment_order_item_id' => 'sellerFulfillmentOrderItemId',
        'quantity' => 'quantity',
        'gift_message' => 'giftMessage',
        'displayable_comment' => 'displayableComment',
        'fulfillment_network_sku' => 'fulfillmentNetworkSku',
        'order_item_disposition' => 'orderItemDisposition',
        'cancelled_quantity' => 'cancelledQuantity',
        'unfulfillable_quantity' => 'unfulfillableQuantity',
        'estimated_ship_date' => 'estimatedShipDate',
        'estimated_arrival_date' => 'estimatedArrivalDate',
        'per_unit_price' => 'perUnitPrice',
        'per_unit_tax' => 'perUnitTax',
        'per_unit_declared_value' => 'perUnitDeclaredValue',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @var string[]
     */
    protected static $setters = [
        'seller_sku' => 'setSellerSku',
        'seller_fulfillment_order_item_id' => 'setSellerFulfillmentOrderItemId',
        'quantity' => 'setQuantity',
        'gift_message' => 'setGiftMessage',
        'displayable_comment' => 'setDisplayableComment',
        'fulfillment_network_sku' => 'setFulfillmentNetworkSku',
        'order_item_disposition' => 'setOrderItemDisposition',
        'cancelled_quantity' => 'setCancelledQuantity',
        'unfulfillable_quantity' => 'setUnfulfillableQuantity',
        'estimated_ship_date' => 'setEstimatedShipDate',
        'estimated_arrival_date' => 'setEstimatedArrivalDate',
        'per_unit_price' => 'setPerUnitPrice',
        'per_unit_tax' => 'setPerUnitTax',
        'per_unit_declared_value' => 'setPerUnitDeclaredValue',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @var string[]
     */
    protected static $getters = [
        'seller_sku' => 'getSellerSku',
        'seller_fulfillment_order_item_id' => 'getSellerFulfillmentOrderItemId',
        'quantity' => 'getQuantity',
        'gift_message' => 'getGiftMessage',
        'displayable_comment' => 'getDisplayableComment',
        'fulfillment_network_sku' => 'getFulfillmentNetworkSku',
        'order_item_disposition' => 'getOrderItemDisposition',
        'cancelled_quantity' => 'getCancelledQuantity',
        'unfulfillable_quantity' => 'getUnfulfillableQuantity',
        'estimated_ship_date' => 'getEstimatedShipDate',
        'estimated_arrival_date' => 'getEstimatedArrivalDate',
        'per_unit_price' => 'getPerUnitPrice',
        'per_unit_tax' => 'getPerUnitTax',
        'per_unit_declared_value' => 'getPerUnitDeclaredValue',
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name.
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses).
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests).
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    /**
     * Associative array for storing property values.
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor.
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['seller_sku'] = isset($data['seller_sku']) ? $data['seller_sku'] : null;
        $this->container['seller_fulfillment_order_item_id'] = isset($data['seller_fulfillment_order_item_id']) ? $data['seller_fulfillment_order_item_id'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['gift_message'] = isset($data['gift_message']) ? $data['gift_message'] : null;
        $this->container['displayable_comment'] = isset($data['displayable_comment']) ? $data['displayable_comment'] : null;
        $this->container['fulfillment_network_sku'] = isset($data['fulfillment_network_sku']) ? $data['fulfillment_network_sku'] : null;
        $this->container['order_item_disposition'] = isset($data['order_item_disposition']) ? $data['order_item_disposition'] : null;
        $this->container['cancelled_quantity'] = isset($data['cancelled_quantity']) ? $data['cancelled_quantity'] : null;
        $this->container['unfulfillable_quantity'] = isset($data['unfulfillable_quantity']) ? $data['unfulfillable_quantity'] : null;
        $this->container['estimated_ship_date'] = isset($data['estimated_ship_date']) ? $data['estimated_ship_date'] : null;
        $this->container['estimated_arrival_date'] = isset($data['estimated_arrival_date']) ? $data['estimated_arrival_date'] : null;
        $this->container['per_unit_price'] = isset($data['per_unit_price']) ? $data['per_unit_price'] : null;
        $this->container['per_unit_tax'] = isset($data['per_unit_tax']) ? $data['per_unit_tax'] : null;
        $this->container['per_unit_declared_value'] = isset($data['per_unit_declared_value']) ? $data['per_unit_declared_value'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (null === $this->container['seller_sku']) {
            $invalidProperties[] = "'seller_sku' can't be null";
        }
        if (null === $this->container['seller_fulfillment_order_item_id']) {
            $invalidProperties[] = "'seller_fulfillment_order_item_id' can't be null";
        }
        if (null === $this->container['quantity']) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (null === $this->container['cancelled_quantity']) {
            $invalidProperties[] = "'cancelled_quantity' can't be null";
        }
        if (null === $this->container['unfulfillable_quantity']) {
            $invalidProperties[] = "'unfulfillable_quantity' can't be null";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed.
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return 0 === count($this->listInvalidProperties());
    }

    /**
     * Gets seller_sku.
     *
     * @return string
     */
    public function getSellerSku()
    {
        return $this->container['seller_sku'];
    }

    /**
     * Sets seller_sku.
     *
     * @param string $seller_sku the seller SKU of the item
     *
     * @return $this
     */
    public function setSellerSku($seller_sku)
    {
        $this->container['seller_sku'] = $seller_sku;

        return $this;
    }

    /**
     * Gets seller_fulfillment_order_item_id.
     *
     * @return string
     */
    public function getSellerFulfillmentOrderItemId()
    {
        return $this->container['seller_fulfillment_order_item_id'];
    }

    /**
     * Sets seller_fulfillment_order_item_id.
     *
     * @param string $seller_fulfillment_order_item_id a fulfillment order item identifier submitted with a call to the createFulfillmentOrder operation
     *
     * @return $this
     */
    public function setSellerFulfillmentOrderItemId($seller_fulfillment_order_item_id)
    {
        $this->container['seller_fulfillment_order_item_id'] = $seller_fulfillment_order_item_id;

        return $this;
    }

    /**
     * Gets quantity.
     *
     * @return \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Quantity
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity.
     *
     * @param \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Quantity $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets gift_message.
     *
     * @return string
     */
    public function getGiftMessage()
    {
        return $this->container['gift_message'];
    }

    /**
     * Sets gift_message.
     *
     * @param string $gift_message a message to the gift recipient, if applicable
     *
     * @return $this
     */
    public function setGiftMessage($gift_message)
    {
        $this->container['gift_message'] = $gift_message;

        return $this;
    }

    /**
     * Gets displayable_comment.
     *
     * @return string
     */
    public function getDisplayableComment()
    {
        return $this->container['displayable_comment'];
    }

    /**
     * Sets displayable_comment.
     *
     * @param string $displayable_comment item-specific text that displays in recipient-facing materials such as the outbound shipment packing slip
     *
     * @return $this
     */
    public function setDisplayableComment($displayable_comment)
    {
        $this->container['displayable_comment'] = $displayable_comment;

        return $this;
    }

    /**
     * Gets fulfillment_network_sku.
     *
     * @return string
     */
    public function getFulfillmentNetworkSku()
    {
        return $this->container['fulfillment_network_sku'];
    }

    /**
     * Sets fulfillment_network_sku.
     *
     * @param string $fulfillment_network_sku amazon's fulfillment network SKU of the item
     *
     * @return $this
     */
    public function setFulfillmentNetworkSku($fulfillment_network_sku)
    {
        $this->container['fulfillment_network_sku'] = $fulfillment_network_sku;

        return $this;
    }

    /**
     * Gets order_item_disposition.
     *
     * @return string
     */
    public function getOrderItemDisposition()
    {
        return $this->container['order_item_disposition'];
    }

    /**
     * Sets order_item_disposition.
     *
     * @param string $order_item_disposition indicates whether the item is sellable or unsellable
     *
     * @return $this
     */
    public function setOrderItemDisposition($order_item_disposition)
    {
        $this->container['order_item_disposition'] = $order_item_disposition;

        return $this;
    }

    /**
     * Gets cancelled_quantity.
     *
     * @return \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Quantity
     */
    public function getCancelledQuantity()
    {
        return $this->container['cancelled_quantity'];
    }

    /**
     * Sets cancelled_quantity.
     *
     * @param \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Quantity $cancelled_quantity cancelled_quantity
     *
     * @return $this
     */
    public function setCancelledQuantity($cancelled_quantity)
    {
        $this->container['cancelled_quantity'] = $cancelled_quantity;

        return $this;
    }

    /**
     * Gets unfulfillable_quantity.
     *
     * @return \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Quantity
     */
    public function getUnfulfillableQuantity()
    {
        return $this->container['unfulfillable_quantity'];
    }

    /**
     * Sets unfulfillable_quantity.
     *
     * @param \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Quantity $unfulfillable_quantity unfulfillable_quantity
     *
     * @return $this
     */
    public function setUnfulfillableQuantity($unfulfillable_quantity)
    {
        $this->container['unfulfillable_quantity'] = $unfulfillable_quantity;

        return $this;
    }

    /**
     * Gets estimated_ship_date.
     *
     * @return \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Timestamp
     */
    public function getEstimatedShipDate()
    {
        return $this->container['estimated_ship_date'];
    }

    /**
     * Sets estimated_ship_date.
     *
     * @param \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Timestamp $estimated_ship_date estimated_ship_date
     *
     * @return $this
     */
    public function setEstimatedShipDate($estimated_ship_date)
    {
        $this->container['estimated_ship_date'] = $estimated_ship_date;

        return $this;
    }

    /**
     * Gets estimated_arrival_date.
     *
     * @return \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Timestamp
     */
    public function getEstimatedArrivalDate()
    {
        return $this->container['estimated_arrival_date'];
    }

    /**
     * Sets estimated_arrival_date.
     *
     * @param \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Timestamp $estimated_arrival_date estimated_arrival_date
     *
     * @return $this
     */
    public function setEstimatedArrivalDate($estimated_arrival_date)
    {
        $this->container['estimated_arrival_date'] = $estimated_arrival_date;

        return $this;
    }

    /**
     * Gets per_unit_price.
     *
     * @return \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Money
     */
    public function getPerUnitPrice()
    {
        return $this->container['per_unit_price'];
    }

    /**
     * Sets per_unit_price.
     *
     * @param \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Money $per_unit_price per_unit_price
     *
     * @return $this
     */
    public function setPerUnitPrice($per_unit_price)
    {
        $this->container['per_unit_price'] = $per_unit_price;

        return $this;
    }

    /**
     * Gets per_unit_tax.
     *
     * @return \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Money
     */
    public function getPerUnitTax()
    {
        return $this->container['per_unit_tax'];
    }

    /**
     * Sets per_unit_tax.
     *
     * @param \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Money $per_unit_tax per_unit_tax
     *
     * @return $this
     */
    public function setPerUnitTax($per_unit_tax)
    {
        $this->container['per_unit_tax'] = $per_unit_tax;

        return $this;
    }

    /**
     * Gets per_unit_declared_value.
     *
     * @return \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Money
     */
    public function getPerUnitDeclaredValue()
    {
        return $this->container['per_unit_declared_value'];
    }

    /**
     * Sets per_unit_declared_value.
     *
     * @param \DayGarcia\AmazonSPApiLaravel\Models\FulfillmentOutbound\Money $per_unit_declared_value per_unit_declared_value
     *
     * @return $this
     */
    public function setPerUnitDeclaredValue($per_unit_declared_value)
    {
        $this->container['per_unit_declared_value'] = $per_unit_declared_value;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param int $offset Offset
     *
     * @return bool
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param int $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int   $offset Offset
     * @param mixed $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param int $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object.
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
