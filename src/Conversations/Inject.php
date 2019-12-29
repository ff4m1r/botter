<?php
namespace ffb255\Botter\Conversations;

class Inject {
    private static $inject = [];

    public static function __callStatic($name, $args){
        $argCount = count($args);
        if($argCount == 0){
            return self::$inject[$name];
        } elseif($argCount == 1){
            self::$inject[$name] = $args[0];
        } else{
            self::$inject[$name] = $args;
        }
    }
}