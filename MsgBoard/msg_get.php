<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>留言板</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"charset="UTF-8" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    </head>
    <body>
         <nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar1">
				<span class="sr-only">Menu</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.php">留言板</a>
		</div>
		<div class="collapse navbar-collapse" id="navbar1">
			<ul class="nav navbar-nav navbar-right">
	
				<li><p class="navbar-text">登出</p></li>
				<li><a href="register.php">註冊</a></li>
			</ul>
		</div>
	</div>
    </nav>
            <?php
            $mysqli = new mysqli('localhost','root','','db_msg');
            $mysqli->query('set names utf8');
            $sql =  "select* from show_msg";
            $sql2=$mysqli->query($sql);
            $rows = $sql2->num_rows;
            //var_dump($sql2);
            //var_dump($rows);
            if($rows==""){
                 echo "查無資料！<br>";
                 echo"<a href='form.php'>返回表單</a>;";
            }else{
            while($list=$sql2->fetch_object()) {
                 echo $list->time.'<br>'; 
                 echo $list->name;
                 echo '留言:'.$list->content."<br>";
                }
                echo"<a href='form.php'>返回表單</a>";
            }
                
        ?>
       <script src="js/jquery-1.10.2.js"></script>
       <script src="js/bootstrap.min.js"></script>    
    </body>
</html>
