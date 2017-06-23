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
            </div></div></div></body></html>
<?php
require("include.php");
echo "</table>";
$sql="SELECT invoice.pro_id,product.pro_name,count(*) as total FROM invoice,product WHERE invoice.pro_id=product.pro_id GROUP BY pro_id ORDER BY total DESC LIMIT 1 ";
$result1=mysqli_query($link,$sql);
$row=mysqli_fetch_array($result1);
$sql2="SELECT product.pro_id,product.pro_name ,COUNT(*),sum(quantity) as total FROM invoice,product WHERE invoice.pro_id=product.pro_id GROUP BY pro_id ORDER BY total DESC";
$result2=mysqli_query($link,$sql2);
$row2=mysqli_fetch_array($result2);
$sql3="SELECT invoice.user_account, COUNT(*) FROM invoice GROUP BY user_account ORDER BY COUNT(*) DESC";
$result3=mysqli_query($link,$sql3);
$row3=mysqli_fetch_array($result3);
echo "<br>產品最常被買:".$row[1];
echo "<br>商品賣出最多:".$row2[1];
echo "<br>最常購買客戶:".$row3[0];
