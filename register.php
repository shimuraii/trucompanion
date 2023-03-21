<?php
    include "starter.php";
?>

<style>
body{
    background-color: #f3f3f3;
}
.btn-clr{
    background-color: #06b0b9;
    color: white;
}
.split {
    height: 100%;
    width: 50%;
    position: fixed;
    z-index: 1;
    top: 0;
    overflow-x: hidden;
    padding-top: 20px;
  }
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
  
  /* Control the left side */
  .left {
    left: 0;
  }
  
  /* Control the right side */
  .right {
    right: 0;
    padding-bottom:5%;
  
  }
  @media screen and (min-width: 1200px){
    html{
        display: block;
    }
  }
  /* If you want the content centered horizontally and vertically */
  .centered {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
  }
  
  /* Style the image inside the centered container, if needed */
  .centered img {
    width: 140%;
  }
</style>

<div class="split left">
  <div class="centered">
    <img src="trulogo.png" alt="TRU Logo"><br>
    <img src="homep.png" alt="Woman image">
  </div>
</div>

<div class="split right" s>
    <?php if($msg){
        echo $msg;
    }?>
    <h2>Register</h2>

    <div class="mb-3">
        <form action="controller.php" method="post">
            <input type='hidden' name='page' value='register'>
            <input type='hidden' name='command' value='register'>

            <label for="FormControlInput2" class="form-label">Username</label>
            <input type="text" name="username" required="required" style="width: 75%;" class="form-control" id="exampleFormControlInput1">
            

            <label for="FormControlInput2" class="form-label">Name</label>
            <input type="text" name="name" required="required" style="width: 75%;" class="form-control" id="exampleFormControlInput1">
            

            <label for="FormControlInput1" class="form-label">Email address</label>
            <input type="email" name="email" required="required" style="width: 75%;" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
            <label for="FormControlInput2" class="form-label">Password</label>
            <input type="password" name="password" required="required" style="width: 75%;" class="form-control" id="exampleFormControlInput1">
            
            <label for="FormControlTextarea3" class="form-label">Bio</label>
            <textarea class="form-control" required="required" name="bio" id="exampleFormControlTextarea1" rows="3"></textarea>

            <label for="FormControlTextarea3" class="form-label">Social Media link</label>
            <textarea class="form-control" required="required" name="sm" id="exampleFormControlTextarea1" rows="3"></textarea>
            <br>
            
            Monday
            <div class="dropdown">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Times Available
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
                <li><input type ="checkbox" name="dates[]" value="M0"> 00:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M1"> 01:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M2"> 02:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M3"> 03:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M4"> 04:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M5"> 05:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M6"> 06:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M7"> 07:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M8"> 08:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M9"> 09:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M10"> 10:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="M11"> 11:00AM</li>
                <br>
                <li><input type ="checkbox" name="dates[]" value="M12"> 12:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M13"> 01:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M14"> 02:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M15"> 03:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M16"> 04:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M17"> 05:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M18"> 06:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M19"> 07:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M20"> 08:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M21"> 09:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M22"> 10:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="M23"> 11:00PM</li>
            </ul>
        </div>
  </div>
