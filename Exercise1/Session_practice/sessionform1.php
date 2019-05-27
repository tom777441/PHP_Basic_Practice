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
        <title>sessionform1.php</title>
    </head>
    <body>
        <?php
        if (isset($_POST['info'])){
        $_SESSION['info']=$_POST['info'];}
        if (isset($_POST['psd'])){
        $_SESSION['psd']=$_POST['psd'];}
         
        ?>
        <a href="sessionform2.php">帳號資料</a><br>
        <a href="sessionform3.php">移除帳號</a>
    </body>
</html>
