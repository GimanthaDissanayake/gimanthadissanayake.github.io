<?php
$con_name = preg_replace('/[\r\n]/', '', $_POST['con_name']);
$con_email = preg_replace('/[\r\n]/', '', $_POST['con_email']);
$con_message = $_POST['con_message'];

if (!filter_var($con_email, FILTER_VALIDATE_EMAIL)) {
    echo 0;
    exit;
}

$to = 'gimanthad@gmail.com';
$subject = 'Web Portfolio Gimantha';

$message = '<strong>Name : </strong>'.$con_name.'<br/><br/>';

$message .= $con_message.'<br/>';


$headers = 'From: '.$con_name.' '.$con_email . "\r\n" ;
$headers .='Reply-To: '. $to . "\r\n" ;
$headers .='X-Mailer: PHP/' . phpversion();
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

mail($to,$subject,$message,$headers);
echo 1;