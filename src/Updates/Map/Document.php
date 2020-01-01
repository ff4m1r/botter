<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Document.
 *
 * @method string getFileId()
 * @method string getFileName()
 * @method int getFileSize()
 * @method string getFileUniqueId()
 * @method string getMimeType()
 * @method PhotoSize getThumb()
 * @method bool isFileId()
 * @method bool isFileName()
 * @method bool isFileSize()
 * @method bool isFileUniqueId()
 * @method bool isMimeType()
 * @method bool isThumb()
 * @method $this setFileId(string $value)
 * @method $this setFileName(string $value)
 * @method $this setFileSize(int $value)
 * @method $this setFileUniqueId(string $value)
 * @method $this setMimeType(string $value)
 * @method $this setThumb(PhotoSize $value)
 * @method $this unsetFileId()
 * @method $this unsetFileName()
 * @method $this unsetFileSize()
 * @method $this unsetFileUniqueId()
 * @method $this unsetMimeType()
 * @method $this unsetThumb()
 *
 * @property string $file_id
 * @property string $file_name
 * @property int $file_size
 * @property string $file_unique_id
 * @property string $mime_type
 * @property PhotoSize $thumb
 */
class Document extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_unique_id' => 'string',
        'file_id'        => 'string',
        'thumb'          => 'PhotoSize',
        'file_name'      => 'string',
        'mime_type'      => 'string',
        'file_size'      => 'int',
    ];
}