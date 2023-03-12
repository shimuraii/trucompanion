<?php
// test to see if this works

// assignment of variable names
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$bio = $_POST['bio'];

// main database host for MAMP Program
$db_host = 'localhost';
  $db_user = 'root';
  $db_password = 'root';
  $db_db = 'People';
  $db_port = 8889;
  $conn = mysqli_connect($db_host, $db_user ,$db_password, $db_db);
// connection with mysqli
  $mysqli = new mysqli($db_host, $db_user, $db_password, $db_db);
// if any error
if (mysqli_connect_errno()) {
   printf("Connect failed: %s\n", mysqli_connect_error());
   exit();
}
 
// sql statement we wanna do :)
  $sql = "INSERT INTO `Users` (`ID`, `Name`, `Email`, `Password`, `bio`) VALUES (NULL, '".$name."', '".$email."', '".$password."', '".$bio."');";

  if (mysqli_query($conn, $sql)) {
    if (isset($_POST['dates'])) {
        foreach($_POST['dates'] as $value){
            $sql = "INSERT INTO `Schedule` (`Email`, `Timeslot`) VALUES ('".$email."', '".$value."');";
            if (mysqli_query($conn, $sql)) {

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    $msg = "<div class='alert alert-success' role='alert'>Success!</div>"; 
    include 'index.php';
    mysqli_close($conn);
    exit();
  }

  else {
    $msg = "<div class='alert alert-danger' role='alert'>Error</div>";
    include 'register.php';
    mysqli_close($conn);
    exit();
  }
  
?>
