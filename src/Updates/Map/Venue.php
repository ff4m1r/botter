<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Venue.
 *
 * @method string getAddress()
 * @method string getFoursquareId()
 * @method string getFoursquareType()
 * @method Location getLocation()
 * @method string getTitle()
 * @method bool isAddress()
 * @method bool isFoursquareId()
 * @method bool isFoursquareType()
 * @method bool isLocation()
 * @method bool isTitle()
 * @method $this setAddress(string $value)
 * @method $this setFoursquareId(string $value)
 * @method $this setFoursquareType(string $value)
 * @method $this setLocation(Location $value)
 * @method $this setTitle(string $value)
 * @method $this unsetAddress()
 * @method $this unsetFoursquareId()
 * @method $this unsetFoursquareType()
 * @method $this unsetLocation()
 * @method $this unsetTitle()
 *
 * @property string $address
 * @property string $foursquare_id
 * @property string $foursquare_type
 * @property Location $location
 * @property string $title
 */
class Venue extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'location'        => 'Location',
        'title'           => 'string',
        'address'         => 'string',
        'foursquare_id'   => 'string',
        'foursquare_type' => 'string',
    ];
}