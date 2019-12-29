<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * InlineQuery.
 *
 * @method User getFrom()
 * @method string getId()
 * @method Location getLocation()
 * @method string getOffset()
 * @method string getQuery()
 * @method bool isFrom()
 * @method bool isId()
 * @method bool isLocation()
 * @method bool isOffset()
 * @method bool isQuery()
 * @method $this setFrom(User $value)
 * @method $this setId(string $value)
 * @method $this setLocation(Location $value)
 * @method $this setOffset(string $value)
 * @method $this setQuery(string $value)
 * @method $this unsetFrom()
 * @method $this unsetId()
 * @method $this unsetLocation()
 * @method $this unsetOffset()
 * @method $this unsetQuery()
 *
 * @property User $from
 * @property string $id
 * @property Location $location
 * @property string $offset
 * @property string $query
 */
class InlineQuery extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id'       => 'string',
        'from'     => 'User',
        'location' => 'Location',
        'query'    => 'string',
        'offset'   => 'string',
    ];
}