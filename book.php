

<?php
session_start();
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


$sender_email = "testingpixel9943@gmail.com";
$sender_password = "marshall@9943";
function sendMail($to, $subject, $msg)
{
    global  $sender_password, $sender_email;
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = 1;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = $sender_email;
        $mail->Password = $sender_password;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        $mail->setFrom($sender_email, "Nice Home Tutors");
        $mail->addAddress($to);
        $mail->addCC('rajkamalgautam2001@gmail.com');
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $msg;
        $mail->send();
        return true;
    } catch (Exception $e) {
        $error = "There was an error while sending the mail but your registartion request has been submitted to us.";
        return false;
    }
}       
if(isset($_POST['book'])){
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone1 = $_POST['phone1'];
$date = $_POST['date'];
$time = $_POST['time'];
$person = $_POST['person'];



$formcontent = "<p style='color:teal; font-weight:1000'>Student Registration From: \n  $fullname \n email: $email  \n phon1: $phone1 \n date: $date \n time: $time \n person: $person </p>";

if (sendMail($email,'STUDENT REGISTRATION FORM',$formcontent))
$_SESSION['mailflag']='sent';
else 
$_SESSION['mailflag']='unsent';
header('location:index.php');

}else{
    header('location:index.php');
    
}
?>  