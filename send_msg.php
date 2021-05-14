<?php
include('db2.php');
include('smtp/PHPMailerAutoload.php');
if(isset($_POST['id']) && $_POST['id']>0){
	$id=mysqli_real_escape_string($con,$_POST['id']);
	$res=mysqli_query($con,"select * from email_list where send='0' and id='$id'");
	if(mysqli_num_rows($res)>0){
		$row=mysqli_fetch_assoc($res);
		$email=$row['email'];
		$html=file_get_contents("pixel.html");


		smtp_mailer($email,'Nextgenpixel-Curator of converting your ideas into pixels', $html);
		mysqli_query($con,"update email_list set send=1 where id='$id'");
		$status=true;
		$msg="Sent";
	}else{
		$status=false;
		$msg="Invalid Details";
	}
}else{
	$status=false;
	$msg="Id not found";
}

echo json_encode(array('status'=>$status,'msg'=>$msg));


function smtp_mailer($to,$subject, $msg){
	$mail = new PHPMailer(); 
	$mail->IsSMTP(); 
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "smtp.gmail.com";
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Username = "pixelgenmarketing@gmail.com";
	$mail->Password = 'marshall@9943';
	$mail->SetFrom("pixelgenmarketing@gmail.com");
	// $mail->AddAttachment('images/1.jpg');
	// $html=file_get_contents("pixel.html");
	$mail->Subject = $subject;
	$mail->Body =$msg;
	$mail->AddAddress($to);
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if(!$mail->Send()){
		//echo $mail->ErrorInfo;
	}else{
		//echo 'Sent';
	}
}
?>