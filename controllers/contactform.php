<?php

use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';
require '../config.php';

/*var_dump($email);
var_dump($password);
die();
*/
$mail = new PHPMailer(true);

$mail->Mailer = 'smtp';
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = $email;
$mail->Password = $password;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;

$mail->setFrom($_POST['email'], $_POST['name']);
$mail->addAddress($emailTo);

//$mail->isHTML(true);
$mail->Subject = $_POST['subject'];
$mail->Body = $_POST['message'];

if ($mail->send()) {

  echo 'OK';

} else {

  echo "Error send message";
}



