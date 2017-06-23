<?php
include("include.php");
$minv_id=$_POST["id"];
$muser_account=$_POST["user_account"];
$mdate1=$_POST["date1"];
$mpro_id=$_POST["pro_id"];
$mquantity=$_POST["quantity"];
$sql="UPDATE invoice SET user_account='$muser_account',date1='$mdate1',pro_id='$mpro_id',quantity='$mquantity' WHERE inv_id='$minv_id'";
mysqli_query($link,$sql);
header("refresh:1;url=ordermanage.php");
