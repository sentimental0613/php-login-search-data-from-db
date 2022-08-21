<!DOCTYPE HTML>
<html>
	<head>
		<title>lookup</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
	</head>
	<body>
		<div style="text-align: center;">
			<input type="button" name="" value="返回" onclick="javascript:history.back(-1);">
		</div>
		<table style="margin: auto;" width='500' border='1'>
		<tr>
		<td>SID</td>
		<td style="width: 50px;">Name</td>
		<td>DepartmentNumber</td>
		<td>DepartmentName</td>
		<td>Location</td>
		</tr>

		
		<?php
		$link = mysqli_connect(
		'localhost',  // MySQL主機名稱
		'root',       // 使用者名稱
		'',  // 密碼
		'test');  // 預設使用的資料庫名稱
		
		$Location = $_POST['location'];

		$query = "SELECT
    				s.SID,
    				s.Name,
    				departmentinfo.DepartmentNumber,
    				departmentinfo.DepartmentName,
    				departmentinfo.Location
				FROM
    				studentinfo as s
    				LEFT JOIN departmentinfo
    				ON departmentinfo.DepartmentNumber = s.DepartmentNumber
				WHERE
    				departmentinfo.Location = '$Location'";

		$result=mysqli_query($link,$query);

		

		while($user=mysqli_fetch_row($result)){
			echo"<tr>";
			echo"<td>$user[0]</td>";
			echo"<td>$user[1]</td>";
			echo"<td>$user[2]</td>";
			echo"<td>$user[3]</td>";
			echo"<td>$user[4]</td>";
			echo"</tr>";
		}

		?>
	</body>
</html>
