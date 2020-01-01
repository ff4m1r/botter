<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * ChatPhoto.
 *
 * @method string getBigFileId()
 * @method string getBigFileUniqueId()
 * @method string getSmallFileId()
 * @method string getSmallFileUniqueId()
 * @method bool isBigFileId()
 * @method bool isBigFileUniqueId()
 * @method bool isSmallFileId()
 * @method bool isSmallFileUniqueId()
 * @method $this setBigFileId(string $value)
 * @method $this setBigFileUniqueId(string $value)
 * @method $this setSmallFileId(string $value)
 * @method $this setSmallFileUniqueId(string $value)
 * @method $this unsetBigFileId()
 * @method $this unsetBigFileUniqueId()
 * @method $this unsetSmallFileId()
 * @method $this unsetSmallFileUniqueId()
 *
 * @property string $big_file_id
 * @property string $big_file_unique_id
 * @property string $small_file_id
 * @property string $small_file_unique_id
 */
class ChatPhoto extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'small_file_unique_id' => 'string',
        'big_file_unique_id'   => 'string',
        'small_file_id'        => 'string',
        'big_file_id'          => 'string',
    ];
}