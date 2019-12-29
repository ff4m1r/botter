<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * ChatPhoto.
 *
 * @method string getBigFileId()
 * @method string getSmallFileId()
 * @method bool isBigFileId()
 * @method bool isSmallFileId()
 * @method $this setBigFileId(string $value)
 * @method $this setSmallFileId(string $value)
 * @method $this unsetBigFileId()
 * @method $this unsetSmallFileId()
 *
 * @property string $big_file_id
 * @property string $small_file_id
 */
class ChatPhoto extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'small_file_id' => 'string',
        'big_file_id'   => 'string',
    ];
}