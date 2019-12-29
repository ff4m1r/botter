<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * File.
 *
 * @method string getFileId()
 * @method string getFilePath()
 * @method int getFileSize()
 * @method bool isFileId()
 * @method bool isFilePath()
 * @method bool isFileSize()
 * @method $this setFileId(string $value)
 * @method $this setFilePath(string $value)
 * @method $this setFileSize(int $value)
 * @method $this unsetFileId()
 * @method $this unsetFilePath()
 * @method $this unsetFileSize()
 *
 * @property string $file_id
 * @property string $file_path
 * @property int $file_size
 */
class File extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_id'   => 'string',
        'file_size' => 'int',
        'file_path' => 'string',
    ];
}