<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PhotoSize.
 *
 * @method string getFileId()
 * @method int getFileSize()
 * @method int getHeight()
 * @method int getWidth()
 * @method bool isFileId()
 * @method bool isFileSize()
 * @method bool isHeight()
 * @method bool isWidth()
 * @method $this setFileId(string $value)
 * @method $this setFileSize(int $value)
 * @method $this setHeight(int $value)
 * @method $this setWidth(int $value)
 * @method $this unsetFileId()
 * @method $this unsetFileSize()
 * @method $this unsetHeight()
 * @method $this unsetWidth()
 *
 * @property string $file_id
 * @property int $file_size
 * @property int $height
 * @property int $width
 */
class PhotoSize extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_id'   => 'string',
        'width'     => 'int',
        'height'    => 'int',
        'file_size' => 'int',
    ];
}