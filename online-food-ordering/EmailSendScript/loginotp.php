<?php

include('db.php');
session_start();
 

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: index.php");
   
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>OTP LOGIN</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.css"
  rel="stylesheet"
/>
<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.5.0/mdb.min.js"
></script>

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="shortcut icon" type="image/jpg" href="logo.png"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-dark white-text">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
    
  
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" target="_blank" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" href="register.php">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" target="_blank" href="http://bit.ly/nextgenpixel">Nextgenpixel</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" style="color:#a7a3f3;" href="admin_panel.php">ADMN</a>
        </li>
      </ul>
   
    </div>
 
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3 " target="_blank" href="http://bit.ly/nextgenpixel">
        <i class="fas fa-home" style="color:white"></i>
      </a>
      <a class="text-reset me-3 " target="_blank" href="https://www.instagram.com/nextgenpixel/">
        <i class="fas fa-envelope" style="color:white"></i>
      </a>
      

  
      <a
        class="dropdown-toggle d-flex align-items-center hidden-arrow"
        href="#"
        id="navbarDropdownMenuLink"
        role="button"
        data-mdb-toggle="dropdown"
        aria-expanded="false"
      >
        <img
          src="images/gmail.jpg"
          class="rounded-circle"
          height="25"
          alt=""
          loading="lazy"
        />
      </a>
      <ul
        class="dropdown-menu dropdown-menu-end"
        aria-labelledby="navbarDropdownMenuLink"
      >
        <li>
          <a class="dropdown-item" target="_blank" href="http://bit.ly/nextgenpixel">My profile</a>
        </li>
        <li>
          <a class="dropdown-item" target="_blank" href="https://linktr.ee/official_nextgenpixel">Linktree</a>
        </li>
      </ul>
    </div>

  </div>

</nav>
<div class="content py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/undraw_remotely_2j6y.svg" alt="Image" class="img-fluid">
        </div>
        <div class="col-md-6 contents ">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Login with OTP into Email-Quantum</h3>
              <p class="mb-4">Nextgenpixel focuses on creating effective and efficient strategies for Email marketing by creating detailed and value adding content because the goal is not just reaching your potential client's inbox but their engagement.</p>
            </div>

            <div class="col-md-12 px-0">   

<div class="alert alert-success alert-dismissible" style="display: none;">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <span class="success-message"></span>
</div>

<form id="emailForm ">
  <div class="form-group">  
    <label for="email">Email:</label> 
    <input type="text" class="form-control" name="email" placeholder="Enter Email" required="" id="email">
    <span class="error-message" style="color:red;"></span>
  </div>
  <div class="form-group">
    <p>Not registered yet ?<a href="indexotp.php"> Register here</a></p>
    <button type="submit" class="btn btn-primary" id="sendOtp">Send OTP</button>
    <a href="login.php" type="button" class="btn btn-info ">HOME</a>
  </div>
</form>

<form id="otpForm" style="display:none;">
  <div class="form-group">  
    <label for="mobile">OTP:</label>
    <input type="text" class="form-control" name="otp" placeholder="Enter OTP" required="" id="otp">
    <span class="otp-message" style="color: red;"></span>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-success" id="verifyOtp">Verify OTP</button>
  </div>
</form>        
</div>

       
            </div>
          </div>
          
        </div>

      </div>
    </div>
  </div>


  <!-- <div class="container">
    <div class="row">
      <div class="col-md-3"></div>
        <div class="col-md-6">   

          <div class="alert alert-success alert-dismissible" style="display: none;">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <span class="success-message"></span>
          </div>

          <form id="emailForm">
            <div class="form-group">  
              <label for="email">Email:</label> 
              <input type="text" class="form-control" name="email" placeholder="Enter Email" required="" id="email">
              <span class="error-message" style="color:red;"></span>
            </div>
            <div class="form-group">
              <p>Not registered yet ?<a href="indexotp.php"> Register here</a></p>
              <button type="submit" class="btn btn-primary" id="sendOtp">Send OTP</button>
            </div>
          </form>

          <form id="otpForm" style="display:none;">
            <div class="form-group">  
              <label for="mobile">OTP:</label>
              <input type="text" class="form-control" name="otp" placeholder="Enter OTP" required="" id="otp">
              <span class="otp-message" style="color: red;"></span>
            </div>
            <div class="form-group">
              <button type="submit" class="btn btn-success" id="verifyOtp">Verify OTP</button>
            </div>
          </form>        
        </div>
    </div>
  </div> -->

<script type="text/javascript">
  $(document).ready(function(){

    // Send OTP email jquery
    $("#sendOtp").on("click", function(e){ 
      e.preventDefault();    
      var email = $("#email").val();
      $.ajax({
        url  : "send_otp.php",
        type : "POST",
        cache:false,
        data : {email:email},
        success:function(result){
          if (result == "yes") {
            $("#otpForm,.alert-success").show();
            $("#emailForm").hide();
            $(".success-message").html("OTP sent your email address");
          }
          if (result =="no") {
            $(".error-message").html("Please enter valid email");
          }        
        }
      });  
    });   

    // Verify OTP email jquery
    $("#verifyOtp").on("click",function(e){
      e.preventDefault();
      var otp = $("#otp").val();
      $.ajax({
        url  : "verify_otp.php",
        type : "POST",
        cache:false,
        data : {otp:otp},
        success:function(response){
          if (response == "yes") {
            window.location.href='index.php';
          }
          if (response =="no") {
            $(".otp-message").html("Please enter valid OTP");
          }        
        }
      });
    });
  });
</script>
</body>
</html>

