<?php
include('db.php');
error_reporting(0);
session_start();


// sending query
mysqli_query($con,"DELETE FROM email_list WHERE id = '".$_GET['user2_del']."'");
header("location:allemaillist.php");  

?>
