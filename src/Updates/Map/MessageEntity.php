<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * MessageEntity.
 *
 * @method int getLength()
 * @method int getOffset()
 * @method string getType()
 * @method string getUrl()
 * @method User getUser()
 * @method bool isLength()
 * @method bool isOffset()
 * @method bool isType()
 * @method bool isUrl()
 * @method bool isUser()
 * @method $this setLength(int $value)
 * @method $this setOffset(int $value)
 * @method $this setType(string $value)
 * @method $this setUrl(string $value)
 * @method $this setUser(User $value)
 * @method $this unsetLength()
 * @method $this unsetOffset()
 * @method $this unsetType()
 * @method $this unsetUrl()
 * @method $this unsetUser()
 *
 * @property int $length
 * @property int $offset
 * @property string $type
 * @property string $url
 * @property User $user
 */
class MessageEntity extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type'   => 'string',
        'offset' => 'int',
        'length' => 'int',
        'url'    => 'string',
        'user'   => 'User',
    ];
}