<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: ../login.php');
        exit();
    }
    if(isset($_GET['listName']) && isset($_GET['cdate'])){
        $lname=$_GET['listName'];
        $cdate=$_GET['cdate'];
    
    }

?>
   

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>One Stop. Employee Cloud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!--Favicons-->
    <link rel="apple-touch-icon" sizes="180x180" href="../img/fav/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../img/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../img/fav/favicon-16x16.png">
    <link rel="manifest" href="img/fav/site.webmanifest">
    <style>
      .hero-text {
            text-align: center;
            color: #333;
            font-size: 4rem;
             
            font-weight: 100;
        }
    </style>
</head>
  <body >

    
      <div class="container-md text-center mt-5 border " style="max-width: 700px; border-width: 100px;">
        <div class="hero-text"> <?php echo($lname)?> </br> </div>
        <div><span class="text-secondary fs-5 mt-0 p-0"><?php echo($cdate)?></div>
     
        <form action="dbitems.php?listName=<?php echo ($lname); ?>&cdate=<?php echo ($cdate); ?>" method="POST" class="row g-3 mt-1 ">
            <div class="col-10 ">
                <input type="text" class="form-control" id="title" name="description" placeholder="Description" required/>
                 
            </div>      
            <div class="col-1">
            <button type="submit" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
         <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3z"/>
          </svg></button>
            
            </div>

            <div class="col-1">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#searchModal">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>

        </button>
            </div>
        </form>
<!-- Modal -->
<div class="modal fade " id="searchModal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      
      <div class="modal-body">
        <form action="" method="GET">
          
        <div class="input-group mb-3">
        <input type="text" name="search" class="form-control " placeholder="Spotlight Search" aria-label="Spotlight Search" aria-describedby="basic-addon2">
            <button class="input-group-text btn btn-primary" id="basic-addon2" type="submit">Search</button>
        </div>
                
        </form>
      </div>
    </div>
  </div>
  </div>
  <div style="text-align:left;">
  <ul class="list-group">
             
            
                <?php
                // Connect to the MySQL database
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "aiphp-b1";
                $email=$_SESSION['userloggedin'];
                
                $conn = new mysqli($servername, $username, $password, $dbname);

                // Check connection
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                  //Check if a search request is made
                  if(isset($_GET['search'])){
                    $search=$_GET['search'];
                    if($search==''){
                        //All the records
                        $sql = "SELECT ItemId,Description, Status  FROM item WHERE listName = '$lname' ";
                    }
                    $sql = "SELECT ItemId, Description, Status FROM item WHERE email = '$email' AND Description LIKE '%$search%' ORDER BY createdDate DESC";
                }else{
                    // SQL query to select the desired columns from the "Employee" table
                    $sql = "SELECT ItemId, Description, Status FROM item WHERE listName = '$lname'  ";
                }

                // Execute the query
                $result = $conn->query($sql);

                // Check if the query was successful
                if ($result) {
                    // Fetch the rows
                    while ($row = $result->fetch_assoc()) {
                        
                        // Display the data in table rows
                        echo ('<li class="list-group-item fs-4 fw-light">
        
                        
        <input class="form-check-input me-1" type="checkbox" value="" id="' . $row['ItemId'] . '" onchange="updateStatus(' . $row['ItemId'] . ')"' . ($row['Status'] == '1' ? ' checked' : '') . '/>
        <label class="form-check-label ' . ($row['Status'] == '1' ? 'text-decoration-line-through' : '') . '" for="' . $row['ItemId'] . '">' . $row["Description"] . '</label>
    
                 ');
                        
                 echo('<a class="btn btn-outline-danger" href="dbitems.php?delid=' . $row['ItemId'] . '&listName=' . urlencode($lname) . '&cdate=' . urlencode($cdate) . '">X</a>'); 
                     
                    }
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }

                // Close the connection
                $conn->close();
                ?>

            </ul>
            </div>
    </div>


     <!-- Item Status Update Function -->
     <script>
        function updateStatus(ItemId) {

            // Get the checkbox element
    var checkbox = document.getElementById(ItemId);

// Get the label element
var label = document.querySelector(`label[for="${ItemId}"]`);

// Check if the checkbox is checked
if (checkbox.checked) {
    // Add the strike-through class to the label
    label.classList.add('text-decoration-line-through');
} else {
    // Remove the strike-through class from the label
    label.classList.remove('text-decoration-line-through');
}

            var xhr = new XMLHttpRequest();
            xhr.open('POST', 'dbupdatestatus.php', true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    // Handle the response from the server
                    var response = xhr.responseText;
                    console.log(response);
                }
            };
            xhr.send('ItemId=' + ItemId);
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

   






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>


</body>

</html>