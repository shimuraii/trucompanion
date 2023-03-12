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
  
  /* Control the left side */
  .left {
    left: 0;
  }
  
  /* Control the right side */
  .right {
    right: 0;
    padding-top: 10%;
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
    <h2>Log In</h2>
    <p class="text-body-secondary" style="font-size: 14px;">Welcome back! <br> Please enter your details</p>
    
    <div class="mb-3">
        
        <form action="home.php" method="post">
            <input type='hidden' name='page' value='index'>
            <input type='hidden' name='command' value='SignIn'>
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" required="required" style="width: 75%;" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Password</label>
            <input type="password" required="required" style="width: 75%;" class="form-control" id="exampleFormControlInput1">
            <br>
            <button type="submit" class="btn btn-clr">Log In</button>
        </form>
    </div>

    <p class="text-body-secondary" style="font-size: 14px;">Not registered yet? Click <a href="register.php">here</a> and join now!</p>
</div>