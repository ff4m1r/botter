<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * ChosenInlineResult.
 *
 * @method User getFrom()
 * @method string getInlineMessageId()
 * @method Location getLocation()
 * @method string getQuery()
 * @method string getResultId()
 * @method bool isFrom()
 * @method bool isInlineMessageId()
 * @method bool isLocation()
 * @method bool isQuery()
 * @method bool isResultId()
 * @method $this setFrom(User $value)
 * @method $this setInlineMessageId(string $value)
 * @method $this setLocation(Location $value)
 * @method $this setQuery(string $value)
 * @method $this setResultId(string $value)
 * @method $this unsetFrom()
 * @method $this unsetInlineMessageId()
 * @method $this unsetLocation()
 * @method $this unsetQuery()
 * @method $this unsetResultId()
 *
 * @property User $from
 * @property string $inline_message_id
 * @property Location $location
 * @property string $query
 * @property string $result_id
 */
class ChosenInlineResult extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'result_id'         => 'string',
        'from'              => 'User',
        'location'          => 'Location',
        'inline_message_id' => 'string',
        'query'             => 'string',
    ];
}