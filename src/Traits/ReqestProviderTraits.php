<?php
namespace ffb255\Botter\Traits;

trait ReqestProviderTraits
{
    /**
     * Send a message to user
     *
     * @param string $text
     * @param string $parseMode
     * @return void
     */
    public function say($text, $parseMode = 'HTML')
    {
        $this->buildRequest('sendMessage')
            ->chat_id($this->getSenderId())
            ->text($text)
            ->parse_mode($parseMode)
            ->send();
    }

    /**
     * Send a message to user (+ reply to messaeg)
     *
     * @param string $text
     * @param string $parseMode
     * @return void
     */
    public function reply($text, $parseMode = 'HTML')
    {
        $this->buildRequest('sendMessage')
            ->chat_id($this->getSenderId())
            ->text($text)
            ->reply_to_message_id($this->getUpdate()->isMessage() ? $this->getUpdate()->getMessage()->getMessageId() : null)
            ->parse_mode($parseMode)
            ->send();
    }

    /**
     * Send typing action
     *
     * @return void
     */
    public function type()
    {
        $this->buildRequest('sendChatAction')
            ->chat_id($this->getSenderId())
            ->action('typing')
            ->send();
    }

    /**
     * Send typing action and wait for n seconds, then continue
     *
     * @param int $seconds
     * @return void
     */
    public function typeAndWait($seconds)
    {
        $this->type();
        sleep($seconds);
    }
    
    /**
     * Attach normal keyboard to message
     *
     * @param array $keyboard
     * @param boolean $resize_keyboard
     * @param boolean $one_time_keyboard
     * @param boolean $selective
     * @return $this
     */
    public function withKeyboard($keyboard, $resize_keyboard = true, $one_time_keyboard = false, $selective = false)
    {
        $this->addAdditionalParameter([
            'reply_markup' => json_encode(compact('keyboard', 'resize_keyboard', 'one_time_keyboard', 'selective')),
        ]);
        return $this;
    }
    
    /**
     * Attach inline keyboard to message
     *
     * @param array $inline_keyboard
     * @return $this
     */
    public function withInlineKeyboard($inline_keyboard)
    {
        $this->addAdditionalParameter([
            'reply_markup' => json_encode(compact('inline_keyboard')),
        ]);
        return $this;
    }

    /**
     * Telegram clients will remove the current custom keyboard and display the default letter-keyboard
     *  
     * @param boolean $selective Use this parameter if you want to remove the keyboard for specific users only
     * @return $this
     */
    public function removeKeyboard($selective = false)
    {
        $remove_keyboard = true;
        $this->addAdditionalParameter([
            'reply_markup' => json_encode(compact('remove_keyboard', 'selective')),
        ]);
        return $this;
    }

    /**
     * Upon receiving a message with this object, Telegram clients will display a reply interface to the user
     * (act as if the user has selected the bot‘s message and tapped ’Reply').
     *
     * @param boolean $selective
     * @return $this
     */
    public function withForceReply($selective = false)
    {
        $force_reply = true;
        $this->addAdditionalParameter([
            'reply_markup' => json_encode(compact('force_reply', 'selective')),
        ]);
        return $this;
    }

    /**
     * Get sender ID (user, chat or..)
     *
     * @return string
     */
    public function getSenderId()
    {
        $update = $this->getUpdate();
        if($update->isMessage()){
            return $update->getMessage()->getChat()->getId();
        } elseif($update->isChannelPost()){
            return $update->getChannelPost()->getChat()->getId();
        } elseif($update->isEditedChannelPost()){
            return $update->getEditedChannelPost()->getChat()->getId();
        } elseif($update->isEditedMessage()){
            return $update->getEditedMessage()->getChat()->getId();
        } elseif($update->isInlineQuery()){
            return $update->getInlineQuery()->getFrom()->getId();
        } elseif($update->isChosenInlineResult()){
            return $update->getChosenInlineResult()->getFrom()->getId();
        } elseif($update->isCallbackQuery()){
            return $update->getCallbackQuery()->getFrom()->getId();
        } elseif($update->isShippingQuery()){
            return $update->getShippingQuery()->getFrom()->getId();
        } elseif($update->isPreCheckoutQuery()){
            return $update->getPreCheckoutQuery()->getFrom()->getId();
        }
    }

    /**
     * Get user id (user in chat)
     *
     * @return string
     */
    public function getUserId()
    {
        $update = $this->getUpdate();
        if($update->isMessage()){
            return $update->getMessage()->getFrom()->getId();
        } elseif($update->isChannelPost()){
            return $update->getChannelPost()->getChat()->getId();
        } elseif($update->isEditedChannelPost()){
            return $update->getEditedChannelPost()->getChat()->getId();
        } elseif($update->isEditedMessage()){
            return $update->getEditedMessage()->getFrom()->getId();
        } elseif($update->isInlineQuery()){
            return $update->getInlineQuery()->getFrom()->getId();
        } elseif($update->isChosenInlineResult()){
            return $update->getChosenInlineResult()->getFrom()->getId();
        } elseif($update->isCallbackQuery()){
            return $update->getCallbackQuery()->getFrom()->getId();
        } elseif($update->isShippingQuery()){
            return $update->getShippingQuery()->getFrom()->getId();
        } elseif($update->isPreCheckoutQuery()){
            return $update->getPreCheckoutQuery()->getFrom()->getId();
        }
    }

}