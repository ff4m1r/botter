<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Location.
 *
 * @method float getLatitude()
 * @method float getLongitude()
 * @method bool isLatitude()
 * @method bool isLongitude()
 * @method $this setLatitude(float $value)
 * @method $this setLongitude(float $value)
 * @method $this unsetLatitude()
 * @method $this unsetLongitude()
 *
 * @property float $latitude
 * @property float $longitude
 */
class Location extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'longitude' => 'float',
        'latitude'  => 'float',
    ];
}