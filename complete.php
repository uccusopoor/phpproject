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
                    <li><a href="register.php"><span style="font-family:Microsoft JhengHei;"><font color="black">註冊</font></span></a></li>                                     
                    <li><a href="myfile.php"><span style="font-family:Microsoft JhengHei;"><font color="black">我的檔案</font></span></a></li>
                    <li><a href="logout.php"><span style="font-family:Microsoft JhengHei;"><font color="black">登出</font></span></a></li>
                  </ul>
                </div>
              </nav>
            </div></div></div></body></html>
<?php 
require("include.php");
$a=$_SESSION["uAcc"];
echo $a;
$text1=$_POST["text1"];
$sql1="INSERT INTO invoice(inv_id,user_account,date1,pro_id,quantity) VALUES(NULL,'$a',now(),'1','$text1')";
mysqli_query($link,$sql1);
if($_POST["text2"]>0){
$text2=$_POST["text2"];
$sql2="INSERT INTO invoice(inv_id,user_account,date1,pro_id,quantity) VALUES(NULL,'$a',NOW(),'2','$text2')";
mysqli_query($link,$sql2);
}
if($_POST["text3"]>0){
$text3=$_POST["text3"];
$sql3="INSERT INTO invoice(inv_id,user_account,date1,pro_id,quantity) VALUES(NULL,'$a',now(),'3','$text3')";
mysqli_query($link,$sql3);
}
if($_POST["text4"]>0){
$text4=$_POST["text4"];
$sql4="INSERT INTO invoice(inv_id,user_account,date1,pro_id,quantity) VALUES(NULL,'$a',now(),'4','$text4')";
mysqli_query($link,$sql4);
}
if($_POST["text5"]>0){
$text5=$_POST["text5"];
$sql5="INSERT INTO invoice(inv_id,user_account,date1,pro_id,quantity) VALUES(NULL,'$a',now(),'5','$text5')";
mysqli_query($link,$sql5);
}
if($_POST["text6"]>0){
$text6=$_POST["text6"];
$sql6="INSERT INTO invoice(inv_id,user_account,date1,pro_id,quantity) VALUES(NULL,'$a',NOW(),'6','$text6')";
mysqli_query($link,$sql6);
}
header("Refresh:5 url=LogHome1")
?>