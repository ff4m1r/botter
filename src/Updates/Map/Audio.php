<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Audio.
 *
 * @method int getDuration()
 * @method string getFileId()
 * @method int getFileSize()
 * @method string getFileUniqueId()
 * @method string getMimeType()
 * @method string getPerformer()
 * @method PhotoSize getThumb()
 * @method string getTitle()
 * @method bool isDuration()
 * @method bool isFileId()
 * @method bool isFileSize()
 * @method bool isFileUniqueId()
 * @method bool isMimeType()
 * @method bool isPerformer()
 * @method bool isThumb()
 * @method bool isTitle()
 * @method $this setDuration(int $value)
 * @method $this setFileId(string $value)
 * @method $this setFileSize(int $value)
 * @method $this setFileUniqueId(string $value)
 * @method $this setMimeType(string $value)
 * @method $this setPerformer(string $value)
 * @method $this setThumb(PhotoSize $value)
 * @method $this setTitle(string $value)
 * @method $this unsetDuration()
 * @method $this unsetFileId()
 * @method $this unsetFileSize()
 * @method $this unsetFileUniqueId()
 * @method $this unsetMimeType()
 * @method $this unsetPerformer()
 * @method $this unsetThumb()
 * @method $this unsetTitle()
 *
 * @property int $duration
 * @property string $file_id
 * @property int $file_size
 * @property string $file_unique_id
 * @property string $mime_type
 * @property string $performer
 * @property PhotoSize $thumb
 * @property string $title
 */
class Audio extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_unique_id' => 'string',
        'file_id'        => 'string',
        'duration'       => 'int',
        'performer'      => 'string',
        'title'          => 'string',
        'mime_type'      => 'string',
        'file_size'      => 'int',
        'thumb'          => 'PhotoSize',
    ];
}