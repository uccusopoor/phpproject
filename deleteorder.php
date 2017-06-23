<?php
require("include.php");
$id=$_GET["id"];
$sql="DELETE FROM invoice WHERE inv_id=$id";
mysqli_query($link,$sql);
echo "<script>alert('刪除成功')</script>";
header("refresh:1;url=ordermanage.php");