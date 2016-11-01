<?php
session_start();
require_once 'inc/class.phpmailer.php';
$mail      = new PHPMailer(); // defaults to using php "mail()"

$name= $_POST['name'];
$email = $_POST['email'];
$phone= $_POST['phone'];
$address = $_POST['address'];


if ($_POST['captcha'] == $_SESSION['6_letters_code']) {


$message = 'name: '.$name.'<br/>';
$message .= 'email: '.$email.'<br/>';
$message .= 'phone: '.$phone.'<br/>';
$message .= 'address: '.$address.'<br/>';

$mail->From = $name; 
$mail->FromName = $email; 
$mail->Subject = 'Request to Add Clinin in Arrowhead Directory'; 
$mail->IsHTML(true); 
$mail->Body = $message; 
$mail->AddAddress('hellosethu@gmail.com');  

$mail->Send();
echo 'Successfully Send Your Request to add Clinic';

}else{

echo "badcode"; 
}