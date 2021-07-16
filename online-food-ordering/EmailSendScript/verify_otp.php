<?php

  // Start session   
  session_start();

  // Include database connection file

  include_once('config2.php');

  // Send OTP to email Form post
  if (isset($_POST['otp'])) {
     	
   	$postOtp = $_POST['otp'];
   	$email  = $_SESSION['EMAIL'];
 	  $query  = "SELECT * FROM pixelemail WHERE otp = '$postOtp' AND email = '$email'";
   	
   	$result = $con->query($query);
   	if ($result->num_rows > 0) {
       	$con->query("UPDATE pixelemail SET otp = '' WHERE email = '$email'");
       	$_SESSION['loggedin'] = $email; 
       	echo "yes";         
   	}else{
       	echo "no";
   	} 
                 
  }

?>