 <?php session_start()?>  
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
            </div>
            <center><img src="hipsterlogogenerator_1496404889795.jpg"></center>

             <div class="col s6">
              <div class="card-panel teal lighten-2 flow-text card-panel hoverable">
                <span style="font-family:Microsoft JhengHei;"><center>一天一果汁 帶您遠離醫生</center></span>
              </div>
               <div class="slider">
                <ul class="slides">
                  <li>
                    <img src="image.gif"> 
                    <div class="caption center-align">
                    </div>
                  </li>
                  <li>
                    <img src="下載.jpg"> 
                    <div class="caption left-align">
                    </div>
                  </li>
                  <li>
                    <img src="image2.gif"> 
                    <div class="caption left-align">
                    </div>
                  </li>

                  <li>
                    <img src="20150428161843832.jpg"> 
                    <div class="caption left-align">
                    </div>
                  </li>

                </ul>
               </div>
              </div>

            <div class="col s6">
              <div class="card-panel teal lighten-2 flow-text card-panel hoverable">	   
	      <a class="waves-effect waves-light btn" href="product.php">產品清單</a>
	      <a class="waves-effect waves-light btn" href="productmessage.php">產品評論</a>
              <span style="font-family:Microsoft JhengHei;"><center>您的資訊</center></span>
              </div>
              <form action="" method="post">
              <span style="font-family:Microsoft JhengHei;font-size:1.3rem">哈囉。使用者：<?php echo $_SESSION["uAcc"]?></span>
              <span style="font-family:Microsoft JhengHei;font-size:1.3rem"></span>
	      
              </form>
              </br>
              
            </div>
          </div>
        </div>


        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="materialize/js/materialize.min.js"></script>
      </body>
    </html>
