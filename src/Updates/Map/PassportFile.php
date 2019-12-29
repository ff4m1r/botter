<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * PassportFile.
 *
 * @method int getFileDate()
 * @method string getFileId()
 * @method int getFileSize()
 * @method bool isFileDate()
 * @method bool isFileId()
 * @method bool isFileSize()
 * @method $this setFileDate(int $value)
 * @method $this setFileId(string $value)
 * @method $this setFileSize(int $value)
 * @method $this unsetFileDate()
 * @method $this unsetFileId()
 * @method $this unsetFileSize()
 *
 * @property int $file_date
 * @property string $file_id
 * @property int $file_size
 */
class PassportFile extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_id'   => 'string',
        'file_size' => 'int',
        'file_date' => 'int',
    ];
}