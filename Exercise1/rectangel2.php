<?php
class rectangle {
    private $w,$h;
    
    function __construct($width,$height) {
        $this->w=$width;
        $this->h=$height;
    }   
    function a() {
       return $this->w * $this->h; 
    }    
    function p() {
        return ($this->w + $this->h)*2;
    }
}

$r=new rectangle(5,2);
echo 'area:'.$r->a().'<br>';
echo 'perimeter:'.$r->p().'<br>';
