<?php
namespace ffb255\Botter\Requests;

use ffb255\Botter\Constants\APIConstants;
use ffb255\Botter\Interfaces\HttpInterface;

class RequestBuilder
{
    private $method;
    private $data = [];
    private $additionalParameter;

    /**
     * Class constructor
     *
     * @param \ffb255\Botter\Interfaces\HttpInterface $httpClient
     * @param string $method
     * @param array $additionalParameter
     */
    public function __construct(HttpInterface $httpClient, $method, $additionalParameter)
    {
        $this->httpClient = $httpClient;
        $this->method = $method;
        $this->additionalParameter = $additionalParameter;
    }

    public function __call($parameter, $values)
    {
        if(!method_exists($this, $parameter)){
            $value = $values[0];
            if(in_array($parameter, APIConstants::UPLOADABLE)){
                $value = $this->getUploadable($value);
            }
            $this->data[$parameter] = $value;
            return $this;
        }
    }

    /**
     * Bulk add parameters to request
     *
     * @param array $parameters
     * @return $this
     */
    public function addData($parameters){
        $this->data = array_merge($this->data, $parameters);
        return $this;
    }

    /**
     * Make HTTP request
     *
     * @return object
     */
    public function send()
    {
        $this->addData($this->additionalParameter);
        // echo json_encode($this->data, JSON_PRETTY_PRINT);
        $result = $this->httpClient->post($this->method, $this->data);
        return json_decode($result->getBody());
    }

    /**
     * Detect type of input (url, path or file id) to send media to user
     * Uploadable fileds uses path
     *
     * @param mixed $string
     * @return string
     */
    private function detectType($string){
        if(filter_var($string, FILTER_VALIDATE_URL)){
            return 'url';
        } elseif(file_exists($string)){
            return 'path';
        } else{
            return 'file_id';
        }
    }

    /**
     * Get gile from path
     *
     * @param string $file
     * @return resource
     */
    private function getUploadable($file)
    {
        $type = $this->detectType($file);
        if($type == 'path'){
            $file = $this->httpClient->getFileFromPath($file);
        }
        return $file;
    }
}