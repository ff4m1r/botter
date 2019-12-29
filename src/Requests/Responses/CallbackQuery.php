<?php
namespace ffb255\Botter\Requests\Response;

class CallbackQuery extends Response{
    public function answer($message = '')
    {
        $this->botter->buildRequest('answerCallbackQuery')
            ->text($message)
            ->send();
    }
}