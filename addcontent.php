<?php session_start(); ?>
<html>
      <head>
      
        <script src="./js/jquery-1.12.4.min.js"></script>
        <script src="./js/all.js"></script>
        <script src="materialize/js/materialize.min.js"></script>
        <link href="materialize/css/materialize.min.css" rel="stylesheet">     
        <link type="text/css" rel="stylesheet" href="materialize/css/materialize.min.css"  media="screen,projection"/>       
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      </head>

      <body>
        <div class="container">
          <div class="row">
            <div class="col s12">
               <nav>
                <div class="nav-wrapper teal lighten-2 hoverable">
                  <a  class="brand-logo"><span style="font-family:Microsoft JhengHei;"><font color="black">Forfun小舖</font></span></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down"> 
                    <li><a href="logHome2.php"><span style="font-family:Microsoft JhengHei;"><font color="black">回首頁</font></span></a></li>
                    <li><a href="logout.php"><span style="font-family:Microsoft JhengHei;"><font color="black">登出</font></span></a></li>
                  </ul>
                </div>
              </nav>
          </div></div></div>
<?php
ob_start();
require("include.php");
$a=$_SESSION["uAcc"];
$id=$_GET["id"];
echo "<form action='' method=POST>";
echo "評論內容:<input type=text name=text2>";
echo "<input type=submit value=評論>";
if(isset($_POST["text2"])){
$content=$_POST["text2"];
$sql="INSERT INTO message(message_id,user_account,pro_id,content) VALUES (NULL,'$a','$id','$content')";
mysqli_query($link,$sql);
echo "<script>alert('已成功新增')</script>";
header("refresh:1;url=productmessage.php");
}