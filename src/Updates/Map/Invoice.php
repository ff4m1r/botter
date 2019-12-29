<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Invoice.
 *
 * @method string getCurrency()
 * @method string getDescription()
 * @method string getStartParameter()
 * @method string getTitle()
 * @method int getTotalAmount()
 * @method bool isCurrency()
 * @method bool isDescription()
 * @method bool isStartParameter()
 * @method bool isTitle()
 * @method bool isTotalAmount()
 * @method $this setCurrency(string $value)
 * @method $this setDescription(string $value)
 * @method $this setStartParameter(string $value)
 * @method $this setTitle(string $value)
 * @method $this setTotalAmount(int $value)
 * @method $this unsetCurrency()
 * @method $this unsetDescription()
 * @method $this unsetStartParameter()
 * @method $this unsetTitle()
 * @method $this unsetTotalAmount()
 *
 * @property string $currency
 * @property string $description
 * @property string $start_parameter
 * @property string $title
 * @property int $total_amount
 */
class Invoice extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'title'           => 'string',
        'description'     => 'string',
        'start_parameter' => 'string',
        'currency'        => 'string',
        'total_amount'    => 'int',
    ];
}