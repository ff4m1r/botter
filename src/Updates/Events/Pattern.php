<?php
namespace ffb255\Botter\Updates\Events;

class Pattern {
    /**
     * Is equal your pattern with your subject or not
     *
     * @param string $pattern
     * @param string $subject
     * @return boolean
     */
    public static function isEqual($pattern, $subject){
        $regex = self::isRegexPattern($pattern);
        
        if(is_array($pattern)){
            in_array($subject, $pattern) ? true : false;
        }

        if($regex == false){
            return ($pattern == $subject ? true : false);
        } else{
            return (preg_match("/$regex/", $subject) == 1 ? true : false);
        }
    }

    public static function parse($pattern, $subject){
        preg_match("/$pattern/", $subject, $matches);
        return (object) $matches;
    }

    private static function isRegexPattern($pattern)
    {
        return (preg_match('/^\{\{(.*)\}\}$/', $pattern, $matches) ? $matches[1] : false);
    }
    
}
