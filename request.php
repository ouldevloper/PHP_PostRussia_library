<?php


namespace PostRussia;

class Request{
    private string $url;
    private string $method;


    public function __construct($url,$method){
        $this->url = $url;
        $this->method = $method;
    }

    public function getUrl(){
        return $this->url;
    }

    public function getMethod(){
        return $this->method;
    }
}