<?php
session_start();?>
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
            </div></div></div>
<?php 
require("include.php");
      $read1="SELECT * FROM product WHERE pro_id=1";
      $readresult1=mysqli_query($link,$read1);
      $result1=mysqli_fetch_array($readresult1);
      echo "<img src=https://s.yimg.com/xd/api/res/1.2/UuXDEfAOszjmybwHbzQX3Q--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD0yNjg7cT04NTtyb3RhdGU9YXV0bzt3PTQwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/fa8ad76d-9582-4615-bbc5-0bbb5f7c86e6.jpg width=300 height=300>";
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> id：".$result1[0];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 名稱：".$result1[1];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 簡介：".$result1[2];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 價格：".$result1[3];
      echo "<br><form action=car.php method=POST>數量<input type=text name=text1>";
      $read2="SELECT * FROM product WHERE pro_id=2";
      $readresult2=mysqli_query($link,$read2);
      $result2=mysqli_fetch_array($readresult2);
      echo "<img src=http://www.sunnygo.com.tw/website/uploads_product/website_128/P0012800062068_2_229688.jpg width=300 height=300>";
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> id：".$result2[0];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 名稱：".$result2[1];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 簡介：".$result2[2];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 價格：".$result2[3];
      echo "<br>數量<input type=text name=text2>";      
      $read3="SELECT * FROM product WHERE pro_id=3";
      $readresult3=mysqli_query($link,$read3);
      $result3=mysqli_fetch_array($readresult3);
      echo "<img src=https://s.yimg.com/xd/api/res/1.2/dcT0qSDE5ybVGucaWJEcmQ--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD00Mjc7cT04NTtyb3RhdGU9YXV0bzt3PTY0MA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/03ff81d5-1080-4d97-a81e-00e0ae9bc826.jpg width=300 height=300>";
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> id：".$result3[0];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 名稱：".$result3[1];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 簡介：".$result3[2];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 價格：".$result3[3];
      echo "<br>數量<input type=text name=text3>";
      $read4="SELECT * FROM product WHERE pro_id=4";
      $readresult4=mysqli_query($link,$read4);
      $result4=mysqli_fetch_array($readresult4);
      echo "<img src=http://www.freshop.com.tw/freshop_img/products_img/P_20140304174808/P_20140304174808.jpg width=300 height=300>";
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> id：".$result4[0];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 名稱：".$result4[1];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 簡介：".$result4[2];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 價格：".$result4[3];
      echo "<br>數量<input type=text name=text4>";
      $read5="SELECT * FROM product WHERE pro_id=5";
      $readresult5=mysqli_query($link,$read5);
      $result5=mysqli_fetch_array($readresult5);
      echo "<img src=https://s.yimg.com/xd/api/res/1.2/.XIaOEr6GkN859sJ7v98HA--/YXBwaWQ9eXR3YXVjdGlvbnNlcnZpY2U7aD0yNjc7cT04NTtyb3RhdGU9YXV0bzt3PTQwMA--/http://nevec-img.zenfs.com/prod/tw_ec05-7/6b630087-6e12-4709-b959-721a9fc87369.jpg width=300 height=300>";
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> id：".$result5[0];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 名稱：".$result5[1];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 簡介：".$result5[2];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 價格：".$result5[3];
      echo "<br>數量<input type=text name=text5>";
     
      $read6="SELECT * FROM product WHERE pro_id=6";
      $readresult6=mysqli_query($link,$read6);
      $result6=mysqli_fetch_array($readresult6);
      echo "<img src=http://www.saludmall.com/image/cache/data/vic/freshop/freshop-a05-500x500.jpg width=300 height=300>";
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> id：".$result6[0];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 名稱：".$result6[1];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 簡介：".$result6[2];
      echo "<span style='font-family:Microsoft JhengHei;font-size:1.1rem'> 價格：".$result6[3];
      echo "<br>數量<input type=text name=text6>";
      echo "<input type=submit value=加入購物車></form>";