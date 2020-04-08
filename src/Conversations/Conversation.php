<?php
namespace ffb255\Botter\Conversations;

use ffb255\Botter\Botter;
use ffb255\Botter\Requests\Responses\Answer;

class Conversation {
    /**
     * @var Botter
     */
    protected $botter;

    /**
     * @var Answer
     */
    protected $answer;

    /**
     * Initial conversations
     *
     * @param Botter $botter
     * @return $this
     */
    public function setup(Botter $botter)
    {
        $this->botter = $botter;
        $this->answer = new Answer($this->botter);
        return $this;
    }

    /**
     * Get user answer
     *
     * @return Answer
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * Ask a question from user
     *
     * @param string|callable $question
     * @return $this
     */
    public function ask($question)
    {
        if ($this->botter->conversationStorage()->get('askThen') != 'then') {
            is_callable($question) ? $question() : $this->say($question);
        }
        return $this;
    }

    /**
     * When using $this->ask(), you can chain this method
     * to check user answer (validation)
     *
     * @param callable $thenDo
     * @return Conversation
     */
    public function then(callable $thenDo)
    {
        if ($this->botter->conversationStorage()->get('askThen') == 'then') {
            $thenDo();
            return $this;
        } else{
            $this->botter->conversationStorage()->save('askThen', 'then');
        }
    }

    /**
     * Say something to user (sendMessage)
     *
     * @param string $message
     * @return $this
     */
    public function say($message)
    {
       $this->botter->say($message);
       return $this;
    }
    
    /**
     * Reply to user (sendMessage with reply)
     *
     * @param string $message
     * @return $this
     */
    public function reply($message)
    {
       $this->botter->reply($message);
       return $this;
    }

    /**
     * Set next step on conversation
     *
     * @param string $methodName
     * @return $this
     */
    public function next($methodName)
    {
        $this->clearThen();
        $this->botter->conversationStorage()->save('nextMethod', $methodName);
        return $this;
    }

    /**
     * Jump into specific step on conversation
     *
     * @param string $methodName
     * @return void
     */
    public function jumpTo($methodName)
    {
        $this->clearThen();
        $this->botter->conversationStorage()->save('nextMethod', $methodName);
        $this->$methodName();
    }

    /**
     * Finish current conversation
     *
     * @return void
     */
    public function finish()
    {
        $this->clearThen();
        $this->botter->conversationStorage()->delete('nextMethod');
        $this->botter->conversationStorage()->delete('active');
    }
    
    /**
     * Setter, used for cache system on conversation (call save() on cache storage)
     *
     * @param string $key
     * @param string $value
     */
    public function __set($key, $value)
    {
        $this->botter->conversationStorage()->save($key, $value);
    }

    /**
     * Getter, used for cache system on conversation (call get() on cache storage)
     *
     * @param [type] $key
     * @return string
     */
    public function __get($key)
    {
        return $this->botter->conversationStorage()->get($key);
    }

    /**
     * Undocumented function
     *
     * @return void
     */
    private function clearThen()
    {
        $this->botter->conversationStorage()->delete('askThen');
    }

}