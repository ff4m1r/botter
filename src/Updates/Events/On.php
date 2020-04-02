<?php
namespace ffb255\Botter\Updates\Events;

use ffb255\Botter\Botter;
use ffb255\Botter\Requests\Responses\CallbackQuery;

class On {
    /**
     * @property /ffb255/Botter/Botter
     */
    private static $botter;

    public static function __setup(Botter $botter)
    {
        self::$botter = $botter;
    }

    private static function message(){
        return self::$botter->getUpdate()->isMessage();
    }

    public static function text($pattern, callable $thenDo, $ignoreForward = false)
    {
        if(!self::message()){
            return;
        }

        $subject = self::$botter->getUpdate()->getMessage()->getText() ?? null;
        if($ignoreForward && self::$botter->getUpdate()->getMessage()->isForwardDate()){
            return;
        }

        $regexPattern = Pattern::checkPattern($pattern, $subject);
        if(is_array($regexPattern)){
            call_user_func_array($thenDo, $regexPattern);
        }
    }

    public static function forward(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isForwardDate()){
            $thenDo();
        }

    }

    public static function audio(callable $thenDo){
        if(self::message() && self::$botter->getUpdate()->getMessage()->isAudio()){
            $thenDo();
        }
    }

    public static function animation(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isAnimation()){
            $thenDo();
        }
    }

    public static function game(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isGame()){
            $thenDo();
        }
    }

    public static function photo(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isPhoto()){
            $thenDo();
        }
    }

    public static function sticker(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isSticker()){
            $thenDo();
        }
    }

    public static function video(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isVideo()){
            $thenDo();
        }
    }

    public static function voice(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isVoice()){
            $thenDo();
        }
    }

    public static function videoNote(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isVideoNote()){
            $thenDo();
        }
    }

    public static function contact(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isContact()){
            $thenDo();
        }
    }

    public static function newMember(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isNewChatMembers()){
            $thenDo();
        }
    }

    public static function leftMember(callable $thenDo)
    {
        if(self::message() && self::$botter->getUpdate()->getMessage()->isLeftChatMember()){
            $thenDo();
        }
    }

    public static function channelPost(callable $thenDo)
    {
        if(self::$botter->getUpdate()->isChannelPost()){
            $thenDo();
        }
    }

    public static function groupChat(callable $thenDo)
    {
        if((self::$botter->getUpdate()->getMessage()->getChat()->getType() ?? null) == 'group'){
            $thenDo();
        }
    }

    public static function privateChat(callable $thenDo)
    {
        if((self::$botter->getUpdate()->getMessage()->getChat()->getType() ?? null) == 'private'){
            $thenDo();
        }
    }

    public static function callbackQuery($pattern, callable $thenDo)
    {
        if(self::$botter->getUpdate()->isCallbackQuery()){
            $subject = self::$botter->getUpdate()->getCallbackQuery()->getData();
            if(Pattern::checkPattern($pattern, $subject)){
                // $callback = new CallbackQuery(self::$botter);
                $thenDo();
            }
        }
        
    }
}
