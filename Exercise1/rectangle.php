<?php
       class rectangle{
           public $height;  
           public $width;
           function __construct($h='' ,$w='') {
           $this->height=$h;
           $this->width=$w;
           }
       
           public function area(){
               echo 'rectangle面積:'. $this->height*$this->width;
       }  
           public function perimeter(){
                echo '<br>'.'rectangle周長:'. ($this->height+$this->width)*2;
           }
          }
       
  
           $a = new rectangle('5','2');
           $a->area();
           $a->perimeter();