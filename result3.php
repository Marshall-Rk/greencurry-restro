<?php
$conn = mysqli_connect("localhost", "root", "","testingpixel");

if($_REQUEST['submit']){
$email = $_POST['email'];


if(empty($email)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM newsletter WHERE email LIKE '%$email%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['id'];
		echo '<br> email						: '.$row['email'];
		echo '</h4>';


	}
}else{
echo'<h2> Search Result</h2>';

print ($make);
}
mysqli_free_result($result);
mysqli_close($conn);
}
}

?>
