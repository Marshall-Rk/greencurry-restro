<?php
include('db.php');
error_reporting(0);
session_start();


// sending query
mysqli_query($con,"DELETE FROM pixelemail WHERE id = '".$_GET['user_del']."'");
header("location:allusers.php");  

?>
