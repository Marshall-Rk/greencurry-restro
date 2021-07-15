


<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];



if (!empty($name) || !empty($email) || !empty($subject) || !empty($message) ) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "online_rest";
    

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From contactform Where email = ? Limit 1";
     $INSERT = "INSERT Into contactform (name, email, subject, message ) values(?, ?, ?, ?)";
    


     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $email);
     $stmt->execute();
     $stmt->bind_result($email);
     $stmt->store_result();
     $stmt->store_result();
     $stmt->fetch();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssss", $name, $email, $subject, $message);
      $stmt->execute();
      echo "<h2>Your Response Has Been Regsitered!!!</h2>";
     } else {
      echo "<h2>Someone already register using this email</h2>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "<h2>All field are required</h2>";
 die();
}

?>