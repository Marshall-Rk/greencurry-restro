<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone1 = $_POST['phone1'];
$date = $_POST['date'];
$time = $_POST['time'];
$person = $_POST['person'];
$restaurant = $_POST['restaurant'];

if (!empty($fullname) || !empty($email) || !empty($phone1) || !empty($date) || !empty($time) || !empty($person) || !empty($restaurant)) {
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "testingpixel";
    

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From restro Where email = ? Limit 1";
     $INSERT = "INSERT Into restro (fullname, email, phone1, date, time, person, restaurant) values(?, ?, ?, ?, ?, ?, ?)";
    


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
      $stmt->bind_param("sssssis", $fullname, $email, $phone1, $date, $time, $person, $restaurant);
      $stmt->execute();
      echo "<h2><p> <font color=green><script>alert('Your Response has been Recorded');</script></h2></font> </p>";
      echo "<script>window.location.href = 'reservation.php'</script>";  
     } else {
      echo "<h2>Someone already register using this email</h2>";
     }
     $stmt->close();
     $conn->close();
    }
} else {
 echo "All field are required";
 die();
}
?>