<?php session_start(); ?>
<html>
<body>
<center>
<?php 
$account=$_POST["account"];
$name=$_POST["name"];
$phone=$_POST["phone"];
$address=$_POST["address"];
$email=$_POST["email"];
$authority=$_POST["authority"];
include('include.php');
if(preg_match('/^[a-zA-Z]\w*$/',$account) == false ) {
	echo "<script>alert('帳號格式錯誤，按【確認】鍵後跳轉至修改頁面')</script>";
	header('refresh:1; url="usermanage.php"');
}
else if(preg_match('/^09[0-9]{8}$/',$phone) == false ) {
	echo "<script>alert('電話格式錯誤，按【確認】鍵後跳轉至修改頁面')</script>";
	header('refresh:1; url="usermanage.php"');
}
else if(preg_match('/^([.0-9a-z]+)@([0-9a-z]+).([.0-9a-z]+)$/i',$email) == false ) {
	echo "<script>alert('信箱格式錯誤，按【確認】鍵後跳轉至修改頁面')</script>";
	header('refresh:1; url="usermanage.php"');
}
else{
	$update="UPDATE user 
	SET user_account='$account',user_name='$name',user_phone='$phone',user_address='$address',user_email='$email', user_authority='$authority'
	WHERE user_account='$_SESSION[edituAcc]'";
	mysqli_query($link,$update);
		echo "<script>alert('修改完成，按【確認】鍵後跳轉至登入頁面')</script>";
	header('refresh:1; url="login.php"');

    
}



?>
</center>
</body>
</html>




