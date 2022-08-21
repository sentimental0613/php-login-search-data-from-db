<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>login</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
		<link rel="stylesheet" href="style.css">
	</head>
	<body class="box">
		<form action="connect.php" method="post">
			<input type="text" name="account" placeholder="account">
			<input type="password" name="password" placeholder="password">
			<input type="submit" name="" placeholder="login">
		</form>








	<?php if(isset($_GET["error"])){
      if($_GET["error"] == 0) echo "<h2 style='color:red'>帳號或密碼錯誤</h2>";
      if($_GET["error"] == 1) echo "<h2 style='color:purple'>登入失敗，#資料庫</h2>";
      if($_GET["error"] == 2) echo "<h2 style='color:blue'>登入失敗，#不能為空</h2>";  
    }
    ?>






	</body>
</html>


