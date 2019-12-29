<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * UserProfilePhotos.
 *
 * @method PhotoSize[][] getPhotos()
 * @method int getTotalCount()
 * @method bool isPhotos()
 * @method bool isTotalCount()
 * @method $this setPhotos(PhotoSize[][] $value)
 * @method $this setTotalCount(int $value)
 * @method $this unsetPhotos()
 * @method $this unsetTotalCount()
 *
 * @property PhotoSize[][] $photos
 * @property int $total_count
 */
class UserProfilePhotos extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'total_count' => 'int',
        'photos'      => 'PhotoSize[][]',
    ];
}