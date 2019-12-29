<?php
namespace ffb255\Botter\Updates\Map;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Message.
 *
 * @method Animation getAnimation()
 * @method Audio getAudio()
 * @method string getAuthorSignature()
 * @method string getCaption()
 * @method MessageEntity[] getCaptionEntities()
 * @method bool getChannelChatCreated()
 * @method Chat getChat()
 * @method string getConnectedWebsite()
 * @method Contact getContact()
 * @method int getDate()
 * @method bool getDeleteChatPhoto()
 * @method Document getDocument()
 * @method int getEditDate()
 * @method MessageEntity[] getEntities()
 * @method int getForwardDate()
 * @method User getForwardFrom()
 * @method Chat getForwardFromChat()
 * @method int getForwardFromMessageId()
 * @method string getForwardSenderName()
 * @method string getForwardSignature()
 * @method User getFrom()
 * @method Game getGame()
 * @method bool getGroupChatCreated()
 * @method Invoice getInvoice()
 * @method User getLeftChatMember()
 * @method Location getLocation()
 * @method string getMediaGroupId()
 * @method string getMessageId()
 * @method int getMigrateFromChatId()
 * @method int getMigrateToChatId()
 * @method User[] getNewChatMembers()
 * @method PhotoSize[] getNewChatPhoto()
 * @method string getNewChatTitle()
 * @method PassportData getPassportData()
 * @method PhotoSize[] getPhoto()
 * @method Message getPinnedMessage()
 * @method Poll getPoll()
 * @method InlineKeyboardMarkup getReplyMarkup()
 * @method Message getReplyToMessage()
 * @method Sticker getSticker()
 * @method SuccessfulPayment getSuccessfulPayment()
 * @method bool getSupergroupChatCreated()
 * @method string getText()
 * @method Venue getVenue()
 * @method Video getVideo()
 * @method VideoNote getVideoNote()
 * @method Voice getVoice()
 * @method bool isAnimation()
 * @method bool isAudio()
 * @method bool isAuthorSignature()
 * @method bool isCaption()
 * @method bool isCaptionEntities()
 * @method bool isChannelChatCreated()
 * @method bool isChat()
 * @method bool isConnectedWebsite()
 * @method bool isContact()
 * @method bool isDate()
 * @method bool isDeleteChatPhoto()
 * @method bool isDocument()
 * @method bool isEditDate()
 * @method bool isEntities()
 * @method bool isForwardDate()
 * @method bool isForwardFrom()
 * @method bool isForwardFromChat()
 * @method bool isForwardFromMessageId()
 * @method bool isForwardSenderName()
 * @method bool isForwardSignature()
 * @method bool isFrom()
 * @method bool isGame()
 * @method bool isGroupChatCreated()
 * @method bool isInvoice()
 * @method bool isLeftChatMember()
 * @method bool isLocation()
 * @method bool isMediaGroupId()
 * @method bool isMessageId()
 * @method bool isMigrateFromChatId()
 * @method bool isMigrateToChatId()
 * @method bool isNewChatMembers()
 * @method bool isNewChatPhoto()
 * @method bool isNewChatTitle()
 * @method bool isPassportData()
 * @method bool isPhoto()
 * @method bool isPinnedMessage()
 * @method bool isPoll()
 * @method bool isReplyMarkup()
 * @method bool isReplyToMessage()
 * @method bool isSticker()
 * @method bool isSuccessfulPayment()
 * @method bool isSupergroupChatCreated()
 * @method bool isText()
 * @method bool isVenue()
 * @method bool isVideo()
 * @method bool isVideoNote()
 * @method bool isVoice()
 * @method $this setAnimation(Animation $value)
 * @method $this setAudio(Audio $value)
 * @method $this setAuthorSignature(string $value)
 * @method $this setCaption(string $value)
 * @method $this setCaptionEntities(MessageEntity[] $value)
 * @method $this setChannelChatCreated(bool $value)
 * @method $this setChat(Chat $value)
 * @method $this setConnectedWebsite(string $value)
 * @method $this setContact(Contact $value)
 * @method $this setDate(int $value)
 * @method $this setDeleteChatPhoto(bool $value)
 * @method $this setDocument(Document $value)
 * @method $this setEditDate(int $value)
 * @method $this setEntities(MessageEntity[] $value)
 * @method $this setForwardDate(int $value)
 * @method $this setForwardFrom(User $value)
 * @method $this setForwardFromChat(Chat $value)
 * @method $this setForwardFromMessageId(int $value)
 * @method $this setForwardSenderName(string $value)
 * @method $this setForwardSignature(string $value)
 * @method $this setFrom(User $value)
 * @method $this setGame(Game $value)
 * @method $this setGroupChatCreated(bool $value)
 * @method $this setInvoice(Invoice $value)
 * @method $this setLeftChatMember(User $value)
 * @method $this setLocation(Location $value)
 * @method $this setMediaGroupId(string $value)
 * @method $this setMessageId(string $value)
 * @method $this setMigrateFromChatId(int $value)
 * @method $this setMigrateToChatId(int $value)
 * @method $this setNewChatMembers(User[] $value)
 * @method $this setNewChatPhoto(PhotoSize[] $value)
 * @method $this setNewChatTitle(string $value)
 * @method $this setPassportData(PassportData $value)
 * @method $this setPhoto(PhotoSize[] $value)
 * @method $this setPinnedMessage(Message $value)
 * @method $this setPoll(Poll $value)
 * @method $this setReplyMarkup(InlineKeyboardMarkup $value)
 * @method $this setReplyToMessage(Message $value)
 * @method $this setSticker(Sticker $value)
 * @method $this setSuccessfulPayment(SuccessfulPayment $value)
 * @method $this setSupergroupChatCreated(bool $value)
 * @method $this setText(string $value)
 * @method $this setVenue(Venue $value)
 * @method $this setVideo(Video $value)
 * @method $this setVideoNote(VideoNote $value)
 * @method $this setVoice(Voice $value)
 * @method $this unsetAnimation()
 * @method $this unsetAudio()
 * @method $this unsetAuthorSignature()
 * @method $this unsetCaption()
 * @method $this unsetCaptionEntities()
 * @method $this unsetChannelChatCreated()
 * @method $this unsetChat()
 * @method $this unsetConnectedWebsite()
 * @method $this unsetContact()
 * @method $this unsetDate()
 * @method $this unsetDeleteChatPhoto()
 * @method $this unsetDocument()
 * @method $this unsetEditDate()
 * @method $this unsetEntities()
 * @method $this unsetForwardDate()
 * @method $this unsetForwardFrom()
 * @method $this unsetForwardFromChat()
 * @method $this unsetForwardFromMessageId()
 * @method $this unsetForwardSenderName()
 * @method $this unsetForwardSignature()
 * @method $this unsetFrom()
 * @method $this unsetGame()
 * @method $this unsetGroupChatCreated()
 * @method $this unsetInvoice()
 * @method $this unsetLeftChatMember()
 * @method $this unsetLocation()
 * @method $this unsetMediaGroupId()
 * @method $this unsetMessageId()
 * @method $this unsetMigrateFromChatId()
 * @method $this unsetMigrateToChatId()
 * @method $this unsetNewChatMembers()
 * @method $this unsetNewChatPhoto()
 * @method $this unsetNewChatTitle()
 * @method $this unsetPassportData()
 * @method $this unsetPhoto()
 * @method $this unsetPinnedMessage()
 * @method $this unsetPoll()
 * @method $this unsetReplyMarkup()
 * @method $this unsetReplyToMessage()
 * @method $this unsetSticker()
 * @method $this unsetSuccessfulPayment()
 * @method $this unsetSupergroupChatCreated()
 * @method $this unsetText()
 * @method $this unsetVenue()
 * @method $this unsetVideo()
 * @method $this unsetVideoNote()
 * @method $this unsetVoice()
 *
 * @property Animation $animation
 * @property Audio $audio
 * @property string $author_signature
 * @property string $caption
 * @property MessageEntity[] $caption_entities
 * @property bool $channel_chat_created
 * @property Chat $chat
 * @property string $connected_website
 * @property Contact $contact
 * @property int $date
 * @property bool $delete_chat_photo
 * @property Document $document
 * @property int $edit_date
 * @property MessageEntity[] $entities
 * @property int $forward_date
 * @property User $forward_from
 * @property Chat $forward_from_chat
 * @property int $forward_from_message_id
 * @property string $forward_sender_name
 * @property string $forward_signature
 * @property User $from
 * @property Game $game
 * @property bool $group_chat_created
 * @property Invoice $invoice
 * @property User $left_chat_member
 * @property Location $location
 * @property string $media_group_id
 * @property string $message_id
 * @property int $migrate_from_chat_id
 * @property int $migrate_to_chat_id
 * @property User[] $new_chat_members
 * @property PhotoSize[] $new_chat_photo
 * @property string $new_chat_title
 * @property PassportData $passport_data
 * @property PhotoSize[] $photo
 * @property Message $pinned_message
 * @property Poll $poll
 * @property InlineKeyboardMarkup $reply_markup
 * @property Message $reply_to_message
 * @property Sticker $sticker
 * @property SuccessfulPayment $successful_payment
 * @property bool $supergroup_chat_created
 * @property string $text
 * @property Venue $venue
 * @property Video $video
 * @property VideoNote $video_note
 * @property Voice $voice
 */
