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
<form action='' method=POST>
產品id:<input type=text name=text1>
<input type=submit value=查詢>
</form>
<?php
ob_start();
require("include.php");
if(isset($_POST["text1"])){
  switch($_POST["text1"]){
    case '1': $result=mysqli_query($link,"SELECT * FROM message WHERE pro_id=1");
    break;
    case '2': $result=mysqli_query($link,"SELECT * FROM message WHERE pro_id=2");
    break;
    case '3': $result=mysqli_query($link,"SELECT * FROM message WHERE pro_id=3");
    break;
    case '4': $result=mysqli_query($link,"SELECT * FROM message WHERE pro_id=4");
    break;
    case '5': $result=mysqli_query($link,"SELECT * FROM message WHERE pro_id=5");
    break;
    case '6': $result=mysqli_query($link,"SELECT * FROM message WHERE pro_id=6");
    break;
  }
echo "<table border=1>";
echo "<tr><td>留言者</td><td>評論</td></tr>";
while($row=mysqli_fetch_assoc($result)){
  $id=$row["pro_id"];
  echo "<td>".$row["user_account"]."</td>";
  echo "<td>".$row["content"]."</td>";
  echo "</tr>";
  }
echo "<a href=addcontent.php?id=$id>新增評論</a>";
}