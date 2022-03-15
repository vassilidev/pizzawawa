<?php

namespace App;

class App
{
    private $name;
    private $author;
    private $https;

    public function __construct($name = "App", $https = false, $author = "Vassili Joffroy")
    {
        $this->name = $name;
        $this->author = $author;
        $this->https = $https;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function getHttps()
    {
        return $this->https;
    }

    public function verifMethod()
    {
        $redirect = '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

        if (!isset($_SERVER['HTTPS']) && $this->getHttps())
            header('location: https' . $redirect);

        else if (isset($_SERVER['HTTPS']) && !$this->getHttps())
            header('location: http' . $redirect);

    }

    public function getUrl()
    {
        $method = ($this->getHttps()) ? 'https://' : 'http://';
        return $method . $_SERVER['HTTP_HOST'];
    }

}