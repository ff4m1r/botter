<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Voice.
 *
 * @method int getDuration()
 * @method string getFileId()
 * @method int getFileSize()
 * @method string getMimeType()
 * @method bool isDuration()
 * @method bool isFileId()
 * @method bool isFileSize()
 * @method bool isMimeType()
 * @method $this setDuration(int $value)
 * @method $this setFileId(string $value)
 * @method $this setFileSize(int $value)
 * @method $this setMimeType(string $value)
 * @method $this unsetDuration()
 * @method $this unsetFileId()
 * @method $this unsetFileSize()
 * @method $this unsetMimeType()
 *
 * @property int $duration
 * @property string $file_id
 * @property int $file_size
 * @property string $mime_type
 */
class Voice extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_id'   => 'string',
        'duration'  => 'int',
        'mime_type' => 'string',
        'file_size' => 'int',
    ];
}