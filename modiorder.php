<?php session_start()?>
 <!DOCTYPE html>  
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
                    <li><a href="usermanage.php"><span style="font-family:Microsoft JhengHei;"><font color="black">管理用戶</font></span></a></li>
                    <li><a href="ordermanage.php"><span style="font-family:Microsoft JhengHei;"><font color="black">管理訂單</font></span></a></li>
                    <li><a href="mymail.php"><span style="font-family:Microsoft JhengHei;"><font color="black">我的信箱</font></span></a></li>
                    <li><a href="myfile.php"><span style="font-family:Microsoft JhengHei;"><font color="black">我的檔案</font></span></a></li>
                    <li><a href="logout.php"><span style="font-family:Microsoft JhengHei;"><font color="black">登出</font></span></a></li>
                  </ul>
                </div>
              </nav>
                    

            </div></div></div>
<?php
require("include.php");
$id=$_GET["id"];
$read=mysqli_query($link,"SELECT * FROM invoice WHERE inv_id=$id");
$row=mysqli_fetch_array($read);
$inv_id=$row[0];
$user_account=$row[1];
$date1=$row[2];
$pro_id=$row[3];
$quantity=$row[4];
echo "<form action='ordermod.php' method=POST>";
echo "<input type=hidden name=id value=$inv_id>";
echo "user_account:<input type=text name=user_account value=$user_account>";
echo "<br>date:<input type=date name=date1 value=$date1>";
echo "<br>pro_id<input type=text name=pro_id value=$pro_id>";
echo "<br>quantity<input type=text name=quantity value=$quantity>";
echo "<br><input type=submit value=modify>";
?>
