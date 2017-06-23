<!DOCTYPE html>
  <html>
    <head>
      
      <link href="materialize\css\materialize.min.css" rel="stylesheet">
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>

    <body>
      <div class="container">
        <div class="row">
      

          <div class="col s12 m4 l2"><p></p></div>
          <div class="col s12 m4 l8">
            <div class="card-panel teal lighten-2 flow-text card-panel hoverable">
            <span style="font-family:Microsoft JhengHei;"><center>開始註冊囉</center></span>
            </div>
            <form action="" method="post">
            <span style="font-family:Microsoft JhengHei;font-size:1.3rem">請輸入帳號(第一個字不為數字，只接受大小寫字母、數字及底線)</span>:<input type="text" name="uAcc"><br/>
            <span style="font-family:Microsoft JhengHei;font-size:1.3rem">請輸入密碼(至少一個英文不分大小寫及一個數字 , 6~10位)</span>:<input type="password" name="uPwd"><br/>
            <span style="font-family:Microsoft JhengHei;font-size:1.3rem">姓名：<input type="text" name="Name"><br/>
            <span style="font-family:Microsoft JhengHei;font-size:1.3rem">手機：<input type="text" name="phone"><br/>
            <span style="font-family:Microsoft JhengHei;font-size:1.3rem">地址：<input type="text" name="address"><br/>
            <span style="font-family:Microsoft JhengHei;font-size:1.3rem">Email：<input type="text" name="email"><br/>
            <?php 
            
            ?>

            <div style="margin:0 auto;width:420px;font-size:1rem">
              <button class="btn waves-effect waves-light" type="submit" name="action">提交</button>
              <button class="btn waves-effect waves-light" type="reset" name="action">重設</button>
              <a class="waves-effect waves-light btn" href="login.php">已經註冊過了?前往登入</a>
            </div>
            <div class="col s12 m4 l2"><p></p></div>
 

          <?php
              if(isset($_POST["uAcc"])){
              $uAcc=$_POST["uAcc"];
              $uPwd=$_POST["uPwd"];
              $name=$_POST["Name"];
              $address=$_POST["address"];
              $phone=$_POST["phone"];
              $email=$_POST["email"];
              require('include.php');



              $add="INSERT INTO user(user_account,user_pwd,user_name,user_phone,user_address,user_authority,user_email)
              VALUES('$uAcc','$uPwd','$name','$phone','$address', '1','$email')";
              $check="SELECT * FROM user WHERE  user_account='$uAcc'";
              $readresult=mysqli_query($link,$check);
              $result=mysqli_fetch_array($readresult);
              if ($result[0]=="$uAcc"){
              echo "<script>alert('帳號已被使用，按【確認】鍵後跳轉至註冊頁面')</script>";
              //echo  "<br/>";
  		header(     'refresh:1; url="register.php"');
              }
              else if(preg_match('/^[a-zA-Z]\w*$/',$uAcc) == false ) {
              echo "帳號錯誤";
              }
              else if(preg_match('/^(?!.*[^a-zA-Z0-9])(?=.*\d)(?=.*[a-zA-Z]).{5,10}$/',$uPwd) == false ) {
              echo "密碼錯誤";
              }
              else if(preg_match('/^09[0-9]{8}$/',$phone) == false ) {
              echo "手機錯誤";
              }
              else if(preg_match('/^([.0-9a-z]+)@([0-9a-z]+).([.0-9a-z]+)$/',$email) == false ) {
              echo "信箱錯誤";
              }
              else{
              mysqli_query($link,$add);
              echo "<script>alert('註冊完成，按【確認】鍵後跳轉至登入頁面')</script>";
              //echo  "<br/>";
  header(     'refresh:1; url="login.php"');
              }
            }
          ?>
            </form>
          </div>
        </div>
      </div>
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
