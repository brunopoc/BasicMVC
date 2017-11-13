<?php

class App {
    
    protected $controller = 'home'; 
    
    protected $method = 'index';
    
    protected $params = [];
    
    function __construct() {
        
        $url = $this->parseUrl();
        
        if(isset($url[0]) && file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
            
            if(isset($url[1]) && method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
                if(isset($url[2]) || isset($url[1])){
                    $this->params = $url ? array_values($url) : [];
                }
            }
        }
        require_once '../app/controllers/' . $this->controller  . '.php';
        $this->controller = new $this->controller;
        call_user_func_array([$this->controller, $this->method], $this->params);
        
    }
    
    function parseUrl (){
      if(isset($_GET['url'])){
          $url = explode( '/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
          return $url;
      }
  }  
}


/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

