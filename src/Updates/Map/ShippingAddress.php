<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * ShippingAddress.
 *
 * @method string getCity()
 * @method string getCountryCode()
 * @method string getPostCode()
 * @method string getState()
 * @method string getStreetLine1()
 * @method string getStreetLine2()
 * @method bool isCity()
 * @method bool isCountryCode()
 * @method bool isPostCode()
 * @method bool isState()
 * @method bool isStreetLine1()
 * @method bool isStreetLine2()
 * @method $this setCity(string $value)
 * @method $this setCountryCode(string $value)
 * @method $this setPostCode(string $value)
 * @method $this setState(string $value)
 * @method $this setStreetLine1(string $value)
 * @method $this setStreetLine2(string $value)
 * @method $this unsetCity()
 * @method $this unsetCountryCode()
 * @method $this unsetPostCode()
 * @method $this unsetState()
 * @method $this unsetStreetLine1()
 * @method $this unsetStreetLine2()
 *
 * @property string $city
 * @property string $country_code
 * @property string $post_code
 * @property string $state
 * @property string $street_line1
 * @property string $street_line2
 */
class ShippingAddress extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'country_code' => 'string',
        'state'        => 'string',
        'city'         => 'string',
        'street_line1' => 'string',
        'street_line2' => 'string',
        'post_code'    => 'string',
    ];
}