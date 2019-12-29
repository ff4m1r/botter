<?php
namespace ffb255\Botter\Interfaces;

interface CacheInterface
{
    /**
     * Save a value in a key
     *
     * @param string $key
     * @param string $value
     * @return $this
     */
    public function save($key, $value);

    /**
     * Get value of a key
     *
     * @param string $key
     * @return string
     */
    public function get($key);

    /**
     * Delete a key
     *
     * @param string $key
     * @return void
     */
    public function delete($key);

    /**
     * Check if a key exists ot not
     *
     * @param string $key
     * @return boolean
     */
    public function exists($key);

    /**
     * Expire a key after specific second (Soon)
     *
     * @param string $key
     * @param string $seconds
     * @return $this
     */
    public function expire($key, $seconds);
}