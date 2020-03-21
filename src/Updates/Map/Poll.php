<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Poll.
 *
 * @method bool getAllowsMultipleAnswers()
 * @method int getCorrectOptionId()
 * @method string getId()
 * @method bool getIsAnonymous()
 * @method bool getIsClosed()
 * @method PollOption[] getOptions()
 * @method string getQuestion()
 * @method int getTotalVoterCount()
 * @method string getType()
 * @method bool isAllowsMultipleAnswers()
 * @method bool isCorrectOptionId()
 * @method bool isId()
 * @method bool isIsAnonymous()
 * @method bool isIsClosed()
 * @method bool isOptions()
 * @method bool isQuestion()
 * @method bool isTotalVoterCount()
 * @method bool isType()
 * @method $this setAllowsMultipleAnswers(bool $value)
 * @method $this setCorrectOptionId(int $value)
 * @method $this setId(string $value)
 * @method $this setIsAnonymous(bool $value)
 * @method $this setIsClosed(bool $value)
 * @method $this setOptions(PollOption[] $value)
 * @method $this setQuestion(string $value)
 * @method $this setTotalVoterCount(int $value)
 * @method $this setType(string $value)
 * @method $this unsetAllowsMultipleAnswers()
 * @method $this unsetCorrectOptionId()
 * @method $this unsetId()
 * @method $this unsetIsAnonymous()
 * @method $this unsetIsClosed()
 * @method $this unsetOptions()
 * @method $this unsetQuestion()
 * @method $this unsetTotalVoterCount()
 * @method $this unsetType()
 *
 * @property bool $allows_multiple_answers
 * @property int $correct_option_id
 * @property string $id
 * @property bool $is_anonymous
 * @property bool $is_closed
 * @property PollOption[] $options
 * @property string $question
 * @property int $total_voter_count
 * @property string $type
 */
class Poll extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id'                      => 'string',
        'question'                => 'string',
        'options'                 => 'PollOption[]',
        'total_voter_count'       => 'int',
        'is_closed'               => 'bool',
        'is_anonymous'            => 'bool',
        'type'                    => 'string',
        'allows_multiple_answers' => 'bool',
        'correct_option_id'       => 'int'
    ];
}