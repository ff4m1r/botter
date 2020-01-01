<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PassportFile.
 *
 * @method int getFileDate()
 * @method string getFileId()
 * @method int getFileSize()
 * @method string getFileUniqueId()
 * @method bool isFileDate()
 * @method bool isFileId()
 * @method bool isFileSize()
 * @method bool isFileUniqueId()
 * @method $this setFileDate(int $value)
 * @method $this setFileId(string $value)
 * @method $this setFileSize(int $value)
 * @method $this setFileUniqueId(string $value)
 * @method $this unsetFileDate()
 * @method $this unsetFileId()
 * @method $this unsetFileSize()
 * @method $this unsetFileUniqueId()
 *
 * @property int $file_date
 * @property string $file_id
 * @property int $file_size
 * @property string $file_unique_id
 */
class PassportFile extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_unique_id' => 'string',
        'file_id'        => 'string',
        'file_size'      => 'int',
        'file_date'      => 'int',
    ];
}