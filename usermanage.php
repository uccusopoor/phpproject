<?php session_start();?>
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
                  <a  class="brand-logo"><span style="font-family:Microsoft JhengHei;"><font color="black">　查看用戶資料</font></span></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                  
                    <li><a href="login.php"><span style="font-family:Microsoft JhengHei;"><font color="black">回首頁</font></span></a></li>
                    <li><a href="logout.php"><span style="font-family:Microsoft JhengHei;"><font color="black">登出</font></span></a></li>
                  </ul>
                </div>
              </nav>
<?php
if($_SESSION["authority"]==2)
{
	include('include.php');
	$read="SELECT * FROM user";
	$readresult=mysqli_query($link,$read);
	while($result=mysqli_fetch_array($readresult)){
		echo "<i class='material-icons'>person_pin</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 帳號：".$result[1];
		echo "<br/>";
		echo "<i class='material-icons'>lock_outline</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 密碼： ".$result[2];
		echo "<br/>";
		echo "<i class='material-icons'>assignment_ind</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 姓名： ".$result[3];
		echo "<br/>";
		echo "<i class='material-icons'>contact_phone</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 電話： ".$result[4];
		echo "<br/>";
		echo "<i class='material-icons'>location_on</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 地址：".$result[5];
		echo "<br/>";
		echo "<i class='material-icons'>mode_edit</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> Email：".$result[7];
		echo "<br/>";
		echo "<i class='material-icons'>swap_vert</i><span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 權限：";
		if($result[6]==1)
		{
			echo "普通用戶";
		}
		else
		{
			echo "管理者";
		}
		echo "<br/>";
		
		?>

		<a href="usermanageresult.php?uAcc=<?php echo $result[1];?>">修改用戶資料</a>
		<div class='divider'></div>
		
		<?php
		echo "<br/>";
		echo "<br/>";
	}
}
else
{
	echo "<script>alert('權限不足，按【確認】鍵後前往登入頁面')</script>";
	header('refresh:1; url="login.php"');

}



?>
</div>
</div>
</div>
</body>
</html>