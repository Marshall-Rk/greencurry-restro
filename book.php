<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone1 = $_POST['phone1'];
$date = $_POST['date'];
$time = $_POST['time'];
$person = $_POST['person'];



if (!empty($fullname) || !empty($email) || !empty($phone1) || !empty($date) || !empty($time) || !empty($person)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "testingpixel";
    

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From restro Where email = ? Limit 1";
     $INSERT = "INSERT Into restro (fullname, email, phone1, date, time, person) values(?, ?, ?, ?, ?, ?)";
    


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
      $stmt->bind_param("ssssii", $fullname, $email, $phone1, $date, $time, $person);
      $stmt->execute();
      echo "<h2>New record inserted sucessfully</h2>";
     } else {
      echo "Someone already register using this email";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>