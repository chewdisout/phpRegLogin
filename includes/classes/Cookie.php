<?php

class Cookie
{

    private $_cookieName = "user";
    public $_cookieValue;

    public function __construct($cookieValue)
    {
        $this->_cookieValue = $cookieValue * 234;
    }

    public function setCookie()
    {
        setcookie($this->_cookieName, $this->_cookieValue, time() + 86400, "/");
    }

}