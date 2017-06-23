<?php session_start();
if(isset($_SESSION["uAcc"])){
?>
<html>
	<head>
		<script src="./js/jquery-1.12.4.min.js"></script>
		<script src="./js/all.js"></script>
		<script src="materialize/js/materialize.min.js"></script>
		<link href="materialize/css/materialize.min.css" rel="stylesheet">
		
		<link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	</head>
<body>
	 	<div class="container">
	        <div class="row">
			<div class="col s12 m4 l2"><p></p></div>
	          <div class="col s12 m4 l8">
	             <nav>
	              <div class="nav-wrapper teal lighten-2 hoverable">
	                <a  href="articlelist.php" class="brand-logo"><span style="font-family:Microsoft JhengHei;"><font color="black"><center>　個人資料</center></font></span></a>
	                <ul id="nav-mobile" class="right hide-on-med-and-down">
	                  <li><a href="logout.php"><span style="font-family:Microsoft JhengHei;"><font color="black">登出</font></span></a></li>
	                  <li><a href="login.php"><span style="font-family:Microsoft JhengHei;"><font color="black">回首頁</font></span></a></li>
	                </ul>
	              </div>
	            </nav>


<?php
include('include.php');
$read2="SELECT * FROM user WHERE user_account='$_SESSION[uAcc]'";
$readresult2=mysqli_query($link,$read2);
$result2=mysqli_fetch_array($readresult2);
echo "</br>";
echo "<center><i class='material-icons'>person_pin</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 帳號：".$result2[1]."</span></center><br/>";
echo "<center><i class='material-icons'>perm_identity</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 姓名：".$result2[3]."</span></center><br/>";
echo "<center><i class='material-icons'>phone</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 電話：".$result2[4]."</span></center><br/>";
echo "<center><i class='material-icons'>location_on</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 地址：".$result2[5]."</span></center><br/>";
echo "<center><i class='material-icons'>mode_edit</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> Email：".$result2[7]."</span></center><br/>";

?>
<center>
<a href="editpwd.php" class="waves-effect waves-light btn"><i class="material-icons left">mode_edit</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>前往修改密碼</span></a>
<a href="useredit.php" class="waves-effect waves-light btn"><i class="material-icons left">mode_edit</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>前往修改個人資料</span></a>
</br>
</br>

</center>
</div>
</div>
</div>
</body>
</html>
<?php 
}
else
{
    echo "<script>alert('請先登入，按【確認】鍵後前往登入頁面')</script>";
	header('refresh:1; url="login.php"');
}
?>