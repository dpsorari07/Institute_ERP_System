<?php
require 'phpmailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSendMail();                                      // Set mailer to use SMTP
                                      // Set mailer to use SMTP
$mail->Host ='smtp.gmail.com';# 'smtp.gmail.com';
#smtp2.example.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;       
auth_username="deep.sorari7@gmail.com";
auth_password="iiitiandeepak";                        // Enable SMTP authentication
#$mail->Username = 'deep.sorari7@gmail.com';                 // SMTP username
#$mail->Password = 'iiitiandeepak';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 567;                                    // TCP port to connect to

#$mail->setFrom('deep.sorari7@gmail.com');
$mail->addAddress('deep.sorari7@gmail.com');     // Add a recipient
#mail->addAddress('ellen@example.com');               // Name is optional
#$mail->addReplyTo('info@example.com', 'Information');
#$mail->addCC('cc@example.com');
#$mail->addBCC('bcc@example.com');

#$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
#$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

$mail->isHTML(true);                             // Set email format to HTML

$mail->Subject = 'Here is the subject';
$mail->Body    = 'This is the HTML message body <b>in bold!</b>';
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}

?>
