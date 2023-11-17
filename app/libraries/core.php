<?php

// core class 
class Core
{
    protected $currentController = 'pages';
    protected $currentMethod = 'index';
    protected $params = [];
    public function __construct()
    {
        $url = $this->getUrl();

        //look in controller for first value
        if (file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {

            // if exest, set as controller
            $this->currentController = ucwords($url[0]);

            // unset 0 index
            unset($url[0]);

            // require controller

            // require_once '../app/controllers/'. $this->currentController.'php';
            require_once '../app/controllers/' . $this->currentController . '.php';

            // instantiate controller class
            $this->currentController = new $this->currentController;

        }
            // check for second part of url
            if (isset($url[1])) {

                //check to see if method exists in controller
                if(method_exists( $this->currentController,$url[1] )) {
                    $this->currentMethod = ucwords($url[1]); 
                    // unset 1 index
                    unset($url[1]);
                }
            }
            // get params
          $this->params = $url ? array_values($url):array();

          // call a callback with array of parameters
          call_user_func_array([$this->currentController,$this->currentMethod],$this->params);
    }

    //get the url and make it in array
    public function getUrl()
    {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}
   