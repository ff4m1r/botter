<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * MaskPosition.
 *
 * @method string getPoint()
 * @method float getScale()
 * @method float getXShift()
 * @method float getYShift()
 * @method bool isPoint()
 * @method bool isScale()
 * @method bool isXShift()
 * @method bool isYShift()
 * @method $this setPoint(string $value)
 * @method $this setScale(float $value)
 * @method $this setXShift(float $value)
 * @method $this setYShift(float $value)
 * @method $this unsetPoint()
 * @method $this unsetScale()
 * @method $this unsetXShift()
 * @method $this unsetYShift()
 *
 * @property string $point
 * @property float $scale
 * @property float $x_shift
 * @property float $y_shift
 */
class MaskPosition extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'point'   => 'string',
        'x_shift' => 'float',
        'y_shift' => 'float',
        'scale'   => 'float',
    ];
}