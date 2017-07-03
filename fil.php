<?php
// require_once 'mailerClass/class.php';
 require_once 'mailerClass/PHPMailerAutoload.php';

 $mail = new PHPMailer;

$mail->isSMTP();

$mail->SMTPDebug = 0;

$mail->Debugoutput = 'html';

$mail->Host = 'smtp.gmail.com';

$mail->Port = 587;

$mail->SMTPSecure = 'tls';

$mail->SMTPAuth = true;

$mail->Username = "paripruthi2009@gmail.com";

//Password to use for SMTP authentication
$mail->Password = "9868897834";

//Set who the message is to be sent from
$mail->setFrom('parikshit15155@iiitd.ac.in', 'Parikshit');


//Set who the message is to be sent to
$mail->addAddress('parikshit15155@iiitd.ac.in', 'Parikshit');


$mail->Subject = 'Php Mail Check';


$mail->Body = " <br> Message: ".$_POST['message']."<br> Email ID : ".$_POST['email'];


$mail->AltBody = 'This is a plain-text message body';
$mail->isHTML(true);

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
header("Location: onsubmit.php");
