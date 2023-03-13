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

function signup_user($u, $p, $e) { // inserts user
    global $conn;
    $current_date = date("Ymd");  // There is an example in Seminar 6.docx.
    $sql = "insert into Users values (NULL, '$u','$p','$e',$current_date)"; 
    $result = mysqli_query($conn, $sql);
    return $result;
}

function insertQuestion($q, $u) {
    global $conn;

    $current_date = date("Ymd");
    $sql = "insert into Questions values (NULL,'$q','$u',$current_date)";
    $result = mysqli_query($conn, $sql);
    return $result;
}

function searchQuestions($term) {
    global $conn;
    
    $sql = "SELECT * from Questions where Question LIKE '%$term%'";  // where Question is like 
    $result = mysqli_query($conn, $sql);

    $data = [];
    while($row = mysqli_fetch_array($result)){
        array_push($data, $row);
    }

    return $data;
}



?>     