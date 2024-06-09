<!DOCTYPE html>
<html lang="en">
<head style= "width: 500px ; background-color: rgb(4, 187, 238)">
  <title>Sign in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!--Favicons-->
  <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
  <link rel="manifest" href="img/fav/site.webmanifest">
  <style>

.hero-text {
  text-align: center;
  color: #333;
  font-size: 50px;
  margin-top: 1vh;
  font-weight: 90;
}
</style>
    
</head>
 <body style="background-color:  skyblue;"> 
  
  <?php
      include_once('nav-common.php');
    ?>
  <div class="container-md text-center mt-5 p-4 mb-3  "   style= "width: 430px ; background-color:skyblue;border-radius: 50px;">   
    <form action="dblogin.php" method="POST" class=".mb-4 .mt-5 " style=" width: 300px  ;text-align: center; ">
      
      <h3   class="hero-text" style="text-align: center">Sign in!</h3>
    <label for="email"  ></label>
    <input type="email" class="text-center form-control " style="width:300px; ;" id="email" name="email" placeholder="Email" required><br>
    
    <label for="password"></label>
    <input type="password" class="text-center form-control  " id="password" name="pass" placeholder="Password"><br>
  
    <input type="checkbox" id="rememberMe">
    <label for="rememberMe" style="font-size:small;">
      Remember Me 
      <i class="fa fa-check-square" ></i>
    </label><br><br>
    <input style="background-color:royalblue ;color:whitesmoke;font-size: medium ; border-radius: 100px;" class="btn btn-primary fs-8fw-light"type="submit" value="Login" ><br><br><br>
    
    </div>
  </body>
  </form>
  <?php

if(isset($_GET['error'])) {
  echo('
   <div id="alertbox" class="alert alert-danger mt-3" style="height:50px;  text-align:center; align:center;" role="alert">
      Email or Password is incorrect
  </div>');
}

?>
</html>