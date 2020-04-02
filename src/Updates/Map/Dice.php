<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Dice.
 *
 * @method int getValue()
 * @method bool isValue()
 * @method $this setValue(int $value)
 * @method $this unsetValue()
 *
 * @property int $value
 */
class Dice extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'value' => 'int',
    ];
}