<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * SuccessfulPayment.
 *
 * @method string getCurrency()
 * @method string getInvoicePayload()
 * @method OrderInfo getOrderInfo()
 * @method string getProviderPaymentChargeId()
 * @method string getShippingOptionId()
 * @method string getTelegramPaymentChargeId()
 * @method int getTotalAmount()
 * @method bool isCurrency()
 * @method bool isInvoicePayload()
 * @method bool isOrderInfo()
 * @method bool isProviderPaymentChargeId()
 * @method bool isShippingOptionId()
 * @method bool isTelegramPaymentChargeId()
 * @method bool isTotalAmount()
 * @method $this setCurrency(string $value)
 * @method $this setInvoicePayload(string $value)
 * @method $this setOrderInfo(OrderInfo $value)
 * @method $this setProviderPaymentChargeId(string $value)
 * @method $this setShippingOptionId(string $value)
 * @method $this setTelegramPaymentChargeId(string $value)
 * @method $this setTotalAmount(int $value)
 * @method $this unsetCurrency()
 * @method $this unsetInvoicePayload()
 * @method $this unsetOrderInfo()
 * @method $this unsetProviderPaymentChargeId()
 * @method $this unsetShippingOptionId()
 * @method $this unsetTelegramPaymentChargeId()
 * @method $this unsetTotalAmount()
 *
 * @property string $currency
 * @property string $invoice_payload
 * @property OrderInfo $order_info
 * @property string $provider_payment_charge_id
 * @property string $shipping_option_id
 * @property string $telegram_payment_charge_id
 * @property int $total_amount
 */
class SuccessfulPayment extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'currency'                   => 'string',
        'total_amount'               => 'int',
        'invoice_payload'            => 'string',
        'shipping_option_id'         => 'string',
        'order_info'                 => 'OrderInfo',
        'telegram_payment_charge_id' => 'string',
        'provider_payment_charge_id' => 'string',
    ];
}