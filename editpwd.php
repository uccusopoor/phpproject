<html>
    <head>
		<script src="./js/jquery-1.12.4.min.js"></script>
		<script src="./js/all.js"></script>
		<script src="materialize/js/materialize.min.js"></script>
		<link href="materialize/css/materialize.min.css" rel="stylesheet">
		<!--Import materialize.css-->
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<!--Let browser know website is optimized for mobile-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    </head>

<body>
  <div class="container">
        <div class="row">
			<div class="col s12 m4 l2"><p></p></div>
	          <div class="col s12 m4 l8">
	            <div class="card-panel teal lighten-2 flow-text card-panel hoverable">
	            <span style="font-family:Microsoft JhengHei;"><center>修改個人資料</center></span>
	            </div>
<form action="" method="post">
<i class='material-icons'>mode_edit</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 請輸入舊的密碼：<input type='password' name='oldpwd'></span><br/>
<i class='material-icons'>mode_edit</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 請輸入新的密碼：<input type='password' name='newpwd'></span><br/>
<i class='material-icons'>mode_edit</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 再輸入一次新密碼：<input type='password' name='newpwd2'></span><br/>
<button class="btn waves-effect waves-light" type="submit" name="action" ><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>確定修改</span></button>
<button class="btn waves-effect waves-light" type="reset" name="action" ><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>清除資料</span></button>
<?php
session_start();
echo "<br/>";
include('include.php');
$read2="SELECT * FROM user WHERE user_account='$_SESSION[uAcc]'";
$readresult2=mysqli_query($link,$read2);
$result2=mysqli_fetch_array($readresult2);


if(isset($_POST["oldpwd"]) && isset($_POST["newpwd"]) && isset($_POST["newpwd2"])){
	$oldpwd=$_POST["oldpwd"];
	$newpwd=$_POST["newpwd"];
	$newpwd2=$_POST["newpwd2"];
	if($newpwd==$newpwd2 && $oldpwd==$result2[2])
	{
		$update="UPDATE user 
		SET user_pwd='$newpwd' 
		WHERE user_account='$_SESSION[uAcc]'";
		mysqli_query($link,$update);
		echo "<script>alert('修改完成，按【確認】鍵後跳轉至登入頁面')</script>";
	header('refresh:1; url="login.php"');
	}
	else
	{
		echo "輸入錯誤，請重新輸入";
		//header('refresh:1; url="editpwd.php"');
	}
	
}
?>
</form>
</div>
</div>
</div>
</body>
</html>