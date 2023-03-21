<?php
include 'model.php';
// if page is empty, include starter
if (empty($_POST['page'])) {
    $display_modal_window = 'none';
    include ('starterpage.php');
    exit;
}
$page = $_POST['page'];

if ($page == 'starterpage') 
{
    $command = $_POST['command'];
    switch ($command) {
    case 'SignIn':
        $username = $_POST['username'];
        $password = $_POST['password'];
        //When the user is valid,
        if (user_valid($username, $password)) {  // is_valid() is in model.php
            session_start();
            $_SESSION['signedin'] = 'YES';  // session variable - for commands coming from MainPage
            $_SESSION['username'] = $username;  // session variable - for command coming from MainPage
            $email = get_email($username);
            
            $email = json_encode($email);
            $array = json_decode($email, true);
            $msg = $array[0]['Email'];

            $times = find_times($msg);

            $times = json_encode($times);
            $arr = json_decode($times, true);
            $user_s = [];
            
            foreach ($arr as $element) {
                foreach ($element as $key => $value) {
                    array_push($user_s, $value);
                }
            }
            $_SESSION['user_s'] = $user_s;
            
            $_SESSION['email'] = $msg;
            
            include('home.php');
        } 
        // When invalid
        else {
            $msg = "<div class='alert alert-danger' role='alert'>Error -  Account credentials are wrong or it does not exist.</div>";
            include('starterpage.php');
        }
        break;
    case 'register':
        include('register.php');
    }
}

else if ($page == 'register'){
    if ($_POST['command'] = 'register'){
            // test to see if this works
        // assignment of variable names
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $bio = $_POST['bio'];
        $sm = $_POST['sm'];

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
        $sql = "INSERT INTO `Users` (`ID`, `Username`, `Name`, `Email`, `Password`, `bio`, `sm`) VALUES (NULL, '".$username."', '".$name."', '".$email."', '".$password."', '".$bio."', '".$sm."');";

        if (mysqli_query($conn, $sql)) {
            if (empty($_POST['dates'])) {
                $msg = "<div class='alert alert-danger' role='alert'>Error, no dates registered!</div>";
                include 'register.php';
                mysqli_close($conn);
                exit();
            }
            else{
                foreach($_POST['dates'] as $value){
                    $sql = "INSERT INTO `Schedule` (`Email`, `Timeslot`) VALUES ('".$email."', '".$value."');";
                    if (mysqli_query($conn, $sql)) {
                        
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                }
            }
                
            
            $msg = "<div class='alert alert-success' role='alert'>Success!</div>"; 
            include 'starterpage.php';
            mysqli_close($conn);
            exit();
        }

        else {
            $msg = "<div class='alert alert-danger' role='alert'>Error, Email or username already registered!</div>";
            include 'register.php';
            mysqli_close($conn);
            exit();
        }
    }
}

else if ($page == 'MainPage') 
{
    session_start();  // in order to access session variables
    
    if (!isset($_SESSION['signedin'])) {
        $display_modal_window = 'none';
        include ('view_startpage.php');
        exit;
    }
    
    $username = $_SESSION['username'];

    switch ($command) {
    case 'SignOut':  // 'SignOut' menu item, or timeout
        session_unset();
        session_destroy();  // It does not unset session variables. session_unset() is needed.
        $display_modal_window = 'none';
        include ('view_startpage.php');
        break;
    case 'SearchQestions':  // It uses $username.
        break;
    }
}








    
  
?>
