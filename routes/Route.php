<?php

class Route
{

    private $_url;

    public function __construct($url)
    {
        $this->_url = $url;
    }

    public function loadPage()
    {
        if(strtolower($this->_url) === '/') return include 'views/pages/main.php';
        if(strtolower($this->_url) === '/login' || strtolower($this->_url) === '/register') $page = 'views/auth'.strtolower($this->_url).'.php';
        else $page = 'views/pages'.strtolower($this->_url).'.php';
        if(file_exists($page)) return include $page;
        else return include "views/errorpage.php";
    }
}