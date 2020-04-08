<?php
namespace ffb255\Botter\Keyboards;

use ffb255\Botter\Keyboards\BaseButton;

class Button extends BaseButton{
    protected $buttonData = [];

    /**
     * Create an instance of a button (Normal Button)
     *
     * @param string $text
     * @return $this
     */
    public static function create($text)
    {
        return new Button($text);
    }

    /**
     * Request user phone number when user tap on this button
     *
     * @return $this
     */
    public function requestContact()
    {
        $this->buttonData['request_contact'] = true;
        return $this;
    }

    /**
     * Request user location when user tap on this button
     *
     * @return $this
     */
    public function requestLocation()
    {
        $this->buttonData['request_location'] = true;
        return $this;
    }
    
}
