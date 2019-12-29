<?php
namespace ffb255\Botter;

use ffb255\Botter\Cache\Drivers\JsonCache;
use ffb255\Botter\Http\Guzzle;
use ffb255\Botter\Updates\Update;
use ffb255\Botter\Updates\Events\On;
use ffb255\Botter\Interfaces\CacheInterface;
use ffb255\Botter\Interfaces\HttpInterface;

class BotterFactory
{
    /**
     * Create a new Botter instance
     *
     * @param string $token
     * @param Interfaces\CacheInterface $storage
     * @param Interfaces\HttpInterface $httpClient
     * @param string $incomingUpdate as json
     * @return Botter
     */
    public static function create(
        $token,
        CacheInterface $storage = null,
        HttpInterface $httpClient = null,
        $incomingUpdate = null
    ){
        if(empty($storage)){
            $storage = new JsonCache();
        }
        if(empty($httpClient)){
            $httpClient = new Guzzle($token);
        }
        if(empty($incomingUpdate)){
            $incomingUpdate = file_get_contents('php://input');
        }
        
        $update = new Update(json_decode($incomingUpdate, true));
        $botter = new Botter($update, $httpClient, $storage);
        On::__setup($botter);

        return $botter;
    }    
}
