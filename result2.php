<?php
$conn = mysqli_connect("localhost", "root", "","testingpixel");

if($_REQUEST['submit']){
$name = $_POST['name'];

if(empty($name)){
	$make = '<h4>You must type a word to search!</h4>';
}else{
	$make = '<h4>No match found!</h4>';
	$sele = "SELECT * FROM contactform WHERE name LIKE '%$name%'";
	$result = mysqli_query($conn,$sele);
	
	if($row = mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
		echo '<h4> Id						: '.$row['id'];
		echo '<br> name						: '.$row['name'];
		echo '<br> email						: '.$row['email'];
        echo '<br> subject						: '.$row['subject'];
        echo '<br> message						: '.$row['message'];
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
