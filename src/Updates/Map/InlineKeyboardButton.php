<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * InlineKeyboardButton.
 *
 * @method string getCallbackData()
 * @method CallbackGame getCallbackGame()
 * @method LoginUrl getLoginUrl()
 * @method bool getPay()
 * @method string getSwitchInlineQuery()
 * @method string getSwitchInlineQueryCurrentChat()
 * @method string getText()
 * @method string getUrl()
 * @method bool isCallbackData()
 * @method bool isCallbackGame()
 * @method bool isLoginUrl()
 * @method bool isPay()
 * @method bool isSwitchInlineQuery()
 * @method bool isSwitchInlineQueryCurrentChat()
 * @method bool isText()
 * @method bool isUrl()
 * @method $this setCallbackData(string $value)
 * @method $this setCallbackGame(CallbackGame $value)
 * @method $this setLoginUrl(LoginUrl $value)
 * @method $this setPay(bool $value)
 * @method $this setSwitchInlineQuery(string $value)
 * @method $this setSwitchInlineQueryCurrentChat(string $value)
 * @method $this setText(string $value)
 * @method $this setUrl(string $value)
 * @method $this unsetCallbackData()
 * @method $this unsetCallbackGame()
 * @method $this unsetLoginUrl()
 * @method $this unsetPay()
 * @method $this unsetSwitchInlineQuery()
 * @method $this unsetSwitchInlineQueryCurrentChat()
 * @method $this unsetText()
 * @method $this unsetUrl()
 *
 * @property string $callback_data
 * @property CallbackGame $callback_game
 * @property LoginUrl $login_url
 * @property bool $pay
 * @property string $switch_inline_query
 * @property string $switch_inline_query_current_chat
 * @property string $text
 * @property string $url
 */
class InlineKeyboardButton extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'text'                             => 'string',
        'url'                              => 'string',
        'login_url'                        => 'LoginUrl',
        'callback_data'                    => 'string',
        'switch_inline_query'              => 'string',
        'switch_inline_query_current_chat' => 'string',
        'callback_game'                    => 'CallbackGame',
        'pay'                              => 'bool',
    ];
}