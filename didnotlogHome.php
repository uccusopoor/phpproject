<?php session_start();
if(isset($_SESSION["uAcc"]))
{
  header('Location:login.php');
}
else
{
  ?>  
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
                  <a  class="brand-logo"><span style="font-family:Microsoft JhengHei;"><font color="blue">Forfun小舖</font></span></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">                   
                    <li><a href="myfile.php"><span style="font-family:Microsoft JhengHei;"><font color="black">我的檔案</font></span></a></li>
                    <li><a href="login.php"><span style="font-family:Microsoft JhengHei;"><font color="black">回首頁</font></span></a></li>
                  </ul>
                </div>
              </nav>
                    

            </div>
            <center><img src="hipsterlogogenerator_1496404889795.jpg"></center>

             <div class="col s6">
              <div class="card-panel teal lighten-2 flow-text card-panel hoverable">
                <span style="font-family:Microsoft JhengHei;"><center>來罐果汁為生活添加FUN!!</center></span>
              </div>
               <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="image2.gif"> 
                    <div class="caption center-align">
                    </div>
                  </li>
                  <li>
                    <img src="image.gif"> 
                    <div class="caption left-align">
                    </div>
                  </li>
                  <li>
                    <img src="下載.jpg"> 
                    <div class="caption left-align">
                    </div>
                  </li>

                  <li>
                    <img src="524386513cc79.jpg"> 
                    <div class="caption left-align">
                    </div>
                  </li>

                </ul>
               </div>
              </div>

            <div class="col s6">
              <div class="card-panel teal lighten-2 flow-text card-panel hoverable">
              <span style="font-family:Microsoft JhengHei;"><center>您的資訊</center></span>
              </div>
              <form action="" method="post">
              <span style="font-family:Microsoft JhengHei;font-size:1.3rem">請輸入帳號</span>:<input type="text" name="uAcc"><br/>
              <span style="font-family:Microsoft JhengHei;font-size:1.3rem">請輸入密碼</span>:<input type="password" name="uPwd"><br/>
              <button class="btn waves-effect waves-light" type="submit" name="action"><span style="font-family:Microsoft JhengHei;font-size:1.1rem">提交</span></button>
              <button class="btn waves-effect waves-light" type="reset" name="action"><span style="font-family:Microsoft JhengHei;font-size:1.1rem">重設</span></button>
        <?php
        ob_start();
       

        if(isset($_POST["uAcc"])){
        $uAcc=$_POST["uAcc"];
        $uPwd=$_POST["uPwd"];
        require('include.php');

        $read="SELECT * FROM user WHERE user_account='$uAcc' AND user_pwd='$uPwd'";
        $readresult=mysqli_query($link,$read);
        $result=mysqli_fetch_array($readresult);
        $rows=mysqli_num_rows($readresult);
    
        if($rows){
        // echo "Success";
        $_SESSION["check"]="yes";
        $_SESSION["uAcc"]=$uAcc;
        $_SESSION["authority"]=$result[6];

        header('Location:login.php');
        }
    
        else{
           echo "<script>alert('帳密錯誤，按【確認】鍵後前往登入頁面')</script>";
           header('refresh:1; url="login.php"');
          }
        }
        ?>
              <a class="waves-effect waves-light btn" href="register.php"><span style="font-family:Microsoft JhengHei;font-size:1.1rem">前往註冊</span></a>
              </form>
              </br>
              




            </div>
          </div>
        </div>


        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      </body>
    </html>
  <?php
}
?>


