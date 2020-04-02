<?php
namespace ffb255\Botter\Http;

use ffb255\Botter\Interfaces\HttpInterface;
use ffb255\Botter\Constants\APIConstants;
use GuzzleHttp\Client;

class Guzzle implements HttpInterface
{
    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    /**
     * @var string
     */
    private $token;

    /**
     * Class constructor
     *
     * @param string $token
     */
    public function __construct($token, $config)
    {
        $this->token = $token;
        $baseURL = sprintf(APIConstants::BASE_API_URL, $token);
        $this->client = new Client([
            'base_uri' => $baseURL,
            'timeout'  => isset($config['timeout']) ? $config['timeout'] : APIConstants::HTTP_DEFAULT_TIMEOUT,
            'http_errors' => false
        ]);
    }

    /**
     * Return a resource from local
     *
     * @param string $path to file
     * @return resource
     */
    public function getFileFromPath($path)
    {
        return fopen($path, 'r');
    }

    /**
     * Convert resource to multipart
     *
     * @param resource $data
     * @return array
     */
    public function convertToMultipart($data)
    {
        $result = [];
        array_walk($data, function($value, $key) use(&$result) {
          $result[] = ['name' => $key, 'contents' => $value];
        });
        return $result;
    }

    /**
     * Make a HTTP GET reques
     *
     * @param string $method
     * @param array $data
     * @return void
     */
    public function post($method, $data = [])
    {
        $data = $this->convertToMultipart($data);
        return $this->client->request('POST', $method, [
            'multipart' => $data
        ]);
    }
}