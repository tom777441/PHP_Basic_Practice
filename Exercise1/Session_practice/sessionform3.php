<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>sessionform3.php</title>
    </head>
    <body>
        <?php
        session_unset();
        session_destroy()
;        echo('帳號已移除'.'<br>');
       
        ?>
        '<a href="sessionform1.html">登出</a>';
    </body>
</html>
