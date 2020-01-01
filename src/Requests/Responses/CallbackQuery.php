<?php
namespace ffb255\Botter\Requests\Responses;

class CallbackQuery extends Response{
    public function answer($message = '')
    {
        $this->botter->buildRequest('answerCallbackQuery')
            ->text($message)
            ->send();
    }
}