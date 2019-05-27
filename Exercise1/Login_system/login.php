<?php
  session_start();
if(isset($_POST['id']) && isset($_POST['pd'])){
    if($_POST['id']=='php' && $_POST['pd']=='mysql'){
     
       $_SESSION['id']=$_POST['id'];
       $_SESSION['pd']=$_POST['pd'];
        header("Location:success.php");
    }else{
        session_unset();
        header("Location:failed.php");
    }
}else{
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
        <title>login.php</title>
    </head>
    <body>
        <form action='login.php' method='POST'>
        帳號:<input type="text" name="id"><br>
        密碼:<input type="text" name="pd"><br>
       <input type='submit' name='submit' value='提交'> <br>
       <a href="success.php">上傳圖檔</a>
        </form>
                
 
    </body>
</html>
<?php
}
?>
