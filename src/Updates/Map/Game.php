<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Game.
 *
 * @method Animation getAnimation()
 * @method string getDescription()
 * @method PhotoSize[] getPhoto()
 * @method string getText()
 * @method MessageEntity[] getTextEntities()
 * @method string getTitle()
 * @method bool isAnimation()
 * @method bool isDescription()
 * @method bool isPhoto()
 * @method bool isText()
 * @method bool isTextEntities()
 * @method bool isTitle()
 * @method $this setAnimation(Animation $value)
 * @method $this setDescription(string $value)
 * @method $this setPhoto(PhotoSize[] $value)
 * @method $this setText(string $value)
 * @method $this setTextEntities(MessageEntity[] $value)
 * @method $this setTitle(string $value)
 * @method $this unsetAnimation()
 * @method $this unsetDescription()
 * @method $this unsetPhoto()
 * @method $this unsetText()
 * @method $this unsetTextEntities()
 * @method $this unsetTitle()
 *
 * @property Animation $animation
 * @property string $description
 * @property PhotoSize[] $photo
 * @property string $text
 * @property MessageEntity[] $text_entities
 * @property string $title
 */
class Game extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'title'         => 'string',
        'description'   => 'string',
        'photo'         => 'PhotoSize[]',
        'text'          => 'string',
        'text_entities' => 'MessageEntity[]',
        'animation'     => 'Animation',
    ];
}