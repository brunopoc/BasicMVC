<?php

class vhome {
    function __construct() {
        
        $a = new htmlParse('a');
        $a->addContent('ola mundão');
        
        
        $br = new htmlParse('br');
        $br = $br->show();
        $a->addContent($br);
        $a = $a->show();
        echo $a;
        echo $br;
        echo $a;
    }
    
    
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

