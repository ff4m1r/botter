<?php
namespace ffb255\Botter\Traits;

use ffb255\Botter\Cache\Storage\Storage;

trait StorageProviderTrait
{
    /**
     * @return \ffb255\Botter\Cache\Storage\Storage
     */
    public function userStorage()
    {
        return (new Storage($this->storage))
            ->setPrefix('user_')
            ->setDefaultKey($this->getUserId());
    }
    
    /**
     * @return \ffb255\Botter\Cache\Storage\Storage
     */
    public function chatStorage()
    {
        return (new Storage($this->storage))
            ->setPrefix('chat_')
            ->setDefaultKey($this->getSenderId());
    }

    /**
     * @return \ffb255\Botter\Cache\Storage\Storage
     */
    public function globalStorage()
    {
        return (new Storage($this->storage))
            ->setPrefix('global_')
            ->setDefaultKey('gb');
    }

    /**
     * @return \ffb255\Botter\Cache\Storage\Storage
     */
    public function conversationStorage()
    {
        return (new Storage($this->storage))
            ->setPrefix('btcnv_')
            ->setDefaultKey($this->getUserId());
    }
}