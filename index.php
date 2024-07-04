<!DOCTYPE html>
 
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">

 
<style>

    .color { background-color: skyblue;
      
    }
     .hero-text {
            text-align: center;
            color: #333;
            font-size: 4rem;
            margin-top: 10vh;
            margin-bottom:10vh ;
            font-weight: 90;
        }
    .carousel-item {
        text-align: center;
    }

    .carousel-caption {
        background-color: rgba(0, 0, 0, 0.5);
        padding: 10px;
    }
</style>
 
</head>
<body class="color" >
<?php
      include_once('nav-common.php');
    ?>
    
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class=" hero-text  " >ONE-STOP EMPLOYEE CLOUD</h1>
        <h5 style="text-align: center;"> "Empowering Your Workforce with a Single Cloud Solution"</h5>
        <p style="text-align: center;">  "Your One-Stop Solution for Employee Data Management"</p>
      </div>
    </div>
  </div>

  <div class="container">
    <div id=" employeeCarousel" class="carousel slide carousel-fade mt-5" data-bs-ride="carousel" >
      <div class="carousel-indicators">
          <button type="button" data-bs-target="# employeeCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#employeeCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#employeeCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="row">
    <div class="col">
        <div id="employeeCarousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/fav/carousels/1.png" class="d-block w-100" alt="Employee Assistance Program (EAP)">
                    <div class="carousel-caption">
                        <h3>Employee Assistance Program (EAP)</h3>
                        <p>Offer a confidential and free assistance program for employees facing mental health or substance abuse issues, providing support and resources to help them overcome challenges.</p> 
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/fav/carousels/2.png" class="d-block w-100" alt="Health and Wellness">
                    <div class="carousel-caption">
                        <h3>Health and Wellness</h3>
                        <p>Provide access to healthcare benefits, fitness programs, and mental health resources to promote employee health and well-being.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="img/fav/carousels/3.png" class="d-block w-100" alt="Employee Training">
                    <div class="carousel-caption">
                        <h3>Employee Training</h3>
                        <p>Provide regular training and development opportunities for employees to enhance their skills, knowledge, and career prospects.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#employeeCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#employeeCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</div><br><hr>


<div class="row">
    <div class="col-md-4">
        <div class="card">
            <img src="img/card/1.png" class="card-img-top" alt="Cloud Storage">
            <div class="card-body">
                <h5 class="card-title">Cloud Storage</h5>
                <p class="card-text">Provide secure and reliable cloud storage options for employees to store and access their files from anywhere.</p>
            </div>
        </div>
    </div><br><br><br>
    <div class="col-md-4">
        <div class="card">
            <img src="img/card/2.png" class="card-img-top" alt="Collaboration Tools">
            <div class="card-body">
                <h5 class="card-title">Collaboration Tools</h5>
                <p class="card-text">Offer collaboration tools such as shared folders, document sharing, and real-time collaboration features to facilitate teamwork and collaboration.</p>
            </div>
        </div>
    </div><br><br><br>
    <div class="col-md-4">
        <div class="card">
            <img src="img/card/3.png" class="card-img-top" alt="Data Backup">
            <div class="card-body">
                <h5 class="card-title">Data Backup</h5>
                <p class="card-text">Implement regular data backups to ensure that employees' files and data are protected against loss or corruption.</p>
            </div>
        </div>
    </div><hr>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
  </body>
</html>