<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * VideoNote.
 *
 * @method int getDuration()
 * @method string getFileId()
 * @method int getFileSize()
 * @method string getFileUniqueId()
 * @method int getLength()
 * @method PhotoSize getThumb()
 * @method bool isDuration()
 * @method bool isFileId()
 * @method bool isFileSize()
 * @method bool isFileUniqueId()
 * @method bool isLength()
 * @method bool isThumb()
 * @method $this setDuration(int $value)
 * @method $this setFileId(string $value)
 * @method $this setFileSize(int $value)
 * @method $this setFileUniqueId(string $value)
 * @method $this setLength(int $value)
 * @method $this setThumb(PhotoSize $value)
 * @method $this unsetDuration()
 * @method $this unsetFileId()
 * @method $this unsetFileSize()
 * @method $this unsetFileUniqueId()
 * @method $this unsetLength()
 * @method $this unsetThumb()
 *
 * @property int $duration
 * @property string $file_id
 * @property int $file_size
 * @property string $file_unique_id
 * @property int $length
 * @property PhotoSize $thumb
 */
class VideoNote extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_unique_id' => 'string',
        'file_id'        => 'string',
        'length'         => 'int',
        'duration'       => 'int',
        'thumb'          => 'PhotoSize',
        'file_size'      => 'int',
    ];
}