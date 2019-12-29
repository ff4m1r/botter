<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * User.
 *
 * @method string getFirstName()
 * @method int getId()
 * @method bool getIsBot()
 * @method string getLanguageCode()
 * @method string getLastName()
 * @method string getUsername()
 * @method bool isFirstName()
 * @method bool isId()
 * @method bool isIsBot()
 * @method bool isLanguageCode()
 * @method bool isLastName()
 * @method bool isUsername()
 * @method $this setFirstName(string $value)
 * @method $this setId(int $value)
 * @method $this setIsBot(bool $value)
 * @method $this setLanguageCode(string $value)
 * @method $this setLastName(string $value)
 * @method $this setUsername(string $value)
 * @method $this unsetFirstName()
 * @method $this unsetId()
 * @method $this unsetIsBot()
 * @method $this unsetLanguageCode()
 * @method $this unsetLastName()
 * @method $this unsetUsername()
 *
 * @property string $first_name
 * @property int $id
 * @property bool $is_bot
 * @property string $language_code
 * @property string $last_name
 * @property string $username
 */
class User extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id'            => 'int',
        'is_bot'        => 'bool',
        'first_name'    => 'string',
        'last_name'     => 'string',
        'username'      => 'string',
        'language_code' => 'string',
    ];
}