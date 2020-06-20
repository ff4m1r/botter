<?php
namespace ffb255\Botter;

use BadMethodCallException;
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

    /** @var string */
    private $botName = null;

    /**
     * Botter constructor.
     * 
     * @param Updates\Update $update
     * @param Interfaces\HttpInterface $httpClient
     * @param Interfaces\CacheInterface $storage
     */
    public function __construct(Update $update, HttpInterface $httpClient, CacheInterface $storage, string $botName)
    {
        $this->update = $update;
        $this->httpClient = $httpClient;
        $this->storage = $storage;
        $this->botName = $botName;
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
     * Return an instance of RequestBuilder()
     * Request Builder help you to make an HTTP requests to telegram servers
     *
     * @param $method
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
    public function getCurrentConversation()
    {
        return $this->conversationStorage()->get('active');
    }

    /**
     * @return boolean
     */
    public function isOnConversation()
    {
        $activeConversation = $this->getCurrentConversation();
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
     * Try to match conversation (if user is in conversation)
     *
     * @return void
     * @throws BadMethodCallException
     */
    public function listen()
    {
        if($this->isOnConversation()){
            $conversation = $this->getCurrentConversation();
            $conversation = new $conversation();
            $conversation->setup($this);

            $nextMethod = $this->conversationStorage()->get('nextMethod');
            if ($nextMethod == "") {
                // Conversation has been finished
                return;
            } elseif (!method_exists($conversation, $nextMethod)) {
                $className = get_class($conversation);
                throw new BadMethodCallException("Method {$nextMethod} doesn't exists in {$className}");
            } else {
                $conversation->$nextMethod();
                exit();
            }
        }
    }
}
