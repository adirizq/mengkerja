<?php

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = array();

    public function __construct()
    {
        $url = $this->parseURL();

        // Controller
        if (isset($url[0])) {
            if (file_exists(CONTROLLERS_PATH . ucwords($url[0]) . '.php')) {
                $this->controller = ucwords($url[0]);
                unset($url[0]);
            } else {
                $this->controller = 'Handler';
                $this->method = 'notFound';
            }
        }


        require_once CONTROLLERS_PATH . $this->controller . '.php';
        $this->controller = new $this->controller;


        // Method
        if (isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            } else {
                require_once 'app/controllers/Handler.php';

                $this->controller = new Handler;
                $this->method = 'notFound';
            }
        }


        // Params
        if (!empty($url)) {
            $this->params = array_values($url);
        }

        // Jalankan controller & method, serta kirimkan params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function parseURL()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
