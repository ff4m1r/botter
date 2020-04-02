<?php
namespace ffb255\Botter\Cache;

use Exception;
use ffb255\Botter\Conversations\Inject;
use ffb255\Botter\Interfaces\CacheInterface;

class Storage {
    /**
     * @var Interfaces\CacheInterface
     */
    private $driver;

    /**
     * Cache keys prefix
     * 
     * @var string
     */
    private $prefix;

    /**
     * Default key (Identification Key)
     * 
     * @var Interfaces\CacheInterface
     */
    private $defaultKey;

    /**
     * Time in second to expire a key in cache storage
     * 
     * @var string
     */
    private $expireAfter;

    /**
     * Storage constructor.
     *
     * @param CacheInterface $driver
     * @param integer $expireAfter in second
     */
    public function __construct(CacheInterface $driver, $expireAfter = 0)
    {
        $this->driver = $driver;
        $this->expireAfter = $expireAfter;
        return $this;
    }

    /**
     * Sets unique prefix for storage
     *
     * @param string $prefix
     * @return $this
     */
    public function setPrefix($prefix)
    {
        $this->prefix = $prefix;
        return $this;
    }

    /**
     * Sets identification key for this user
     *
     * @param string $defaultKey
     * @return $this
     */
    public function setDefaultKey($defaultKey)
    {
       $this->defaultKey = $defaultKey;
       return $this;
    }

    /**
     * Return a instance of current storage drivate
     *
     * @return CacheInterface
     */
    public function getDriver()
    {
        return $this->driver;
    }

    /**
     * Save a value in a key
     *
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function save($key, $value)
    {
        $this->getDriver()->save($this->generateKey($key), $value);
        if($this->expireAfter != 0){
            $this->expire($this->generateKey($key), $this->expireAfter);
        }
        return $this;
    }

    /**
     * Get value of a key
     *
     * @param string $key
     * @return string
     */
    public function get($key)
    {
        return $this->getDriver()->get($this->generateKey($key));
    }

    /**
     * Expire a key after specific second (Soon)
     *
     * @param string $key
     * @param string $seconds
     * @return $this
     */
    private function expire($key, $seconds)
    {
        $this->getDriver()->expire($this->generateKey($key), $seconds);
        return $this;
    }

    /**
     * Delete a key
     *
     * @param string $key
     * @return bool
     */
    public function delete($key)
    {
        try {
            $this->getDriver()->delete($this->generateKey($key));
            return true;
        } catch(Exception $e) {
            return false;
        }
    }

    /**
     * Check if a key exists ot not
     *
     * @param string $key
     * @return boolean
     */
    public function exists($key)
    {
        return $this->getDriver()->exists($this->generateKey($key));
    }

    /**
     * Generate a key with prefix, default key and data key
     *
     * @param string $key
     * @return string
     */
    private function generateKey($key){
        return "{$this->prefix}-{$this->defaultKey}-{$key}";
    }
}
