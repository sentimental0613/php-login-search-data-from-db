<html>
<body>
<br>
Welcome <?php echo $_POST["account"]; ?><br>
Your password is: <?php echo $_POST["password"]; ?>

</body>
</html>


<?php if($_POST["account"] == null || $_POST["password"] == null) header("Location: login.php?error=2");
?>
<?php session_start(); ?>
<meta charset="utf-8">
<?php
 $link = mysqli_connect('localhost','root','', 'test_now'); //建立連線
 if(!$link)
  die("抱歉伺服器已掛, 自己的網站自己救");//掛掉
    else
     echo "<br>Connect finish, now loading..."; 
 
    //mysqli_set_charset('utf8',$link);//編碼設定
 
   if(!mysqli_select_db($link, 'test_now')) header("Location: login.php?error=1"); // '@' 不顯示錯誤, 選擇不了db
 
   $account = $_POST["account"];
   $password = ($_POST["password"]);//加密使用者的密碼
 
   $sql = "select * from users where username = '$account'";
   $result = mysqli_query($link, $sql);
   $row = mysqli_fetch_row($result);
    
 
   if($account != null && $password != null && $row[0]==$account && $row[1] == $password){ //查詢結果拿來判斷
     $_SESSION["account"] = $account; //建立登入的session
     mysqli_free_result($result);
     mysqli_close($link);
     echo "success";
     echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
   }else{
    mysqli_free_result($result);
    mysqli_close($link);
    header("Location: login.php?error=0");
   } 
?>