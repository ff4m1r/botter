<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Contact.
 *
 * @method string getFirstName()
 * @method string getLastName()
 * @method string getPhoneNumber()
 * @method int getUserId()
 * @method string getVcard()
 * @method bool isFirstName()
 * @method bool isLastName()
 * @method bool isPhoneNumber()
 * @method bool isUserId()
 * @method bool isVcard()
 * @method $this setFirstName(string $value)
 * @method $this setLastName(string $value)
 * @method $this setPhoneNumber(string $value)
 * @method $this setUserId(int $value)
 * @method $this setVcard(string $value)
 * @method $this unsetFirstName()
 * @method $this unsetLastName()
 * @method $this unsetPhoneNumber()
 * @method $this unsetUserId()
 * @method $this unsetVcard()
 *
 * @property string $first_name
 * @property string $last_name
 * @property string $phone_number
 * @property int $user_id
 * @property string $vcard
 */
class Contact extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'phone_number'  => 'string',
        'first_name'    => 'string',
        'last_name'     => 'string',
        'user_id'       => 'int',
        'vcard'         => 'string',
    ];
}