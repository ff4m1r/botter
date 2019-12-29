<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Sticker.
 *
 * @method string getEmoji()
 * @method string getFileId()
 * @method int getFileSize()
 * @method int getHeight()
 * @method bool getIsAnimated()
 * @method MaskPosition getMaskPosition()
 * @method string getSetName()
 * @method PhotoSize getThumb()
 * @method int getWidth()
 * @method bool isEmoji()
 * @method bool isFileId()
 * @method bool isFileSize()
 * @method bool isHeight()
 * @method bool isIsAnimated()
 * @method bool isMaskPosition()
 * @method bool isSetName()
 * @method bool isThumb()
 * @method bool isWidth()
 * @method $this setEmoji(string $value)
 * @method $this setFileId(string $value)
 * @method $this setFileSize(int $value)
 * @method $this setHeight(int $value)
 * @method $this setIsAnimated(bool $value)
 * @method $this setMaskPosition(MaskPosition $value)
 * @method $this setSetName(string $value)
 * @method $this setThumb(PhotoSize $value)
 * @method $this setWidth(int $value)
 * @method $this unsetEmoji()
 * @method $this unsetFileId()
 * @method $this unsetFileSize()
 * @method $this unsetHeight()
 * @method $this unsetIsAnimated()
 * @method $this unsetMaskPosition()
 * @method $this unsetSetName()
 * @method $this unsetThumb()
 * @method $this unsetWidth()
 *
 * @property string $emoji
 * @property string $file_id
 * @property int $file_size
 * @property int $height
 * @property bool $is_animated
 * @property MaskPosition $mask_position
 * @property string $set_name
 * @property PhotoSize $thumb
 * @property int $width
 */
class Sticker extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'file_id'       => 'string',
        'width'         => 'int',
        'height'        => 'int',
        'is_animated'   => 'bool',
        'thumb'         => 'PhotoSize',
        'emoji'         => 'string',
        'set_name'      => 'string',
        'mask_position' => 'MaskPosition',
        'file_size'     => 'int',
    ];
}