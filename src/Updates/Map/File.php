<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * File.
 *
 * @method string getFileId()
 * @method string getFilePath()
 * @method int getFileSize()
 * @method string getFileUniqueId()
 * @method bool isFileId()
 * @method bool isFilePath()
 * @method bool isFileSize()
 * @method bool isFileUniqueId()
 * @method $this setFileId(string $value)
 * @method $this setFilePath(string $value)
 * @method $this setFileSize(int $value)
 * @method $this setFileUniqueId(string $value)
 * @method $this unsetFileId()
 * @method $this unsetFilePath()
 * @method $this unsetFileSize()
 * @method $this unsetFileUniqueId()
 *
 * @property string $file_id
 * @property string $file_path
 * @property int $file_size
 * @property string $file_unique_id
 */
class File extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_unique_id' => 'string',
        'file_id'        => 'string',
        'file_size'      => 'int',
        'file_path'      => 'string',
    ];
}