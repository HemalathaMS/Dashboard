
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>

<link href='https://fonts.googleapis.com/css?family=Raleway:300,200' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">


      <link rel="stylesheet" href="css/style.css">


</head>

<body>

  <h4 style="color:red;font-size:12px;font-weight:bold;z-index:1000;text-align:center;padding-top:10%;">
            <?php if(isset($_GET['error'])){
              echo $_GET['error'];
            } ?>
  </h4>
<form class="form" action="login.php" method="post">

  <div class="forceColor"></div>
  <div class="topbar">
    <div class="spanColor"></div>
    <input type="text" class="input" id="username" placeholder="Username" name="user_name" value=""/>
  </div>
  <div class="topbar">
    <div class="spanColor"></div>
    <input type="password" class="input" id="password" placeholder="Password" name="pass_word" value=""/>
  </div>
  <input type="submit" class="submit" id="submit" value="Login">
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    </body>

</html>
