<?php
namespace ffb255\Botter\Interfaces;

interface HttpInterface
{
    /**
     * Class constructor
     *
     * @param string $token
     * @param array $config
     */
    public function __construct($token, $config);

    /**
     * Make a HTTP GET request
     *
     * @param string $method
     * @param array $data
     * @return void
     */
    public function post($method, $data);

    /**
     * Return a resource from local
     *
     * @param string $path to file
     * @return resource
     */
    public function getFileFromPath($path);
}