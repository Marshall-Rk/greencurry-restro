<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "email_list";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE email_list SET send = '0' WHERE send = '1'";

if ($conn->query($sql) === TRUE) {
  echo "<h2>Record updated successfully</h2>";
  
} else {
  echo "Error updating record: " . $conn->error;
}


$conn->close();
?>

<html lang="en">
   <head>
      <title>Email Sending Script</title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="style.css">

	  <style>
	  .container{width:700px;margin-top:50px; background-image: url(slide_2.jpg);}
	  </style>
   </head>
   <body>
  
   <a href="index.php" type="button" class="btn btn-warning"><-Back</a>
   </body>
</html>