<?php
namespace ffb255\Botter\Cache\Drivers;

use ffb255\Botter\Interfaces\CacheInterface;

class RedisCache implements CacheInterface
{
    private $redis;

    /**
     * Class constructor.
     */
    public function __construct()
    {
        $redis = new \Credis_Client('localhost');
        $this->redis = $redis;
    }

    /**
     * Save a value in a key
     *
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function save($key, $value){
        $this->redis->set($key, $value);
        return $this;
    }

    /**
     * Get value of a key
     *
     * @param string $key
     * @return string
     */
    public function get($key){
        return $this->redis->get($key);
    }

    /**
     * Expire a key after specific second (Soon)
     *
     * @param string $key
     * @param string $seconds
     * @return $this
     */
    public function expire($key, $seconds){
        $this->redis->pexpire($key, $seconds);
        return $this;
    }

    /**
     * Delete a key
     *
     * @param string $key
     * @return void
     */
    public function delete($key){
        return $this->redis->del($key);
        return $this;
    }

    /**
     * Check if a key exists ot not
     *
     * @param string $key
     * @return boolean
     */
    public function exists($key){
        return $this->redis->exists($key);
    }
}