<!DOCTYPE HTML>
<html>
	<head>
		<title>連接資料庫</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
	</head>
	<body>
		<table style="margin: auto;" width='300' border='1'>
		<tr>
		<td>SID</td>
		<td>Name</td>
		<td>DepartmentNumber</td>
		</tr>
		
		<?php
		$link = mysqli_connect( 
		'localhost',  // MySQL主機名稱 
		'root',       // 使用者名稱 
		'',  // 密碼
		'test');  // 預設使用的資料庫名稱
		
		$query = "select * from studentinfo where SID like '%S1%' ";
		$result=mysqli_query($link,$query);

		while($user=mysqli_fetch_row($result)){
			echo"<tr>";
			echo"<td>$user[0]</td>";
			echo"<td>$user[1]</td>";
			echo"<td>$user[3]</td>";
			echo"</tr>";
		}
		?>
	</body>
</html>