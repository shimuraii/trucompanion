<?php
// main database host for MAMP Program
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'People';
$db_port = 8889;
$conn = mysqli_connect($db_host, $db_user ,$db_password, $db_db);

function user_valid($e, $p) {  // It returns a Boolean value.
    global $conn;
    $sql = "select Username, Password from Users where Username = '$e' AND Password = '$p'";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0)
       return True;
    else
       return False;
}

function user_exists($e) {  // It returns a Boolean value.
    global $conn;
    $sql = "select * from Users where Email = '$e'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)>0)
         return true;
    else 
         return false;

}
function get_email($u){
    global $conn;
    
    $sql = "SELECT Email from Users where Username LIKE '$u'";  // where Question is like 
    $result = mysqli_query($conn, $sql);

    $data = [];
    while($row = mysqli_fetch_array($result)){
        array_push($data, $row);
    }

    return $data;
}
function get_alle(){
    global $conn;
    
    $sql = "SELECT Email from Users";  // where Question is like 
    $result = mysqli_query($conn, $sql);

    $data = [];
    while($row = mysqli_fetch_array($result)){
        array_push($data, $row);
    }

    return $data;
}
function find_times($e){
    global $conn;
    
    $sql = "SELECT Timeslot from Schedule where Email LIKE '$e'";  // where Question is like 
    $result = mysqli_query($conn, $sql);

    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($data, $row);
    }

    return $data;
}


?>     