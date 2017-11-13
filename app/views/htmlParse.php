<?php
class htmlParse {
    private $tagName = '';
    private $tag = '';
    private $properties = [];
    private $content = '';
    function __construct($name = '') {
        if(isset ($name)){
            $this->tagName =  $name;
        }
        
    }
    
    function addPropertie($propertie = []){
        if(isset($propertie)){
            array_push($this->properties, $propertie);
        }
    }
    
    function show() {
        $this->tag = '<' . $this->tagName . ' ';
        foreach ($this->properties as $key => $value){
            $this->tag .= $key . ':' . "'{$value}'" . ' ';
            }
            $this->tag .= ' >' . $this->content .'</ '. $this->tagName . '>';
            return $this->tag;
        
    }
    
    function addContent ($text = ''){
        $this->content = $text;
    }
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

