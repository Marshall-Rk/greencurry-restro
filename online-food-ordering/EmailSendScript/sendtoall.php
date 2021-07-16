<?php

if(isset($_POST['email']) && $_POST['email']!=""){

	require_once ('PHPMailer/PHPMailerAutoload.php');

        $emails  = $_POST['email'];

        $subject = "Nextgenpixel-Curator of converting your ideas into pixels";

	    $message = file_get_contents("pixel.html");

        $mail = new PHPMailer(true);

	$mail->SMTPDebug = 0;                                 // Enable verbose debug output
	$mail->CharSet="UTF-8";                               // Put right encoding here  
	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = "pixelgenmarketing@gmail.com";
	$mail->Password = 'marshall@9943';
	$mail->SetFrom("pixelgenmarketing@gmail.com");             // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to
	$mail->isHTML(true); 								  // Set email format to HTML
	
	$mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
        )
    );

    foreach($emails as $email => $val){
      
        $mail->setFrom($val, 'Nextgenpixel');
        $mail->clearAddresses();
        $mail->Addaddress($val, 'Nextgenpixel');            // Add a recipient
       

    	$mail->Subject = $subject;
    	$mail->Body    = $message;

        if($mail->send()){
            $esMessage = true;
        }else{
    	    $esMessage = false;
        }
    }
    
    if($esMessage)
      echo "True";
    else
        echo "false";

    
    // if($esMessage){
    //     echo'<div class="alert alert-success alert-dismissible">
    //             <button type="button" class="close" data-dismiss="alert">&times;</button>
    //             Email sent successfully
    //         </div>';
    //     exit;
    // }else{
    //     echo'<div class="alert alert-danger alert-dismissible"> 
    //             <button type="button" class="close" data-dismiss="alert">&times;</button>
    //             Email not sent to Please try again or type correct email!
    //         </div>';
    //     exit;           
    // }

}


?>