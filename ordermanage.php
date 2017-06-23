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
                    <li><a href="logHome2.php"><span style="font-family:Microsoft JhengHei;"><font color="black">回首頁</font></span></a></li>
                    <li><a href="logout.php"><span style="font-family:Microsoft JhengHei;"><font color="black">登出</font></span></a></li>
                  </ul>
                </div>
              </nav>
                    

            </div></div></div>
<?php
include("include.php");
$sql="SELECT * FROM invoice";
$result=mysqli_query($link,$sql); 
echo "<table border=1>";
echo "<tr><td>inv_id</td><td>user_account</td><td>date1</td><td>pro_id</td><td>quantity</td><td>function</td></tr>";
while($row=mysqli_fetch_array($result)){
  echo "<tr>";
  echo "<td>".$row[0]."</td>";
  $id=$row["inv_id"];
  echo "<td>".$row[1]."</td>";
  echo "<td>".$row[2]."</td>";
  echo "<td>".$row[3]."</td>";
  echo "<td>".$row[4]."</td>";
  echo "<td><a href=deleteorder.php?id=$id>delete</a>";
  echo "------";
  echo "<a href=modiorder.php?id=$id>modify</a></td>";
  echo "</tr>";
}
echo "</table>";
echo "<br><a href=analysis.php>分析結果</a>";
