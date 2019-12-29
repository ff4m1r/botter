<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * ShippingQuery.
 *
 * @method User getFrom()
 * @method string getId()
 * @method string getInvoicePayload()
 * @method ShippingAddress getShippingAddress()
 * @method bool isFrom()
 * @method bool isId()
 * @method bool isInvoicePayload()
 * @method bool isShippingAddress()
 * @method $this setFrom(User $value)
 * @method $this setId(string $value)
 * @method $this setInvoicePayload(string $value)
 * @method $this setShippingAddress(ShippingAddress $value)
 * @method $this unsetFrom()
 * @method $this unsetId()
 * @method $this unsetInvoicePayload()
 * @method $this unsetShippingAddress()
 *
 * @property User $from
 * @property string $id
 * @property string $invoice_payload
 * @property ShippingAddress $shipping_address
 */
class ShippingQuery extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id'               => 'string',
        'from'             => 'User',
        'invoice_payload'  => 'string',
        'shipping_address' => 'ShippingAddress',
    ];
}