<!doctype html>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">
</head>
<Style>.hero-text {
  text-align: center;
  color: #333;
  font-size: 50px;
  margin-top: 1vh;
  font-weight: 90;
}</style>
<nav class="navbar navbar-expand-lg navbar-light " >
  <div class="container-fluid   bg-light-subtle text-light-emphasis" style="background-color: lightblue;">
    <img src="img/fav/favicon-32x32.png" alt="icon">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
       
    </div>
  </div>
</nav>
    
  
  <div class="container-md text-center mt-5 p-4 mb-3 border border-info"   style= "width: 430px ; background-color:skyblue;border-radius: 50px;">
    <form action="dbregister.php" method="POST">
     
    
    <img src="img/fav/logo/logo.png" width="80" height="80" alt="logo"    align="left">
    <h2 class=" hero-text"style="text-align: center" >Lets get Registered!</h2><br>

    <div class="mb-3 " style="width:380px;">
     
      <input type="email" class="text-center form-control" onkeyup="hideAlertBox()" id="email" name="email" placeholder="Email" required><br>
    <label for="firstName"> </label>
    <input type="text" class=" text-center form-control" id="firstName" name="firstName" placeholder="First Name"><br>
    
    <label for="lastName"> </label>
    <input type="text" class=" text-center form-control" id="lastName" name="lastName" placeholder="Last Name"><br>
    
    <label for="salary"> </label>
    <input type="number"class="  text-center form-control " id="salary" name="salary" placeholder="Salary"><br>
    
    <label for="phone"> </label>
    <input type="tel" class="  text-center form-control "id="phone" name="phone" placeholder="Phone"><br>
    
    <label for="dob">Date of Birth:</label>
    <input type="date" class=" text-center form-control"id="dob" name="dateOfBirth" placeholder="Dob"><br>
     
     
    <label for="male">Male:</label>
    <input type="radio" id="male" name="gender" value="male">
    
    <label for="female">Female:</label>
    <input type="radio" id="female" name="gender" value="female" checked><br><br>

    
    
    <!-- Add more fields for other employee information -->
    
    <input style="background-color:royalblue;color:whitesmoke" class="btn btn-primary fs-8fw-light" type="submit" value="Register">
    </div>
  
    </form>
    <?php

        if(isset($_GET['error'])) {
          echo('
           <div id="alertbox" class="alert alert-danger mt-3" role="alert">
              User with this email already exists
          </div>');
        }
        
        ?>

 


  </div>
  <script>
      function hideAlertBox() {
        const alertBox = document.getElementById("alertbox");
        alertBox.style.display = "none";
      }
    </script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body> 
</html>
    
    
    