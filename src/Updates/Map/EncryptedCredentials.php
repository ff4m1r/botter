<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * EncryptedCredentials.
 *
 * @method string getData()
 * @method string getHash()
 * @method string getSecret()
 * @method bool isData()
 * @method bool isHash()
 * @method bool isSecret()
 * @method $this setData(string $value)
 * @method $this setHash(string $value)
 * @method $this setSecret(string $value)
 * @method $this unsetData()
 * @method $this unsetHash()
 * @method $this unsetSecret()
 *
 * @property string $data
 * @property string $hash
 * @property string $secret
 */
class EncryptedCredentials extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'data'   => 'string',
        'hash'   => 'string',
        'secret' => 'string',
    ];
}