<?php

class Controller {
    
    protected $model_val = '';
    protected $view_val = '';
    protected $obj_name = '';
    
    function Model ($name = ''){ // -------------------------------------- RESPONSÁVEL POR CHAMAR A MODEL RESPONSÁVEL
        if(isset($name) && file_exists('../app/models/' . $name . '.php')){
            $this->model_val = filter_var($name, FILTER_SANITIZE_ENCODED);// ---- RETIRAR CARACTERES ESPECIAIS
            require_once '../app/models/' . $this->model_val . '.php';
        }
    }
    
    function View ($name = ''){
        if(isset($name) && file_exists('../app/views/' . $name . '/index.php')){
            $this->view_val = filter_var($name, FILTER_SANITIZE_ENCODED);// ---- RETIRAR CARACTERES ESPECIAIS
            require_once '../app/views/' . $this->view_val . '/index.php';
            $this->view_val = 'v' . $this->view_val;
            $this->view_val = new $this->view_val;
        }
        
    }
    
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

