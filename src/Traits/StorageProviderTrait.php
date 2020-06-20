<?php
namespace ffb255\Botter\Traits;

use ffb255\Botter\Cache\Storage;

trait StorageProviderTrait
{
    /**
     * @return Storage
     */
    public function userStorage()
    {
        return (new Storage($this->storage))
            ->setBotName($this->botName)
            ->setPrefix('user_')
            ->setDefaultKey($this->getUserId());
    }
    
    /**
     * @return Storage
     */
    public function chatStorage()
    {
        return (new Storage($this->storage))
            ->setPrefix('chat_')
            ->setDefaultKey($this->getSenderId());
    }

    /**
     * @return Storage
     */
    public function globalStorage()
    {
        return (new Storage($this->storage))
            ->setBotName($this->botName)
            ->setPrefix('global_')
            ->setDefaultKey('gb');
    }

    /**
     * @return Storage
     */
    public function conversationStorage()
    {
        return (new Storage($this->storage))
            ->setBotName($this->botName)
            ->setPrefix('btcnv_')
            ->setDefaultKey($this->getUserId());
    }
}