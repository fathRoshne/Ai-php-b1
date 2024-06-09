


<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: skyblue;">
  <div class="container-fluid bg-light-subtle text-light-emphasis" style="background-color: skyblue;">
    <img src="img/fav/favicon-32x32.png" alt="icon">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <?php
      if(basename($_SERVER['PHP_SELF']) === 'index.php') {
         
      }else{
          echo ' <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>';
      }
  ?>
 
  
  
        
</ul>
<form class="d-flex" role="search">
<?php 
      if(basename($_SERVER['PHP_SELF']) === 'register.php') {
          echo'<a class="btn btn-primary" href="register.php">Register</a>&ensp;';
      }else{
          echo'<a class="btn btn-outline- primary" href="register.php">Register</a>&ensp;';
      }
  ?>

  <?php 
      if(basename($_SERVER['PHP_SELF']) === 'login.php') {
          echo'<a class="btn btn-primary" href="login.php">Login</a>';
      }else{
          echo'<a class="btn btn-outline-primary" href="login.php">Login</a>';
      }
  ?>
  
  
</form>
    </div>
  </div>
</nav>
