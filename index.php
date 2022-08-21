<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>index</title>
		<meta http-equiv="content-type" content="text/html;charset=utf-8">
	</head>
	<body>
		<form action="lookup.php" method="post">
			<div style="text-align: center;">
				<select id="location" onchange="bbb()" name="location">
    				<option>新北</option>
    				<option>台南</option>
    				<option>高雄</option>
    				<option>台東</option>
    				<option>金門</option>
    				<option>桃園</option>
				</select>
			</div>
			<div style="text-align: center;">
				<button> lookup </button>
				<br>
				<input type="text" id="select_content" name="select_content">
			</div>
		</form>






		<script>
			function bbb(){

				var select = document.getElementById('location');
				var value = select.options[select.selectedIndex].value;
				console.log(value);

				document.getElementById("select_content").value = value;
			}
		</script>


	</body>
</html>


