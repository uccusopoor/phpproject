<?php
session_start();

if(isset($_SESSION["uAcc"])){
	unset($_SESSION["uAcc"]);


    echo "<script>alert('您已登出，按【確認】鍵後前往登入頁面')</script>";
    header('refresh:1; url="login.php"');


}
else
{
    echo "<script>alert('您還沒登入，按【確認】鍵後前往登入頁面')</script>";
	header('refresh:1; url="login.php"');
}
?>