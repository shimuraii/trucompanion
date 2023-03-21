<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">TRU Companion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <form action="controller.php" method="post">
            <input type='hidden' name='page' value='MainPage'>
            <input type='hidden' name='command' value='SignOut'>
            <button type='submit'>Sign Out</button>
        </form>
        </li>
      </ul>
    </div>
  </div>
</nav>



<h1 style="text-align:center;"> Your Available Times: </h1>

<?php 

$db_host = 'localhost';
$db_user = 'root';
$db_password = 'root';
$db_db = 'People';
$db_port = 8889;
$conn = mysqli_connect($db_host, $db_user ,$db_password, $db_db);


$time_map = array(
    'M1' => 'Monday 01:00',
    'M2' => 'Monday 02:00',
    'M3' => 'Monday 03:00',
    'M4' => 'Monday 04:00',
    'M5' => 'Monday 05:00',
    'M6' => 'Monday 06:00',
    'M7' => 'Monday 07:00',
    'M8' => 'Monday 08:00',
    'M9' => 'Monday 09:00',
    'M10' => 'Monday 10:00',
    'M11' => 'Monday 11:00',
    'M12' => 'Monday 12:00',
    'M13' => 'Monday 13:00',
    'M14' => 'Monday 14:00',
    'M15' => 'Monday 15:00',
    'M16' => 'Monday 16:00',
    'M17' => 'Monday 17:00',
    'M18' => 'Monday 18:00',
    'M19' => 'Monday 19:00',
    'M20' => 'Monday 20:00',
    'M21' => 'Monday 21:00',
    'M22' => 'Monday 22:00',
    'M23' => 'Monday 23:00',
    'M24' => 'Monday 24:00',
    'TU1' => 'Tuesday 01:00',
    'TU2' => 'Tuesday 02:00',
    'TU3' => 'Tuesday 03:00',
    'TU4' => 'Tuesday 04:00',
    'TU5' => 'Tuesday 05:00',
    'TU6' => 'Tuesday 06:00',
    'TU7' => 'Tuesday 07:00',
    'TU8' => 'Tuesday 08:00',
    'TU9' => 'Tuesday 09:00',
    'TU10' => 'Tuesday 10:00',
    'TU11' => 'Tuesday 11:00',
    'TU12' => 'Tuesday 12:00',
    'TU13' => 'Tuesday 13:00',
    'TU14' => 'Tuesday 14:00',
    'TU15' => 'Tuesday 15:00',
    'TU16' => 'Tuesday 16:00',
    'TU17' => 'Tuesday 17:00',
    'TU18' => 'Tuesday 18:00',
    'TU19' => 'Tuesday 19:00',
    'TU20' => 'Tuesday 20:00',
    'TU21' => 'Tuesday 21:00',
    'TU22' => 'Tuesday 22:00',
    'TU23' => 'Tuesday 23:00',
    'TU24' => 'Tuesday 24:00',
    'W1' => 'Wednesday 01:00',
    'W2' => 'Wednesday 02:00',
    'W3' => 'Wednesday 03:00',
    'W4' => 'Wednesday 04:00',
    'W5' => 'Wednesday 05:00',
    'W6' => 'Wednesday 06:00',
    'W7' => 'Wednesday 07:00',
    'W8' => 'Wednesday 08:00',
    'W9' => 'Wednesday 09:00',
    'W10' => 'Wednesday 10:00',
    'W11' => 'Wednesday 11:00',
    'W12' => 'Wednesday 12:00',
    'W13' => 'Wednesday 13:00',
    'W14' => 'Wednesday 14:00',
    'W15' => 'Wednesday 15:00',
    'W16' => 'Wednesday 16:00',
    'W17' => 'Wednesday 17:00',
    'W18' => 'Wednesday 18:00',
    'W19' => 'Wednesday 19:00',
    'W20' => 'Wednesday 20:00',
    'W21' => 'Wednesday 21:00',
    'W22' => 'Wednesday 22:00',
    'W23' => 'Wednesday 23:00',
    'W24' => 'Wednesday 24:00',
    'TH1' => 'Thursday 01:00',
    'TH2' => 'Thursday 02:00',
    'TH3' => 'Thursday 03:00',
    'TH4' => 'Thursday 04:00',
    'TH5' => 'Thursday 05:00',
    'TH6' => 'Thursday 06:00',
    'TH7' => 'Thursday 07:00',
    'TH8' => 'Thursday 08:00',
    'TH9' => 'Thursday 09:00',
    'TH10' => 'Thursday 10:00',
    'TH11' => 'Thursday 11:00',
    'TH12' => 'Thursday 12:00',
    'TH13' => 'Thursday 13:00',
    'TH14' => 'Thursday 14:00',
    'TH15' => 'Thursday 15:00',
    'TH16' => 'Thursday 16:00',
    'TH17' => 'Thursday 17:00',
    'TH18' => 'Thursday 18:00',
    'TH19' => 'Thursday 19:00',
    'TH20' => 'Thursday 20:00',
    'TH21' => 'Thursday 21:00',
    'TH22' => 'Thursday 22:00',
    'TH23' => 'Thursday 23:00',
    'TH24' => 'Thursday 24:00',
    'F1' => 'Friday 01:00',
    'F2' => 'Friday 02:00',
    'F3' => 'Friday 03:00',
    'F4' => 'Friday 04:00',
    'F5' => 'Friday 05:00',
    'F6' => 'Friday 06:00',
    'F7' => 'Friday 07:00',
    'F8' => 'Friday 08:00',
    'F9' => 'Friday 09:00',
    'F10' => 'Friday 10:00',
    'F11' => 'Friday 11:00',
    'F12' => 'Friday 12:00',
    'F13' => 'Friday 13:00',
    'F14' => 'Friday 14:00',
    'F15' => 'Friday 15:00',
    'F16' => 'Friday 16:00',
    'F17' => 'Friday 17:00',
    'F18' => 'Friday 18:00',
    'F19' => 'Friday 19:00',
    'F20' => 'Friday 20:00',
    'F21' => 'Friday 21:00',
    'F22' => 'Friday 22:00',
    'F23' => 'Friday 23:00',
    'F24' => 'Friday 24:00',
    'SA1' => 'Saturday 01:00',
    'SA2' => 'Saturday 02:00',
    'SA3' => 'Saturday 03:00',
    'SA4' => 'Saturday 04:00',
    'SA5' => 'Saturday 05:00',
    'SA6' => 'Saturday 06:00',
    'SA7' => 'Saturday 07:00',
    'SA8' => 'Saturday 08:00',
    'SA9' => 'Saturday 09:00',
    'SA10' => 'Saturday 10:00',
    'SA11' => 'Saturday 11:00',
    'SA12' => 'Saturday 12:00',
    'SA13' => 'Saturday 13:00',
    'SA14' => 'Saturday 14:00',
    'SA15' => 'Saturday 15:00',
    'SA16' => 'Saturday 16:00',
    'SA17' => 'Saturday 17:00',
    'SA18' => 'Saturday 18:00',
    'SA19' => 'Saturday 19:00',
    'SA20' => 'Saturday 20:00',
    'SA21' => 'Saturday 21:00',
    'SA22' => 'Saturday 22:00',
    'SA23' => 'Saturday 23:00',
    'SA24' => 'Saturday 24:00',
    'SU1' => 'Sunday 01:00',
    'SU2' => 'Sunday 02:00',
    'SU3' => 'Sunday 03:00',
    'SU4' => 'Sunday 04:00',
    'SU5' => 'Sunday 05:00',
    'SU6' => 'Sunday 06:00',
    'SU7' => 'Sunday 07:00',
    'SU8' => 'Sunday 08:00',
    'SU9' => 'Sunday 09:00',
    'SU10' => 'Sunday 10:00',
    'SU11' => 'Sunday 11:00',
    'SU12' => 'Sunday 12:00',
    'SU13' => 'Sunday 13:00',
    'SU14' => 'Sunday 14:00',
    'SU15' => 'Sunday 15:00',
    'SU16' => 'Sunday 16:00',
    'SU17' => 'Sunday 17:00',
    'SU18' => 'Sunday 18:00',
    'SU19' => 'Sunday 19:00',
    'SU20' => 'Sunday 20:00',
    'SU21' => 'Sunday 21:00',
    'SU22' => 'Sunday 22:00',
    'SU23' => 'Sunday 23:00',
    'SU24' => 'Sunday 24:00'
);
function find_time($e){
    global $conn;
    
    $sql = "SELECT Timeslot from Schedule where Email LIKE '$e'";  // where Question is like 
    $result = mysqli_query($conn, $sql);

    $data = [];
    while($row = mysqli_fetch_assoc($result)){
        array_push($data, $row);
    }

    return $data;
};

    $s = $_SESSION['user_s'];
    foreach($s as $e){
        echo "<p style='text-align:center'>" . $time_map[$e]  . "</p>";
    }
    echo "<h3 style='font-size:40px; text-align:center;'>Check other people's times!!</h3>";
    $u = $_SESSION['data'];
    foreach ($u as $element) {
        if ($element['Username'] == $_SESSION['username']){

        }
        else{
            echo "<div class='card-group'>
            <div class='card' style='text-align: center;width: 18rem;'>
            <div class='card-body'>
            <h5 class='card-title'>" . $element['Name'] ."</h5>
            <p class='card-text'>". $element['bio'] ."</p>
            <a href='" . $element['sm'] .  "' class='card-link'>Social Media link</a><br>
            <a href = 'mailto:". $element['Email'] ."?subject = Feedback&body = Message'>". $element['Email'] ."</a>
            <h3>Schedule</h3>
          ";
            $email = get_email($element['Username']);
            $email = json_encode($email);
            $array = json_decode($email, true);
            $em = $array[0]['Email'];   
            $time = find_time($em);

            $time = json_encode($time);
            $arr = json_decode($time, true);
            
            foreach ($arr as $element) {
                foreach ($element as $key => $value) {
                    echo "<p style='text-align:center'>" . $time_map[$value]  . "</p>";
                }
            }
            echo "</div> </div> </div>";
        }
    };
?>

<!doctype html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <body>
   
  

  </body>

