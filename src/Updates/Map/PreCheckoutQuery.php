<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PreCheckoutQuery.
 *
 * @method string getCurrency()
 * @method User getFrom()
 * @method string getId()
 * @method string getInvoicePayload()
 * @method OrderInfo getOrderInfo()
 * @method string getShippingOptionId()
 * @method int getTotalAmount()
 * @method bool isCurrency()
 * @method bool isFrom()
 * @method bool isId()
 * @method bool isInvoicePayload()
 * @method bool isOrderInfo()
 * @method bool isShippingOptionId()
 * @method bool isTotalAmount()
 * @method $this setCurrency(string $value)
 * @method $this setFrom(User $value)
 * @method $this setId(string $value)
 * @method $this setInvoicePayload(string $value)
 * @method $this setOrderInfo(OrderInfo $value)
 * @method $this setShippingOptionId(string $value)
 * @method $this setTotalAmount(int $value)
 * @method $this unsetCurrency()
 * @method $this unsetFrom()
 * @method $this unsetId()
 * @method $this unsetInvoicePayload()
 * @method $this unsetOrderInfo()
 * @method $this unsetShippingOptionId()
 * @method $this unsetTotalAmount()
 *
 * @property string $currency
 * @property User $from
 * @property string $id
 * @property string $invoice_payload
 * @property OrderInfo $order_info
 * @property string $shipping_option_id
 * @property int $total_amount
 */
class PreCheckoutQuery extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id'                 => 'string',
        'from'               => 'User',
        'currency'           => 'string',
        'total_amount'       => 'int',
        'invoice_payload'    => 'string',
        'shipping_option_id' => 'string',
        'order_info'         => 'OrderInfo',
    ];
}