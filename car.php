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
ob_start();
require("include.php");
if($_POST["text1"]!=null){
(int)$text1=$_POST["text1"];
$read1="SELECT * FROM product WHERE pro_id=1";
$readresult1=mysqli_query($link,$read1);
$result1=mysqli_fetch_array($readresult1);
echo "<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>id:".$result1[0]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>NAME:".$result1[1]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>PRICE:".$result1[3]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>QUANTITY:".$text1;
}else{(int)$text1=0;}

if($_POST["text2"]!=null){
(int)$text2=$_POST["text2"];
$read2="SELECT * FROM product WHERE pro_id=2";
$readresult2=mysqli_query($link,$read2);
$result2=mysqli_fetch_array($readresult2);
echo "<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>id:".$result2[0]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>NAME:".$result2[1]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>PRICE:".$result2[3]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>QUANTITY:".$text2;
}else{(int)$text2=0;}

if($_POST["text3"]!=null){
(int)$text3=$_POST["text3"];
$read3="SELECT * FROM product WHERE pro_id=3";
$readresult3=mysqli_query($link,$read3);
$result3=mysqli_fetch_array($readresult3);
echo "<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>id:".$result3[0]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>NAME:".$result3[1]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>PRICE:".$result3[3]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>QUANTITY:".$text3;
}else{(int)$text3=0;}

if($_POST["text4"]!=null){
(int)$text4=$_POST["text4"];
$read4="SELECT * FROM product WHERE pro_id=4";
$readresult4=mysqli_query($link,$read4);
$result4=mysqli_fetch_array($readresult4);
echo "<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>id:".$result4[0]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>NAME:".$result4[1]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>PRICE:".$result4[3]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>QUANTITY:".$text4;
}else{(int)$text4=0;}

if($_POST["text5"]!=null){
(int)$text5=$_POST["text5"];
$read5="SELECT * FROM product WHERE pro_id=5";
$readresult5=mysqli_query($link,$read5);
$result5=mysqli_fetch_array($readresult5);
echo "<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>id:".$result5[0]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>NAME:".$result5[1]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>PRICE:".$result5[3]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>QUANTITY:".$text5;
}else{(int)$text5=0;}

if($_POST["text6"]!=null){
(int)$text6=$_POST["text6"];
$read6="SELECT * FROM product WHERE pro_id=6";
$readresult6=mysqli_query($link,$read6);
$result6=mysqli_fetch_array($readresult6);
echo "<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>id:".$result6[0]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>NAME:".$result6[1]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>PRICE:".$result6[3]."<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>QUANTITY:".$text6;
}else{(int)$text6=0;}


$total=65*($text1+$text2+$text3+$text4+$text5+$text6);
echo "<br>-------------";
echo "<br><span style='font-family:Microsoft JhengHei;font-size:1.1rem'>total:".$total;
echo "<br><a href=product.php>back to change</a>";
echo "<br><form action=complete.php method=POST>";
echo "<input type=hidden name=text1 value=$text1>";
echo "<input type=hidden name=text2 value=$text2>";
echo "<input type=hidden name=text3 value=$text3>";
echo "<input type=hidden name=text4 value=$text4>";
echo "<input type=hidden name=text5 value=$text5>";
echo "<input type=hidden name=text6 value=$text6>";
echo "<input type=submit value=pay></form>";
?>