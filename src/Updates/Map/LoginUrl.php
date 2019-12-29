<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * LoginUrl.
 *
 * @method string getBotUsername()
 * @method string getForwardText()
 * @method bool getRequestWriteAccess()
 * @method string getUrl()
 * @method bool isBotUsername()
 * @method bool isForwardText()
 * @method bool isRequestWriteAccess()
 * @method bool isUrl()
 * @method $this setBotUsername(string $value)
 * @method $this setForwardText(string $value)
 * @method $this setRequestWriteAccess(bool $value)
 * @method $this setUrl(string $value)
 * @method $this unsetBotUsername()
 * @method $this unsetForwardText()
 * @method $this unsetRequestWriteAccess()
 * @method $this unsetUrl()
 *
 * @property string $bot_username
 * @property string $forward_text
 * @property bool $request_write_access
 * @property string $url
 */
class LoginUrl extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'url'                  => 'string',
        'forward_text'         => 'string',
        'bot_username'         => 'string',
        'request_write_access' => 'bool',
    ];
}