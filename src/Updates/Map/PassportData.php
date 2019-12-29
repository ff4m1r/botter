<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PassportData.
 *
 * @method EncryptedCredentials getCredentials()
 * @method EncryptedPassportElement[] getData()
 * @method bool isCredentials()
 * @method bool isData()
 * @method $this setCredentials(EncryptedCredentials $value)
 * @method $this setData(EncryptedPassportElement[] $value)
 * @method $this unsetCredentials()
 * @method $this unsetData()
 *
 * @property EncryptedCredentials $credentials
 * @property EncryptedPassportElement[] $data
 */
class PassportData extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'data'        => 'EncryptedPassportElement[]',
        'credentials' => 'EncryptedCredentials',
    ];
}