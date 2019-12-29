<?php
namespace ffb255\Botter\Updates;

use LazyJsonMapper\LazyJsonMapper;

/**
 * Update.
 *
 * @method Map\CallbackQuery getCallbackQuery()
 * @method Map\Message getChannelPost()
 * @method Map\ChosenInlineResult getChosenInlineResult()
 * @method Map\Message getEditedChannelPost()
 * @method Map\Message getEditedMessage()
 * @method Map\InlineQuery getInlineQuery()
 * @method Map\Message getMessage()
 * @method Map\Poll getPoll()
 * @method Map\PreCheckoutQuery getPreCheckoutQuery()
 * @method Map\ShippingQuery getShippingQuery()
 * @method int getUpdateId()
 * @method bool isCallbackQuery()
 * @method bool isChannelPost()
 * @method bool isChosenInlineResult()
 * @method bool isEditedChannelPost()
 * @method bool isEditedMessage()
 * @method bool isInlineQuery()
 * @method bool isMessage()
 * @method bool isPoll()
 * @method bool isPreCheckoutQuery()
 * @method bool isShippingQuery()
 * @method bool isUpdateId()
 * @method $this setCallbackQuery(Map\CallbackQuery $value)
 * @method $this setChannelPost(Map\Message $value)
 * @method $this setChosenInlineResult(Map\ChosenInlineResult $value)
 * @method $this setEditedChannelPost(Map\Message $value)
 * @method $this setEditedMessage(Map\Message $value)
 * @method $this setInlineQuery(Map\InlineQuery $value)
 * @method $this setMessage(Map\Message $value)
 * @method $this setPoll(Map\Poll $value)
 * @method $this setPreCheckoutQuery(Map\PreCheckoutQuery $value)
 * @method $this setShippingQuery(Map\ShippingQuery $value)
 * @method $this setUpdateId(int $value)
 * @method $this unsetCallbackQuery()
 * @method $this unsetChannelPost()
 * @method $this unsetChosenInlineResult()
 * @method $this unsetEditedChannelPost()
 * @method $this unsetEditedMessage()
 * @method $this unsetInlineQuery()
 * @method $this unsetMessage()
 * @method $this unsetPoll()
 * @method $this unsetPreCheckoutQuery()
 * @method $this unsetShippingQuery()
 * @method $this unsetUpdateId()
 *
 * @property Map\CallbackQuery $callback_query
 * @property Map\Message $channel_post
 * @property Map\ChosenInlineResult $chosen_inline_result
 * @property Map\Message $edited_channel_post
 * @property Map\Message $edited_message
 * @property Map\InlineQuery $inline_query
 * @property Map\Message $message
 * @property Map\Poll $poll
 * @property Map\PreCheckoutQuery $pre_checkout_query
 * @property Map\ShippingQuery $shipping_query
 * @property int $update_id
 */
class Update extends LazyJsonMapper
{
    const JSON_PROPERTY_MAP = [
        'update_id'             => 'int',
        'message'               => 'Map\Message',
        'edited_message'        => 'Map\Message',
        'channel_post'          => 'Map\Message',
        'edited_channel_post'   => 'Map\Message',
        'inline_query'          => 'Map\InlineQuery',
        'chosen_inline_result'  => 'Map\ChosenInlineResult',
        'callback_query'        => 'Map\CallbackQuery',
        'shipping_query'        => 'Map\ShippingQuery',
        'pre_checkout_query'    => 'Map\PreCheckoutQuery',
        'poll'                  => 'Map\Poll',
    ];
}