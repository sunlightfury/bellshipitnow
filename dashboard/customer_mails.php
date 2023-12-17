<?php
require(dirname(__DIR__).'/vendor/fpdf/fpdf.php');
require(dirname(__DIR__).'/vendor/phpmailer/autoload.php');
require(dirname(__DIR__).'/vendor/phpmailer/phpmailer/src/Exception.php');
require(dirname(__DIR__).'/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require(dirname(__DIR__).'/vendor/phpmailer/phpmailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
$emailid=$_GET['email'];
// echo $_GET['email']
$mail = new PHPMailer(true);
$mail->IsSMTP();	
$mail->Host     = 'bellshipitnow.com';
$mail->SMTPAuth = true;
$mail->Username = 'rouziercx@bellshipitnow.com';
$mail->Password = 'rTUf]yCWbYEo';
$mail->SMTPSecure = 'tls';
$mail->Port     = 587;
$mail->SMTPOptions = array(
        'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->setFrom('rouziercx@bellshipitnow.com', 'BellShipItNow');
        // Set an alternative reply-to address
        // $mail->addReplyTo('info@bellshipitnow.com', 'Care');
        // Set who the message is to be sent to
$mail->addAddress($emailid);

// CC
$mail->AddCC('test@hachiweb.com');

 // Bcc
$mail->addBcc('infohachiweb@gmail.com');

$mail->Subject = "Customer Invoice";
$mail->Body = 'Invoice has been create for you.
                Kindly clear your dues.
                <a href="https://www.bellshipitnow.com/dashboard/invoice.php">click here</a> '.
                
 
$mail->AltBody = " Sincerely,
                Bellshipitnow Team'.";
 

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
    exit();
}
else{
    // echo "Mail has been sent successfully";
    echo "<script>alert('Mail has been sent successfully')</script>";
    echo "<script>window.location.href = '/dashboard/invoice.php'</script>";
 
} 