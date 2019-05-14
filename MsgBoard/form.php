
<html>
    <head>
        <title>留言板info</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport"charset="UTF-8" >
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
          <script type="text/javascript">
  function chk(){
    if(document.send.usr.value==''){
      alert('暱稱未填');
      document.send.usr.focus();
      return false;
    }
    if(document.send.content.value==''){
      alert('內容未填');
      document.send.content.focus();
      return false;
    }
    return true;
  }
  function
  </script>
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
        <form action='msg_db.php' method='POST' name='send' onsubmit="return chk()">
        <p>暱稱:<input type="text" name="usr" ></p>
        <p>內容:<input type='textarea' name='content'> <input type='submit' value='送出'>
        <input type='reset'></p>
    
        <input type='button'value='查看留言' onclick="location.href='msg_get.php'">
        
        
        <script src="js/jquery-1.10.2.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
