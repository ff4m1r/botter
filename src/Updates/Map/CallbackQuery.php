<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * CallbackQuery.
 *
 * @method string getChatInstance()
 * @method string getData()
 * @method User getFrom()
 * @method string getGameShortName()
 * @method string getId()
 * @method string getInlineMessageId()
 * @method Message getMessage()
 * @method bool isChatInstance()
 * @method bool isData()
 * @method bool isFrom()
 * @method bool isGameShortName()
 * @method bool isId()
 * @method bool isInlineMessageId()
 * @method bool isMessage()
 * @method $this setChatInstance(string $value)
 * @method $this setData(string $value)
 * @method $this setFrom(User $value)
 * @method $this setGameShortName(string $value)
 * @method $this setId(string $value)
 * @method $this setInlineMessageId(string $value)
 * @method $this setMessage(Message $value)
 * @method $this unsetChatInstance()
 * @method $this unsetData()
 * @method $this unsetFrom()
 * @method $this unsetGameShortName()
 * @method $this unsetId()
 * @method $this unsetInlineMessageId()
 * @method $this unsetMessage()
 *
 * @property string $chat_instance
 * @property string $data
 * @property User $from
 * @property string $game_short_name
 * @property string $id
 * @property string $inline_message_id
 * @property Message $message
 */
class CallbackQuery extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id'                => 'string',
        'from'              => 'User',
        'message'           => 'Message',
        'inline_message_id' => 'string',
        'chat_instance'     => 'string',
        'data'              => 'string',
        'game_short_name'   => 'string',
    ];
}