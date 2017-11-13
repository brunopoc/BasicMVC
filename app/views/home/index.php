<?php

class vhome {
    function __construct() {
        echo 'chegou meu parsa!';
        
        $a = new htmlParse('a');
        $a->addContent('ola mundão');
        echo $a->show();
        $br = new htmlParse('br');
        
    }
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

