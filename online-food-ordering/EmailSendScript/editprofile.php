<?php 
//Database Connection
include('db.php');
session_start();
if(isset($_POST['submit']))
  {
  	 $loggedin=$_SESSION['username'];
  	//Getting Post Values
      $username=$_POST['username'];
	  $email=$_POST['email'];
      $mobile_number=$_POST['mobile_number'];
      $AadharCard_number=$_POST['AadharCard_number'];
	  $accstatus=$_POST['accstatus'];
	 

    //Query for data updation
     $query=mysqli_query($con, "update `pixelemail` set `email`='$email',`username`='$username',`mobile_number`='$mobile_number', `AadharCard_number`='$AadharCard_number' where username='$loggedin' ");
     
    if ($query) {
		
		$_SESSION['status'] = "done";
		$_SESSION['status_code'] = "success";    
   
  }
  
  else
    {
        $_SESSION['status'] = "not done";
		$_SESSION['status_code'] = "error";
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Edit-Profile</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<style>
body {
	color: #fff;
	background: #63738a;
	font-family: 'Roboto', sans-serif;
}
.form-control {
	height: 40px;
	box-shadow: none;
	color: #969fa4;
}
.form-control:focus {
	border-color: #5cb85c;
}
.form-control, .btn {        
	border-radius: 3px;
}
.signup-form {
	width: 750px;
	margin: 0 auto;
	padding: 30px 0;
  	font-size: 15px;
}
.signup-form h2 {
	color: #636363;
	margin: 0 0 15px;
	position: relative;
	text-align: center;
}
.signup-form h2:before, .signup-form h2:after {
	content: "";
	height: 2px;
	width: 30%;
	background: #d4d4d4;
	position: absolute;
	top: 50%;
	z-index: 2;
}	
.signup-form h2:before {
	left: 0;
}
.signup-form h2:after {
	right: 0;
}
.signup-form .hint-text {
	color: #999;
	margin-bottom: 30px;
	text-align: center;
}
.signup-form form {
	color: #999;
	border-radius: 3px;
	margin-bottom: 15px;
	background: #f2f3f7;
	box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
	padding: 30px;
}
.signup-form .form-group {
	margin-bottom: 20px;
}
.signup-form input[type="checkbox"] {
	margin-top: 3px;
}
.signup-form .btn {        
	font-size: 16px;
	font-weight: bold;		
	min-width: 140px;
	outline: none !important;
}
.signup-form .row div:first-child {
	padding-right: 10px;
}
.signup-form .row div:last-child {
	padding-left: 10px;
}    	
.signup-form a {
	color: #fff;
	text-decoration: underline;
}
.signup-form a:hover {
	text-decoration: none;
}
.signup-form form a {
	color: #5cb85c;
	text-decoration: none;
}	
.signup-form form a:hover {
	text-decoration: underline;
}  
</style>
</head>
<body>

<div class="signup-form">
	
    <form  method="POST">
 <?php

 
$loggedin=$_SESSION['username'];

$ret=mysqli_query($con,"select * from pixelemail where username='$loggedin'");
while ($row=mysqli_fetch_array($ret)) {

	
	$today=date('Y-m-d H:i:s');
								
	$expire=date('Y-m-d H:i:s', strtotime($row['date']. '+23 days'));
	
	if ($today>=$expire){
		$con->query("update `pixelemail` SET `accstatus`='Expire' where `id` ='".$_SESSION['id']."'");
		
	}

?>
		<h2>PROFILE</h2> 	

    
        <div class="form-group">
        <label class="text-dark" for="accstatus">Account-Status </label>
            <input type="text" class="form-control  text-success" name="accstatus" value="<?php  echo $row['accstatus'];?>"  readonly>
        </div>
		
        <div class="form-group">
        <label class="text-dark" for="created-At">Account-Created-At </label>
            <input type="text" class="form-control  text-success" name="created-At" value="<?php echo date('D, M j, Y H:i:s', strtotime($row["date"])); ?>"  readonly>
        </div>
		
        <div class="form-group">
        <label class="text-dark" for="Expiry-Date">Account-Expiry-Date </label>
            <input type="text" class="form-control  text-danger" name="Expiry-Date" value="<?php echo $expire;?>"  readonly>
        </div>
        <div class="form-group">
        <label class="text-dark" for="username">USERNAME</label> </label>
        	<input type="text" class="form-control  text-dark" name="username" value="<?php  echo $row['username'];?>" >
        </div>
        <div class="form-group">
        <label class="text-dark" for="Email">EMAIL</label> </label>
        	<input type="text" class="form-control  text-dark" name="email" value="<?php  echo $row['email'];?>" >
        </div>
        <div class="form-group">
        <label class="text-dark" for="AadharCard_number">AADHAR_CARD_NUMBER</label> </label>
        	<input type="text" class="form-control  text-dark" name="AadharCard_number" value="<?php  echo $row['AadharCard_number'];?>" >
        </div>
		
        <div class="form-group">
        <label class="text-dark" for="mobile_number">MOBILE_NUMBER </label>
        	<input type="text" class="form-control  text-dark" name="mobile_number" value="<?php  echo $row['mobile_number'];?>" >
        </div>
		
		

		
      <?php 
}?>
		<div class="form-group">
		<table class="table table-striped table-hover">
		<label class="text-dark" for="mobile_number">Your_HTML_File </label>
                <tbody>
                     <?php
                     $loggedIn  =$_SESSION['id'];
$ret=mysqli_query($con,"select * from email_list WHERE `createdByWhom` = $loggedIn limit 1");
$cnt=1;
$row=mysqli_num_rows($ret);
if($row>0){
while ($row=mysqli_fetch_array($ret)) {

?>

<!--Fetch the Records -->
                    <tr>
                           
                         
                                <td ><a href="upload/<?php echo $row['htmlfile'] ?>" target="_blank">View file</a></td>
                              
                           
                                
                        
                    </tr>
                    <?php 
$cnt=$cnt+1;
} } else {?>
<tr>
    <th style="text-align:center; color:red;" colspan="6">No Record Found</th>
</tr>
<?php } ?>                 
                
                </tbody>
            </table>
            <button type="submit" class="btn btn-success btn-lg btn-block" name="submit">Update</button>
   
            <a type="button" class="btn btn-warning btn-lg btn-block text-dark"href="index.php">Back</a>
		
            <a type="button" class="btn btn-warning btn-lg btn-block text-dark"href="logout.php">Login</a>
        </div>
    </form>

</div>

<!-- <sweetalert alert-box> -->
<script src="js/sweetalert.js"></script>
<?php
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
	?>
	<script>
swal("You have successfully update the data!", "Login again to see changes!!", "success");
</script>
	<?php
unset($_SESSION['status']);
}
?>






<script src="jquery-3.6.0.min.js"></script>
<script src="sweetalert2.all.min.js"></script>
<!-- <sweetalert alert-box> -->

</body>
</html>