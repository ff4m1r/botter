<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Chat.
 *
 * @method bool getCanSetStickerSet()
 * @method string getDescription()
 * @method string getFirstName()
 * @method int getId()
 * @method string getInviteLink()
 * @method string getLastName()
 * @method ChatPermissions getPermissions()
 * @method ChatPhoto getPhoto()
 * @method Message getPinnedMessage()
 * @method string getStickerSetName()
 * @method string getTitle()
 * @method string getType()
 * @method string getUsername()
 * @method bool isCanSetStickerSet()
 * @method bool isDescription()
 * @method bool isFirstName()
 * @method bool isId()
 * @method bool isInviteLink()
 * @method bool isLastName()
 * @method bool isPermissions()
 * @method bool isPhoto()
 * @method bool isPinnedMessage()
 * @method bool isStickerSetName()
 * @method bool isTitle()
 * @method bool isType()
 * @method bool isUsername()
 * @method $this setCanSetStickerSet(bool $value)
 * @method $this setDescription(string $value)
 * @method $this setFirstName(string $value)
 * @method $this setId(int $value)
 * @method $this setInviteLink(string $value)
 * @method $this setLastName(string $value)
 * @method $this setPermissions(ChatPermissions $value)
 * @method $this setPhoto(ChatPhoto $value)
 * @method $this setPinnedMessage(Message $value)
 * @method $this setStickerSetName(string $value)
 * @method $this setTitle(string $value)
 * @method $this setType(string $value)
 * @method $this setUsername(string $value)
 * @method $this unsetCanSetStickerSet()
 * @method $this unsetDescription()
 * @method $this unsetFirstName()
 * @method $this unsetId()
 * @method $this unsetInviteLink()
 * @method $this unsetLastName()
 * @method $this unsetPermissions()
 * @method $this unsetPhoto()
 * @method $this unsetPinnedMessage()
 * @method $this unsetStickerSetName()
 * @method $this unsetTitle()
 * @method $this unsetType()
 * @method $this unsetUsername()
 *
 * @property bool $can_set_sticker_set
 * @property string $description
 * @property string $first_name
 * @property int $id
 * @property string $invite_link
 * @property string $last_name
 * @property ChatPermissions $permissions
 * @property ChatPhoto $photo
 * @property Message $pinned_message
 * @property string $sticker_set_name
 * @property string $title
 * @property string $type
 * @property string $username
 */
class Chat extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'id'                    => 'int',
        'type'                  => 'string',
        'title'                 => 'string',
        'username'              => 'string',
        'first_name'            => 'string',
        'last_name'             => 'string',
        'photo'                 => 'ChatPhoto',
        'description'           => 'string',
        'invite_link'           => 'string',
        'pinned_message'        => 'Message',
        'permissions'           => 'ChatPermissions',
        'sticker_set_name'      => 'string',
        'can_set_sticker_set'   => 'bool',
    ];
}