class Message extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'message_id'                => 'string',
        'from'                      => 'User',
        'date'                      => 'int',
        'chat'                      => 'Chat',
        'forward_from'              => 'User',
        'forward_from_chat'         => 'Chat',
        'forward_from_message_id'   => 'int',
        'forward_signature'         => 'string',
        'forward_sender_name'       => 'string',
        'forward_date'              => 'int',
        'reply_to_message'          => 'Message',
        'edit_date'                 => 'int',
        'media_group_id'            => 'string',
        'author_signature'          => 'string',
        'text'                      => 'string',
        'entities'                  => 'MessageEntity[]',
        'caption_entities'          => 'MessageEntity[]',
        'audio'                     => 'Audio',
        'document'                  => 'Document',
        'animation'                 => 'Animation',
        'game'                      => 'Game',
        'photo'                     => 'PhotoSize[]',
        'sticker'                   => 'Sticker',
        'video'                     => 'Video',
        'voice'                     => 'Voice',
        'video_note'                => 'VideoNote',
        'caption'                   => 'string',
        'contact'                   => 'Contact',
        'location'                  => 'Location',
        'venue'                     => 'Venue',
        'poll'                      => 'Poll',
        'new_chat_members'          => 'User[]',
        'left_chat_member'          => 'User',
        'new_chat_title'            => 'string',
        'new_chat_photo'            => 'PhotoSize[]',
        'delete_chat_photo'         => 'bool',
        'group_chat_created'        => 'bool',
        'supergroup_chat_created'   => 'bool',
        'channel_chat_created'      => 'bool',
        'migrate_to_chat_id'        => 'int',
        'migrate_from_chat_id'      => 'int',
        'pinned_message'            => 'Message',
        'invoice'                   => 'Invoice',
        'successful_payment'        => 'SuccessfulPayment',
        'connected_website'         => 'string',
        'passport_data'             => 'PassportData',
        'reply_markup'              => 'InlineKeyboardMarkup',
    ];

    function getText(){
        $text = $this->_getProperty('text');
        $numberPersian = [
            '۰'=>'0',
            '۱'=>'1',
            '۲'=>'2',
            '۳'=>'3',
            '۴'=>'4',
            '۵'=>'5',
            '۶'=>'6',
            '۷'=>'7',
            '۸'=>'8',
            '۹'=>'9',
        ];
        $numberArabic = [
            '٠'=>'0',
            '١'=>'1',
            '٢'=>'2',
            '٣'=>'3',
            '٤'=>'4',
            '٥'=>'5',
            '٦'=>'6',
            '٧'=>'7',
            '٨'=>'8',
            '٩'=>'9',
        ];
        $text = strtr($text, $numberPersian);
        $text = strtr($text, $numberArabic);
        return $text;
    }
}