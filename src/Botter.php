<?php
namespace ffb255\Botter;

use ffb255\Botter\Conversations\Conversation;
use ffb255\Botter\Interfaces\CacheInterface;
use ffb255\Botter\Updates\Update;
use ffb255\Botter\Requests\RequestBuilder;
use ffb255\Botter\Interfaces\HttpInterface;
use ffb255\Botter\Traits\ReqestProviderTraits;
use ffb255\Botter\Traits\StorageProviderTrait;

class Botter
{
    use StorageProviderTrait,
        ReqestProviderTraits;

    /**
     * Incoming Update
     * @var Updates\Update
     */
    protected $update;

    /**
     * @var Interfaces\HttpInterface
     */
    protected $httpClient;

    /**
     * @var Interfaces\CacheInterface
     */
    protected $storage;

    /** @var string */
    protected $chatID;

    /** @var array */
    private $additionalParameter = [];

    /**
     * Botter constructor.
     * 
     * @param Updates\Update $update
     * @param Interfaces\HttpInterface $httpClient
     * @param Interfaces\CacheInterface $storage
     */
    public function __construct(Update $update, HttpInterface $httpClient, CacheInterface $storage)
    {
        $this->update = $update;
        $this->httpClient = $httpClient;
        $this->storage = $storage;
    }

    /**
     * Return an instance of update (of current request)
     *
     * @return Updates\Update
     */
    public function getUpdate()
    {
        return $this->update;
    }

    /**
     * Return an instance of RequestBuidler()
     * Request Builder help you to make an HTTP requests to telegam servers
     *
     * @return Requests\RequestBuilder
     */
    public function buildRequest($method)
    {
        $requestBuilder = new RequestBuilder($this->httpClient, $method, $this->additionalParameter);
        $this->additionalParameter = [];
        return $requestBuilder;
    }

    /**
     * Return current conversation name
     *
     * @return string
     */
    public function getCurrentCoversation()
    {
        return $this->conversationStorage()->get('active');
    }

    /**
     * @return boolean
     */
    public function isOnConversation()
    {
        $activeConversation = $this->getCurrentCoversation();
        return (is_null($activeConversation) || $activeConversation == '') ? false : true;
    }

    /**
     * Starts a new Conversation with user
     * By default, start() is first step in conversation
     *
     * @param Conversations\Conversation $conversation
     * @param string $startFromMethod Conversation first step (default first step is start)
     * @return void
     */
    public function startConversation(Conversation $conversation, $startFromMethod='start')
    {
        $this->conversationStorage()->save('active', get_class($conversation));
        $this->conversationStorage()->save('nextMethod', $startFromMethod);
        $this->listen();
    }

    /**
     * Add additional parameters to current request
     *
     * @param array $data
     * @return void
     */
    private function addAdditionalParameter($data)
    {
        $this->additionalParameter = array_merge($this->additionalParameter, $data);
    }

    /**
     * Try to match conversation (if uesr is in conversation)
     *
     * @return void
     */
    public function listen()
    {
        if($this->isOnConversation()){
            $conversation = $this->getCurrentCoversation();
            $conversation = new $conversation();
            $conversation->setup($this);

            $nextMethod = $this->conversationStorage()->get('nextMethod');
            $conversation->$nextMethod();
            exit();
        }
    }
}
