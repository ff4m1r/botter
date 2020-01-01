<?php
namespace ffb255\Botter\Requests\Responses;

use ffb255\Botter\Botter;

class Response {
    /**
     * @var \ffb255\Botter\Botter
     */
    protected $botter;

    public function __construct(Botter $botter)
    {
        $this->botter = $botter;
    }
}