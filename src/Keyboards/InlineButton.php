<?php
namespace ffb255\Botter\Keyboards;

use ffb255\Botter\Keyboards\BaseButton;

class InlineButton extends BaseButton{
    protected $buttonData = [];

    /**
     * Create an instance of a button (Inline Button)
     *
     * @param strign $text
     * @return $this
     */
    public static function create($text)
    {
        return new InlineButton($text);
    }

    /**
     * Add data (callback query data) to this button
     *
     * @param string $callbackData
     * @return $this
     */
    public function data($callbackData)
    {
        $this->buttonData['callback_data'] = $callbackData;
        return $this;
    }

    /**
     * Make this button clickable to open a URL
     *
     * @param string $url
     * @return $this
     */
    public function url($url)
    {
        $this->buttonData['url'] = $url;
        return $this;
    }

    /**
     * Make this button as a login button
     *
     * @param string $url
     * @param boolean $request_write_access if true, bot can send message to users even users had not chat with bot
     * @param string $forward_text change button text when message forward by user
     * @param string $bot_username
     * @return $this
     */
    public function loginUrl($url, $request_write_access=false, $forward_text=null, $bot_username=null)
    {
        $needle = [
            is_null($forward_text) ?: 'forward_text',
            is_null($bot_username) ?: 'bot_username',
        ];
        $this->buttonData['login_url'] = compact('url', 'request_write_access', $needle);
        return $this;
    }
    
}
