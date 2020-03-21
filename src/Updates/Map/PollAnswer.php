<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PollAnswer.
 *
 * @method int[] getOptionIds()
 * @method string getPollId()
 * @method User getUser()
 * @method bool isOptionIds()
 * @method bool isPollId()
 * @method bool isUser()
 * @method $this setOptionIds(int[] $value)
 * @method $this setPollId(string $value)
 * @method $this setUser(User $value)
 * @method $this unsetOptionIds()
 * @method $this unsetPollId()
 * @method $this unsetUser()
 *
 * @property int[] $option_ids
 * @property string $poll_id
 * @property User $user
 */
class PollAnswer extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'poll_id'        => 'string',
        'user'           => 'User',
        'option_ids'     => 'int[]'
    ];
}