<?php
    session_start();
    if(!isset($_SESSION['userloggedin'])) {
        header('Location: ../login.php');
        exit();
    }
?>



<?php
    // Enable error reporting
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Connect to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "aiphp-b1";

    // Check if the form has been submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Get the form data
        $createdName = $_POST['listName'];
        $caption = $_POST['caption'];
        $email=$_SESSION['userloggedin'];
         
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  // Prepare and execute the SQL statement
  $stmt = $conn->prepare("INSERT INTO task (listName, caption,email) VALUES (?, ?,?)");
  $stmt->bind_param("sss", $createdName, $caption,$email);

     
  if ($stmt->execute()) {
    header('Location:task.php?inserted');
    exit();
} else {
    echo "Error: " . $stmt->error;
}

// Close the statement and connection
$stmt->close();
$conn->close();


 }
  //Check if a delete request is made
  if(isset($_GET['delid'])){
    $delid = $_GET['delid'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "DELETE FROM task WHERE id = $delid";
    if($conn->query($sql) === TRUE){
        header('Location:task.php?deleted');
        exit();
    };
    $conn->close();
}
 ?>