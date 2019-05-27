<?php

for($j=0;$j<6;$j++){    //隨機抽6次
    $temp=rand(1,49);
    if(isset($used[$temp])){
     $j--;              //重複即重新抽取
    }else{
        $used[$temp]=$temp;   //陣列填入值，供下次判斷
        echo("$temp".'<br>');
     }
    }


   
?>