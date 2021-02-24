<?php
$conn = mysqli_connect("localhost", "root", "","testingpixel");

if($_REQUEST['submit']){
$fullname = $_POST['fullname'];


if(empty($fullname)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM restro WHERE fullname LIKE '%$fullname%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['id'];
		echo '<br> fullname						: '.$row['fullname'];
		echo '<br> email						: '.$row['email'];
		echo '<br> phone1						: '.$row['phone1'];
		echo '<br> date						: '.$row['date'];
		echo '<br> time						: '.$row['time'];
		echo '<br> person						: '.$row['person'];
		echo '<br> Time_of_feedback						: '.$row['Time_of_feedback'];
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
