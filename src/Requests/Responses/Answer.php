<?php
namespace ffb255\Botter\Requests\Response;

class Answer extends Response {
    public function getText()
    {
        if(!$this->botter->getUpdate()->isMessage()){
            return;
        }
        return $this->botter->getUpdate()->getMessage()->isText() ? $this->botter->getUpdate()->getMessage()->getText() : false;
    }
}