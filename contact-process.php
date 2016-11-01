<?php
session_start();
require_once 'inc/class.phpmailer.php';
$mail      = new PHPMailer(); // defaults to using php "mail()"

$name= $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


if ($_POST['captcha'] == $_SESSION['6_letters_code']) {

$message = 'name: '.$name.'<br/>';
$message .= 'email: '.$email.'<br/>';
$message .= 'subject: '.$subject.'<br/>';
$message .= 'address: '.$message.'<br/>';



$mail->From = $name; 
$mail->FromName = $email; 
$mail->Subject = $subject; 
$mail->Body = $message; 
$mail->AddAddress('salih24by7@gmail.com');  

$mail->Send();
echo 'Successfully Send message';

}else{

echo "badcode"; 
}