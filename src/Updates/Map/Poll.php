<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Poll.
 *
 * @method string getId()
 * @method bool getIsClosed()
 * @method PollOption[] getOptions()
 * @method string getQuestion()
 * @method bool isId()
 * @method bool isIsClosed()
 * @method bool isOptions()
 * @method bool isQuestion()
 * @method $this setId(string $value)
 * @method $this setIsClosed(bool $value)
 * @method $this setOptions(PollOption[] $value)
 * @method $this setQuestion(string $value)
 * @method $this unsetId()
 * @method $this unsetIsClosed()
 * @method $this unsetOptions()
 * @method $this unsetQuestion()
 *
 * @property string $id
 * @property bool $is_closed
 * @property PollOption[] $options
 * @property string $question
 */
class Poll extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id'        => 'string',
        'question'  => 'string',
        'options'   => 'PollOption[]',
        'is_closed' => 'bool',
    ];
}