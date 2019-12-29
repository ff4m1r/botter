<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * OrderInfo.
 *
 * @method string getEmail()
 * @method string getName()
 * @method string getPhoneNumber()
 * @method ShippingAddress getShippingAddress()
 * @method bool isEmail()
 * @method bool isName()
 * @method bool isPhoneNumber()
 * @method bool isShippingAddress()
 * @method $this setEmail(string $value)
 * @method $this setName(string $value)
 * @method $this setPhoneNumber(string $value)
 * @method $this setShippingAddress(ShippingAddress $value)
 * @method $this unsetEmail()
 * @method $this unsetName()
 * @method $this unsetPhoneNumber()
 * @method $this unsetShippingAddress()
 *
 * @property string $email
 * @property string $name
 * @property string $phone_number
 * @property ShippingAddress $shipping_address
 */
class OrderInfo extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'name'             => 'string',
        'phone_number'     => 'string',
        'email'            => 'string',
        'shipping_address' => 'ShippingAddress',
    ];
}