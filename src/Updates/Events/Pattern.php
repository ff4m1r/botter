<?php
namespace ffb255\Botter\Updates\Events;

class Pattern {
    /**
     * Checks whether subject string matches pattern or not
     * Returns false on errors otherwise an array of named parameter
     *
     * @param string $pattern
     * @param string $subject
     * @return mixed
     */
    public static function checkPattern($pattern, $subject){
        $regex = self::isRegexPattern($pattern);
        
        if(is_array($pattern)){
            in_array($subject, $pattern) ? [] : false;
        }

        if($regex == false){
            return ($pattern == $subject ? [] : false);
        } else{
            // Pattern is a regex
            preg_match("/$regex/", $subject, $params);
            if (count($params) <= 0) {
                return false;
            } else {
                //$params = array_filter($params, "is_string", ARRAY_FILTER_USE_KEY); // filters named parameters
                 array_shift($params);
                return $params;
            }

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
