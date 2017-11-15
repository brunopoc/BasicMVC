<?php
class htmlElement {
    private $tag = '';
    private $tagName = '';
    private $properties = [];
    private $contents = [];
    
    function __construct($name = '') {
        if(isset ($name)){
            $this->tagName =  $name;
        }
    }
    
    function __set($name, $value) {
        $this->properties[$name] = $value;
    }
    
    function __get($name) {
        return isset($this->properties[$name]) ? $this->properties[$name] : NULL;
    }
    
    function add($content = ''){
        if(isset($content)){
            array_push($this->contents, $content);
        }
    }
    
    function show() {
        
        $this->tag = '<' . $this->tagName . ' ';
        
        foreach ($this->properties as $key => $value){
            $this->tag .= $key . ':' . "'{$value}'" . ' ';
            }
        $this->tag .= ' >';    
        foreach ($this->contents as $value){
            $this->tag .= $value;
            }
            
        $this->tag .= '</ '. $this->tagName . '>';
        
        return $this->tag;

    }
    
    function __toString (){
        ob_start();
        $this->show();
        $result = ob_get_clean();
        return $result;
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