</div>
Tuesday   
<div class="dropdown">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Times Available
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
            
            <ul>
                <li><input type ="checkbox" name="dates[]" value="TU24"> 00:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU1"> 01:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU2"> 02:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU3"> 03:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU4"> 04:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU5"> 05:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU6"> 06:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU7"> 07:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU8"> 08:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU9"> 09:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU10"> 10:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TU11"> 11:00AM</li>
                <br>
                <li><input type ="checkbox" name="dates[]" value="TU12"> 12:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU13"> 01:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU14"> 02:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU15"> 03:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU16"> 04:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU17"> 05:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU18"> 06:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU19"> 07:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU20"> 08:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU21"> 09:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU22"> 10:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TU23"> 11:00PM</li>
            </ul>
            </div>
  </div>
  Wednesday
  <div class="dropdown">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Times Available
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
            
                <li><input type ="checkbox" name="dates[]" value="W24"> 00:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W1"> 01:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W2"> 02:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W3"> 03:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W4"> 04:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W5"> 05:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W6"> 06:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W7"> 07:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W8"> 08:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W9"> 09:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W10"> 10:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="W11"> 11:00AM</li>
                <br>
                <li><input type ="checkbox" name="dates[]" value="W12"> 12:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W13"> 01:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W14"> 02:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W15"> 03:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W16"> 04:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W17"> 05:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W18"> 06:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W19"> 07:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W20"> 08:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W21"> 09:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W22"> 10:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="W23"> 11:00PM</li>
            </ul>
            </div>
  </div>
  Thursday
            <div class="dropdown">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Times Available
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
         
            
                <li><input type ="checkbox" name="dates[]" value="TH24"> 00:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH1"> 01:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH2"> 02:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH3"> 03:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH4"> 04:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH5"> 05:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH6"> 06:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH7"> 07:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH8"> 08:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH9"> 09:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH10"> 10:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="TH11"> 11:00AM</li>
                <br>
                <li><input type ="checkbox" name="dates[]" value="TH12"> 12:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH13"> 01:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH14"> 02:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH15"> 03:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH16"> 04:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH17"> 05:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH18"> 06:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH19"> 07:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH20"> 08:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH21"> 09:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH22"> 10:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="TH23"> 11:00PM</li>
            </ul>
            </div>
  </div>
  Friday
            <div class="dropdown">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Times Available
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
            
                <li><input type ="checkbox" name="dates[]" value="F24"> 00:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F1"> 01:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F2"> 02:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F3"> 03:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F4"> 04:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F5"> 05:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F6"> 06:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F7"> 07:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F8"> 08:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F9"> 09:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F10"> 10:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="F11"> 11:00AM</li>
                <br>
                <li><input type ="checkbox" name="dates[]" value="F12"> 12:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F13"> 01:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F14"> 02:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F15"> 03:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F16"> 04:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F17"> 05:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F18"> 06:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F19"> 07:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F20"> 08:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F21"> 09:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F22"> 10:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="F23"> 11:00PM</li>
            </ul>
            </div>
  </div>
  Saturday
            <div class="dropdown">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Times Available
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
            
                <li><input type ="checkbox" name="dates[]" value="SA0"> 00:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA1"> 01:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA2"> 02:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA3"> 03:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA4"> 04:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA5"> 05:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA6"> 06:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA7"> 07:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA8"> 08:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA9"> 09:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA10"> 10:00AM</li>
                <li><input type ="checkbox" name="dates[]" value="SA11"> 11:00AM</li>
                <br>
                <li><input type ="checkbox" name="dates[]" value="SA12"> 12:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA13"> 01:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA14"> 02:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA15"> 03:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA16"> 04:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA17"> 05:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA18"> 06:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA19"> 07:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA20"> 08:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA21"> 09:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA22"> 10:00PM</li>
                <li><input type ="checkbox" name="dates[]" value="SA23"> 11:00PM</li>
            </ul>
            </div>
  </div>
  Sunday
            <div class="dropdown">
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Times Available
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
            
                <li><input type ="checkbox" name="sunday[]" value="SU24"> 00:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU1"> 01:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU2"> 02:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU3"> 03:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU4"> 04:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU5"> 05:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU6"> 06:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU7"> 07:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU8"> 08:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU9"> 09:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU10"> 10:00AM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU11"> 11:00AM</li>
                <br>
                <li><input type ="checkbox" name="sunday[]" value="SU12"> 12:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU13"> 01:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU14"> 02:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU15"> 03:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU16"> 04:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU17"> 05:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU18"> 06:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU19"> 07:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU20"> 08:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU21"> 09:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU22"> 10:00PM</li>
                <li><input type ="checkbox" name="sunday[]" value="SU23"> 11:00PM</li>
            </ul>
            </div>
  </div>
  <br>
  <p class="text-body-secondary" style="font-size: 14px;">Already have an account? Click <a href="index.php">here</a> and join now!</p>
         
            <button type="submit" class="btn btn-clr">Register</button>
            
        </form>
    </div>

</div>