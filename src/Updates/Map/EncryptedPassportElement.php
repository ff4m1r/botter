<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * EncryptedPassportElement.
 *
 * @method string getData()
 * @method string getEmail()
 * @method PassportFile[] getFiles()
 * @method PassportFile getFrontSide()
 * @method string getHash()
 * @method string getPhoneNumber()
 * @method PassportFile getReverseSide()
 * @method PassportFile getSelfie()
 * @method PassportFile[] getTranslation()
 * @method string getType()
 * @method bool isData()
 * @method bool isEmail()
 * @method bool isFiles()
 * @method bool isFrontSide()
 * @method bool isHash()
 * @method bool isPhoneNumber()
 * @method bool isReverseSide()
 * @method bool isSelfie()
 * @method bool isTranslation()
 * @method bool isType()
 * @method $this setData(string $value)
 * @method $this setEmail(string $value)
 * @method $this setFiles(PassportFile[] $value)
 * @method $this setFrontSide(PassportFile $value)
 * @method $this setHash(string $value)
 * @method $this setPhoneNumber(string $value)
 * @method $this setReverseSide(PassportFile $value)
 * @method $this setSelfie(PassportFile $value)
 * @method $this setTranslation(PassportFile[] $value)
 * @method $this setType(string $value)
 * @method $this unsetData()
 * @method $this unsetEmail()
 * @method $this unsetFiles()
 * @method $this unsetFrontSide()
 * @method $this unsetHash()
 * @method $this unsetPhoneNumber()
 * @method $this unsetReverseSide()
 * @method $this unsetSelfie()
 * @method $this unsetTranslation()
 * @method $this unsetType()
 *
 * @property string $data
 * @property string $email
 * @property PassportFile[] $files
 * @property PassportFile $front_side
 * @property string $hash
 * @property string $phone_number
 * @property PassportFile $reverse_side
 * @property PassportFile $selfie
 * @property PassportFile[] $translation
 * @property string $type
 */
class EncryptedPassportElement extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'type'         => 'string',
        'data'         => 'string',
        'phone_number' => 'string',
        'email'        => 'string',
        'files'        => 'PassportFile[]',
        'front_side'   => 'PassportFile',
        'reverse_side' => 'PassportFile',
        'selfie'       => 'PassportFile',
        'translation'  => 'PassportFile[]',
        'hash'         => 'string',
    ];
}