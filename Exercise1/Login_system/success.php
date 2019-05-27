<?php
session_start();
//var_dump($_SESSION);
//var_dump($_FILES);
if(!isset($_SESSION['id']) || $_SESSION['id']!='php') {
    header('Location: login.php');
}
if(isset($_FILES['userfile'])) {
    $upfile='img/'.mb_convert_encoding($_FILES['userfile']['name'],'big5','utf-8');
    move_uploaded_file($_FILES['userfile']['tmp_name'], $upfile);
}
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
        <title></title>
    </head>
    <body>
    <form action="success.php" method="POST" enctype="multipart/form-data" >
    上傳圖檔:
    <input type="file" name="userfile">
    <br><input type="submit" name="submit2">
    <br><a href ="logout.php">登出</a><br>
    
 <?php
if(isset($_FILES['userfile'])) {
    
    echo '<img src="'.mb_convert_encoding($upfile,'utf-8','big5').'" width="100">';
}
?>
    </form>
    </body>
