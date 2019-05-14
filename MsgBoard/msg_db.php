

<html>
    <head>
        <title>DB送出資料</title>
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
            //var_dump($_POST['usr']);
            date_default_timezone_set('Asia/Taipei');
            if(isset($_POST['usr']) || isset($_POST['content'])){ 
            $name=$_POST['usr'];
            $content=$_POST['content'];
            $date= date ("Y/ m / d - H : i : s");
            $mysqli = new mysqli('localhost','root','','db_msg');
                 $sql =  "insert into show_msg(name,time,content) values ('$name','$date','$content');";
                 $mysqli->query('set names utf8');
            if($mysqli->query($sql)){
                header("Location:msg_get.php");
                }else{
               header("Location:form.php");
            }
            $mysqli->close(); 
                //header("Location:msg_get.php");
            /*
            }elseif($name !=""){
                echo '未輸入內容!'.'<br>';
                echo"<a href='form.php'>返回表單</a>";
            }elseif($content!=""){
                echo '未輸入暱稱!'.'<br>';
                echo"<a href='form.php'>返回表單</a>";
            }else{
                echo'未輸入資料'.'<br>';
                echo"<a href='form.php'>返回表單</a>";
                }*/
            }
            ?>

                    <script src="js/jquery-1.10.2.js"></script>
                    <script src="js/bootstrap.min.js"></script>
    </body>
</html>