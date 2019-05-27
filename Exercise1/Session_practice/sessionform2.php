<?php
session_start(); 
  ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>sessionform2</title>
    </head>
    <body>
        <?php
           
        if(isset($_SESSION['info']) && $_SESSION['psd']){   
            echo('OK'.'<br>');
            echo("帳號:".$_SESSION['info'].'<br>');
            echo("密碼:".$_SESSION['psd'].'<br>');
       
          
        }else{
            echo('Cancel'.'<br>');      
        }
        ?>
            <a href="sessionform1.php">首頁</a><br>
            <a href="sessionform1.html">登入</a>
    </body>
</html>
