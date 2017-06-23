<?php session_start();
$_SESSION["edituAcc"]=$_GET["uAcc"];

?>


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
              <nav>
                <div class="nav-wrapper teal lighten-2 hoverable">
                  <a  class="brand-logo"><span style="font-family:Microsoft JhengHei;"><font color="black">　修改個人資訊</font></span></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
	                
                    <li><a href="login.php"><span style="font-family:Microsoft JhengHei;"><font color="black">回首頁</font></span></a></li>
                    <li><a href="logout.php"><span style="font-family:Microsoft JhengHei;"><font color="black">登出</font></span></a></li>
                  </ul>
                </div>
              </nav>
<?php
include('include.php');


$read2="SELECT * FROM user WHERE user_account='$_SESSION[edituAcc]'";
$readresult2=mysqli_query($link,$read2);
$result2=mysqli_fetch_array($readresult2);


?>
<form action="editresult2.php" method="post">
<?php
echo "</br>";
echo "<i class='material-icons'>lock_outline</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 帳號：<input type='text' name='account' value=".$result2[1]."></span><br/>";
echo "<i class='material-icons'>assignment_ind</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 姓名：<input type='text' name='name' value='".$result2[3]."'></span><br/>";
echo "<i class='material-icons'>contact_phone</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 電話：<input type='text' name='phone' value='".$result2[4]."'></span><br/>";
echo "<i class='material-icons'>location_on</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 地址：<input type='text' name='address' value='".$result2[5]."'></span><br/>";
echo "<i class='material-icons'>mode_edit</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> Email：<input type='text' name='email' value='".$result2[7]."'></span><br/>";
echo "<i class='material-icons'>mode_edit</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 權限：<input type='text' name='authority' value='".$result2[6]."'></span><br/>";


?>

<button class="btn waves-effect waves-light" type="submit" name="action" ><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>確定修改</span></button>
<button class="btn waves-effect waves-light" type="reset" name="action" ><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>清除資料</span></button>
<?php
echo "</form>";

?>
</div>
</div>
</div>
</div>
</body>
</html>