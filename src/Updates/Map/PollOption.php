<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PollOption.
 *
 * @method string getText()
 * @method int getVoterCount()
 * @method bool isText()
 * @method bool isVoterCount()
 * @method $this setText(string $value)
 * @method $this setVoterCount(int $value)
 * @method $this unsetText()
 * @method $this unsetVoterCount()
 *
 * @property string $text
 * @property int $voter_count
 */
class PollOption extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'text'        => 'string',
        'voter_count' => 'int'
    ];
}