<?php
namespace ffb255\Botter\Keyboards;

class BaseButton {
    /**
     * Class constructor
     * Return an instance of BaseButton
     *
     * @param string $text
     * @return $this
     */
    public function __construct($text)
    {
        $this->buttonData['text'] = $text;
        return $this;
    }

    /**
     * Add a button to keyboard
     *
     * @return array
     */
    public function add()
    {
        return $this->buttonData;
    }
    
}
