<?php
namespace ffb255\Botter;

use ffb255\Botter\Http\Guzzle;
use ffb255\Botter\Updates\Update;
use ffb255\Botter\Updates\Events\On;
use ffb255\Botter\Cache\Drivers\JsonCache;
use ffb255\Botter\Interfaces\HttpInterface;
use ffb255\Botter\Interfaces\CacheInterface;
use ffb255\Botter\Exceptions\Core\UnexpectedValueException;
use RuntimeException;

class BotterFactory
{
    /**
     * Create a new Botter instance
     *
     * @param array $config
     * @param Interfaces\CacheInterface $storage
     * @param Interfaces\HttpInterface $httpClient
     * @param string $incomingUpdate as json
     * @return Botter
     */
    public static function create(
        $config,
        CacheInterface $storage = null,
        HttpInterface $httpClient = null
    ){
        if(empty($storage)){
            $storage = new JsonCache();
        }
        if(empty($httpClient)){
            if(is_null($config['token'])){
                throw new UnexpectedValueException("Config Array: Token is required");
            }
            $httpClient = new Guzzle($config['token'], $config['http'] ?? []);
        }

        $incomingUpdate = $config['dummy_update'] ?? file_get_contents('php://input');
        if(is_null($incomingUpdate) || $incomingUpdate == ""){
            throw new RuntimeException("Botter only works with webhook. Please set a webhook for your bot instead of direct execution");
        }
        
        $update = new Update(json_decode($incomingUpdate, true));
        $botter = new Botter($update, $httpClient, $storage);

        // Sorry for this un-standard line :KEKW
        On::__setup($botter);

        return $botter;
    }    
}
