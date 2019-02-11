<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>


<link href="css/jquery.dataTables.min.css" rel="stylesheet" type="text/css">
 <script src="js/jquery.dataTables.min.js"></script>  
    <!-- Bootstrap -->
<link rel="stylesheet" href="css/bootstrap.min.css">


    <script src="js/bootstrap.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <style type="text/css">
    body {
  background: #2b5876;
  background: -webkit-linear-gradient(to right, #2b5876, #4e4376);
  background: linear-gradient(to right, #2b5876, #4e4376);
}

.form-group {
  margin-top: 15px;
}

.login-form {
  font-family: Arial, Helvetica, sans-serif;
  width: 346px;
  text-align: center;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  margin: auto;
  position: absolute;
}

.login-form .login-username,
.login-form .login-password,
.login-form .login-submit {
  -webkit-appearance: none;
  height: 45px;
  border-radius: 4px;
  border: none;
  width: 301px;
  display: block;
  box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 5px;
  font-size: 13px;
}

.login-form label {
  height: 45px;
  width: 45px;
  background: white;
  display: inline-block;
  border-radius: 0 4px 4px 0;
  margin-left: -2px;
}

.login-form label > svg {
  width: 15px;
  height: 100%;
  text-align: center;
  fill: #2b5876;
  vertical-align: middle;
}

.login-form .login-username, .login-form .login-password {
  padding: 0 20px 0 20px;
  float: left;
  border-radius: 4px 0 0 4px;
  box-sizing: border-box;
}

.login-form .login-submit {
  color: white;
  background: #2ecc71;
  width: 100%;
  cursor: pointer;
  font-size: 14px;
  font-weight: bold;
}

.login-form .login-submit:hover, .login-form .login-submit:active {
  background: #27ae60;
  outline: none;
}

.login-form input:focus, .login-form input:focus {
  outline: 0;
}

.login-form h1, .login-form p, .login-form a {
  color: white;
  margin: 10px 0 10px 0;
  text-decoration: none;
}

.login-form h1 {
    font-weight: 100;
    margin-bottom: 20px;
    font-size: 42px;
    font-family: 'Open Sans', sans-serif;
}

.login-form .login-motd {
  font-size: 14px;
  width: 300px;
  margin: 0 auto 20px auto;
}

.login-form .login-forgotpassword {
  font-size: 12px;
  margin-top: 18px;
  display: block;
}

.login-form .login-forgotpassword:hover,
.login-form .login-forgotpassword:active{
  text-decoration: underline;
}


  </style>
  <body>
  
 
<?php 

include("connection.php");

?>
<div class="login-form">
  <h1>POUND FOR POUND!</h1>

<form action="save_data.php" method="POST">

  <center>
   <b style="color: red;">
  <?php 

          if(isset($_SESSION['attempt_counter'])){
            echo "You have ".$_SESSION['attempt_counter']." tries left !";
          }
    ?> 
     </b>
     </center>
  <div class="form-group">
    <input id="username" class="login-username" type="text" name="username" placeholder="Username" required />
    <label for="username">
      <svg>
        <use xlink:href="#user"/>
      </svg>
    </label>
  </div>
  <div class="form-group">
    <input id="password" class="login-password" type="password" name="password" placeholder="Password" required />
    <label for="password">
      <svg>
        <use xlink:href="#padlock"/>
      </svg>
    </label>
  </div>
  <div class="form-group">
    <input class="login-submit" name="login" type="submit" value="Log in" />
  </div>
</form>
<!--   <a href="#" class="login-forgotpassword">Forgot Password?</a> -->
</div>
<svg>
  <symbol id="user" viewBox="0 0 1792 1792">
    <path d="M1329 784q47 14 89.5 38t89 73 79.5 115.5 55 172 22 236.5q0 154-100 263.5t-241 109.5h-854q-141 0-241-109.5t-100-263.5q0-131 22-236.5t55-172 79.5-115.5 89-73 89.5-38q-79-125-79-272 0-104 40.5-198.5t109.5-163.5 163.5-109.5 198.5-40.5 198.5 40.5 163.5 109.5 109.5 163.5 40.5 198.5q0 147-79 272zm-433-656q-159 0-271.5 112.5t-112.5 271.5 112.5 271.5 271.5 112.5 271.5-112.5 112.5-271.5-112.5-271.5-271.5-112.5zm427 1536q88 0 150.5-71.5t62.5-173.5q0-239-78.5-377t-225.5-145q-145 127-336 127t-336-127q-147 7-225.5 145t-78.5 377q0 102 62.5 173.5t150.5 71.5h854z"/>
  </symbol>
  <symbol id="padlock" viewBox="0 0 1792 1792">
    <path d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z"/>
  </symbol>
</svg>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->

  </body>
</html>