<?php
require(dirname(__DIR__).'/vendor/fpdf/fpdf.php');
require(dirname(__DIR__).'/vendor/phpmailer/autoload.php');
require(dirname(__DIR__).'/vendor/phpmailer/phpmailer/src/Exception.php');
require(dirname(__DIR__).'/vendor/phpmailer/phpmailer/src/PHPMailer.php');
require(dirname(__DIR__).'/vendor/phpmailer/phpmailer/src/SMTP.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
define("_VALID_PHP", true);
require(dirname(__DIR__).'/lib/config.ini.php');

$customer_number = $_POST['customer_number'];
if (!isset($customer_number)){
    echo "User not identified";
    exit();
}
    else
    {   
        $name       = $_POST['vendor'];
        $tracking   = $_POST['tracking_number'];
        
        $product = array();
        foreach ($_POST['item'] as $value) 
        {
            if(!empty($value))
                $product['item'][] = $value;
        }
        foreach ($_POST['value'] as $value) 
        {
            if(!empty($value))
                $product['value'][] = $value;
        }
        foreach ($_POST['quantity'] as $value) 
        {
            if(!empty($value))
                $product['quantity'][] = $value;
        }
        foreach ($_POST['category'] as $value) 
        {
            if(!empty($value))
                $product['category'][] = $value;
        }
        foreach ($_POST['product_link'] as $value) 
        {
            if(!empty($value))
                $product['product_link'][] = $value;
        }
        foreach ($_POST['ship_mode'] as $value) 
        {
            if(!empty($value))
                $product['ship_method'][] = $value;
        }
        foreach ($_POST['ship_fee'] as $value) 
        {
            if(!empty($value))
                $product['ship_fee'][] = $value;
        }
        foreach ($_POST['total'] as $value) 
        {
            if(!empty($value))
                $product['total'][] = $value;
        }
        $grandtotal = $_POST['grandtotal'];
        $product = json_encode($product);
        
        $servername = DB_SERVER;
        $username   = DB_USER;
        $password   = DB_PASS;
        $dbname     = DB_DATABASE;
        $conn       = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql    = "INSERT INTO `order_form` (`customer_id`,`name`, `tracking`, `product`, `grandtotal`)
        VALUES ('$customer_number','$name', '$tracking', '$product', '$grandtotal')";
        if ($conn->query($sql) === TRUE) {
                $pdf = new FPDF();
                $pdf->AddPage('P','A4');
                $msg = 'Order Form
    
                ';
                $letter_logo = dirname(__DIR__).'/assets/images/bsn_logo_temp.jpeg';
                $w = 90;
                $pdf->Image($letter_logo, 60, 5, 100, 22);
                $pdf->SetFont('Arial','B',9);
                $pdf->SetXY(100, 28); 
                $pdf->Cell(10,4,'1 (800) 313-5960');
                $pdf->SetXY(94, 31); 
                $pdf->Cell(10,4,'support@bellshipitnow.com');
                $pdf->Line(5, 36, 200, 36); 
                $pdf->SetLineWidth(2);
                $pdf->SetFont('Arial','',11);
                $y = 42;
                $pdf->SetXY(20, $y);
                $pdf->Cell(80,10,'Vendor Name',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$name,1,1,'C');
                
                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'Tracking Number',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$tracking,1,1,'C');

                foreach ($_POST['item'] as $value) 
                {
                    $y = $y+10;
                    $pdf->SetXY(20,$y);
                    $pdf->Cell(80,10,'Item:',1,1,'C');
                    $x = $pdf->GetX();
                    $pdf->SetXY($x+$w,$y);
                    $pdf->Cell(80,10,$value,1,1,'C');
                }

                foreach ($_POST['value'] as $value) 
                {
                    $y = $y+10;
                    $pdf->SetXY(20,$y);
                    $pdf->Cell(80,10,'Value in US $',1,1,'C');
                    $x = $pdf->GetX();
                    $pdf->SetXY($x+$w,$y);
                    $pdf->Cell(80,10,$value,1,1,'C');
                }

                foreach ($_POST['quantity'] as $value) 
                {
                    $y = $y+10;
                    $pdf->SetXY(20,$y);
                    $pdf->Cell(80,10,'Quantity',1,1,'C');
                    $x = $pdf->GetX();
                    $pdf->SetXY($x+$w,$y);
                    $pdf->Cell(80,10,$value,1,1,'C');
                }

                foreach ($_POST['total'] as $value) 
                {
                    $y = $y+10;
                    $pdf->SetXY(20,$y);
                    $pdf->Cell(80,10,'Total Value',1,1,'C');
                    $x = $pdf->GetX();
                    $pdf->SetXY($x+$w,$y);
                    $pdf->Cell(80,10,$value,1,1,'C');
                }

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'Totals($)',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$grandtotal,1,1,'C');
                $file_name = 'Order Form('.$customer_number.').pdf';
                $filename = dirname(__DIR__).'/storage/order_form/'.$file_name;
                $pdf->Output($filename,'F');
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
                // $mail->addAddress($data['email']);
                // CC
                $mail->AddCC($_POST['email']);

                 // Bcc
                $mail->addBcc('test@hachiweb.com');
                
                $mail->Subject = "Order Form Registration";
                $mail->Body = 'Customer bearing customer id '.$customer_number.' has submitted the Order Form. 
Please find the filled-in form in the attachment. 

Sincerely,
Bellshipitnow Team'.
        
                $mail->addAttachment($filename);
           
                if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                    exit();
                }
                else{
                   // echo "New record created successfully";
                	//redirect_to("thankyou.php");
                	header("location: thankyou.php");
                 
                } 	
            } else {
                //echo "The form has already been submitted";
                // echo "Error: " . $sql . "<br>" . $conn->error;
               header("location: error.php");
               
            }
         
        
        $conn->close();
    
    }

?>

