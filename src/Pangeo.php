<?php

namespace TSIHosting\Pangeo;

class Pangeo{
    /**
     * @var string The API Access Token
     */
    protected $auth = null;


    /**
     * Constructor
     */
    public function __construct($token, $options = [])
    {
        $this->setToken($token);
    }

    public function setToken($token)
    {
        if (!is_string($token))
          throw new \InvalidArgumentException('Token is not valid');

        $this->auth = $token;  

        return true;  
    }

    public function getToken()
    {
        return $this->auth;
    }
}