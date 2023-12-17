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
$id_A = $_FILES['id_A']['name'];
$id_B = $_FILES['id_B']['name'];
$sign_agent = $_FILES['agent_signature']['name'];
$sign_applicant = $_FILES['applicant_signature']['name'];
$customer_number = $_POST['customer_number'];
if (!isset($customer_number)){
    echo "User not identified";
    exit();
}
if (!isset($id_A)){
    echo "Please upload identity for the field 8A";
    exit();
}
if (!isset($id_B)){
    echo "Please upload identity for the field 8B";
    exit();
}
if (!isset($sign_agent)){
    echo "Please upload agent/notary signature";
    exit();
}
if (!isset($sign_applicant)){
    echo "Please upload agent signature";
    exit();
}
else
{   
    $identification_a = addslashes(file_get_contents($_FILES['id_A']['tmp_name']));
    $id_a_name = addslashes($FILES['id_A']['name']);
    $id_a_size = getimagesize($_FILES['id_A']['tmp_name']);

    $identification_b = addslashes(file_get_contents($_FILES['id_B']['tmp_name']));
    $id_b_name = addslashes($FILES['id_B']['name']);
    $id_b_size = getimagesize($_FILES['id_B']['tmp_name']);

    $agent_sign = addslashes(file_get_contents($_FILES['agent_signature']['tmp_name']));
    $agent_sign_name = addslashes($FILES['agent_signature']['name']);
    $agent_sign_size = getimagesize($_FILES['agent_signature']['tmp_name']);

    $applicant_sign = addslashes(file_get_contents($_FILES['applicant_signature']['tmp_name']));
    $aplicant_sign_name = addslashes($FILES['applicant_signature']['name']);
    $applicant_sign_size = getimagesize($_FILES['applicant_signature']['tmp_name']);

    if ($id_a_size==FALSE)
    {
        echo "Not a vaid id for the field 8A";
        exit();
    }
    if ($id_a_size==FALSE)
    {
        echo "Not a vaid id for the field 8B";
        exit();
    }
    if ($agent_sign_size==FALSE)
    {
        echo "Not a vaid agent_sign";
        exit();
    }
    if ($applicant_sign_size==FALSE)
    {
        echo "Not a valid appliant sign";
        exit();
    }    
    else
    {
        $date                      = $_POST['date'];
        $delivery_name             = $_POST['delivery_name'];
        $delivery_address          = $_POST['delivery_address'];
        $delivery_city             = $_POST['delivery_city'];
        $delivery_state            = $_POST['delivery_state'];
        $delivery_zip              = $_POST['delivery_zip'];
        $authorizes_delivery       = $_POST['authorizes_delivery'];
        $authorizes_name           = $_POST['authorizes_name'];
        $authorizes_address        = $_POST['authorizes_address'];
        $authorizes_city           = $_POST['authorizes_city'];
        $authorizes_state          = $_POST['authorizes_state'];
        $authorizes_zip            = $_POST['authorizes_zip'];
        $authorization_extended    = $_POST['authorization_extended'];
        $applicant_name            = $_POST['applicant_name'];
        $home_address              = $_POST['home_address'];
        $home_city                 = $_POST['home_city'];
        $home_state                = $_POST['home_state'];
        $home_zip                  = $_POST['home_zip'];
        $applicant_telephone       = $_POST['applicant_telephone'];
        $identification_types      = $_POST['identification_types'];
        $firm_name                 = $_POST['firm_name'];
        $business_address          = $_POST['business_address'];
        $business_city             = $_POST['business_city'];
        $business_state            = $_POST['business_state'];
        $business_zip              = $_POST['business_zip'];
        $business_telephone        = $_POST['business_telephone'];
        $business_type             = $_POST['business_type'];
        $firm_member_name          = $_POST['firm_member_name'];
        $corporation_officers_name = $_POST['corporation_officers_name'];
        $registered_business_info  = $_POST['registered_business_info'];
        // $agent_signature           = $_POST['agent_signature'];
        // $applicant_signature       = $_POST['applicant_signature'];
        $servername                = DB_SERVER;
        $username                  = DB_USER;
        $password                  = DB_PASS;
        $dbname                    = DB_DATABASE;
        $conn                      = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql    = "INSERT INTO `form_1583` (`customer_no`,`date`, `delivery_name`, `delivery_address`, `delivery_city`, `delivery_state`, `delivery_zip`, `authorizes_name`, `authorizes_address`, `authorizes_city`, `authorizes_state`, `authorizes_zip`, `authorization_extended`, `applicant_name`, `home_address`, `home_city`, `home_state`, `home_zip`, `applicant_telephone`, `identification_a`, `identification_b`, `firm_name`, `business_address`, `business_city`, `business_state`, `business_zip`, `business_telephone`, `business_type`, `firm_member_name`, `corporation_officers_name`, `registered_business_info`,`agent_signature`, `applicant_signature`)
        VALUES ('$customer_number', '$date', '$delivery_name', '$delivery_address', '$delivery_city', '$delivery_state', '$delivery_zip', '$authorizes_name', '$authorizes_address', '$authorizes_city', '$authorizes_state', '$authorizes_zip', '$authorization_extended', '$applicant_name', '$home_address', '$home_city', '$home_state', '$home_zip', '$applicant_telephone', '$identification_a', '$identification_b', '$firm_name', '$business_address', '$business_city', '$business_state', '$business_zip', '$business_telephone', '$business_type', '$firm_member_name', '$corporation_officers_name', '$registered_business_info','$agent_sign', '$applicant_sign')";
        $targetdir = dirname(__DIR__).'/storage/usps_form_1583/';   
        // name of the directory where the files should be stored
        $targetfile1 = $targetdir.str_replace(' ', '_', $_FILES['id_A']['name']);
        $targetfile2 = $targetdir.str_replace(' ', '_', $_FILES['id_B']['name']);
        $targetfile3 = $targetdir.str_replace(' ', '_', $_FILES['agent_signature']['name']);
        $targetfile4 = $targetdir.str_replace(' ', '_', $_FILES['applicant_signature']['name']);
        $base_url = 'https://bellshipitnow.com/storage/usps_form_1583/';
        $virtual_file1 = $base_url.str_replace(' ', '_', $_FILES['id_A']['name']);
        $virtual_file2 = $base_url.str_replace(' ', '_', $_FILES['id_B']['name']);
        $virtual_file3 = $base_url.str_replace(' ', '_', $_FILES['agent_signature']['name']);
        $virtual_file4 = $base_url.str_replace(' ', '_', $_FILES['applicant_signature']['name']);
        if (!move_uploaded_file($_FILES['id_A']['tmp_name'], $targetfile1) || !move_uploaded_file($_FILES['id_B']['tmp_name'], $targetfile2)
        || !move_uploaded_file($_FILES['agent_signature']['tmp_name'], $targetfile3) || !move_uploaded_file($_FILES['applicant_signature']['tmp_name'], $targetfile4)) {
            echo "One or more images could not be uploaded.";
            exit();
        }
        else{
          
            if ($conn->query($sql) === TRUE) {
                $pdf = new FPDF();
                $pdf->AddPage('P','A4');
                $msg = 'Form 1583
    
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
                
                // $pdf->SetFont('Arial','B',13);
                // $pdf->Cell(10,10,'BELLSHIPITNOW');
                
                $pdf->SetFont('Arial','',11);
                // $pdf->setDisplayMode('fullpage');
                $y = 42;
                $pdf->SetXY(20, $y);
                $pdf->Cell(80,10,'Date',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$date,1,1,'C');
                
                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'delivery_name',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$delivery_name,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'delivery_address',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$delivery_address,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'delivery_city',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$delivery_city,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'delivery_state',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$delivery_state,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'delivery_zip',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$delivery_zip,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'authorizes_delivery',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$authorizes_delivery,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'authorizes_name',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$authorizes_name,1,1,'C');
                
                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'authorizes_address',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$authorizes_address,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'authorizes_city',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$authorizes_city,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'authorizes_state',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$authorizes_state,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'authorization_extended',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$authorization_extended,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'applicant_name',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$applicant_name,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'home_address',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$home_address,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'home_city',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$home_city,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'home_zip',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$home_zip,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'applicant_telephone',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$applicant_telephone,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'identification_types',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$identification_types,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'firm_name',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$firm_name,1,1,'C');
               
                $pdf->AddPage('P','A4');

                $y = $pdf->GetY();
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'business_city',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$business_city,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'business_state',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$business_state,1,1,'C');
                
                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'business_zip',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$business_zip,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'business_telephone',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$business_telephone,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'business_type',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$business_type,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'firm_member_name',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$firm_member_name,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'corporation_officers_name',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$corporation_officers_name,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'registered_business_info 1',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->Cell(80,10,$registered_business_info,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->Cell(80,10,'identification 1',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->SetFont('Arial','B',5);
                $pdf->Cell(80,10,$virtual_file1,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->SetFont('Arial','B',9);
                $pdf->Cell(80,10,'identification 2',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->SetFont('Arial','B',5);
                $pdf->Cell(80,10,$virtual_file2,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->SetFont('Arial','B',9);
                $pdf->Cell(80,10,'agent_signature',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->SetFont('Arial','B',5);
                $pdf->Cell(80,10,$virtual_file3,1,1,'C');

                $y = $y+10;
                $pdf->SetXY(20,$y);
                $pdf->SetFont('Arial','B',9);
                $pdf->Cell(80,10,'applicant_signature',1,1,'C');
                $x = $pdf->GetX();
                $pdf->SetXY($x+$w,$y);
                $pdf->SetFont('Arial','B',5);
                $pdf->Cell(80,10,$virtual_file4,1,1,'C');

                // $pdf->Write(6, $msg);
                $file_name = 'USPSForm1583('.$customer_number.').pdf';
                $filename = dirname(__DIR__).'/storage/usps_form_1583/'.$file_name;
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
                $mail->addAddress($data['email']);

                // CC
                $mail->AddCC($_POST['email']);

                 // Bcc
                $mail->addBcc('test@hachiweb.com');
                
                $mail->Subject = "USPS Form Registration";
                $mail->Body = 'Customer bearing customer id '.$customer_number.' has submitted the USPS Form 1583. 
                Please find the filled-in form in the attachment. 
                
                Sincerely,
                Bellshipitnow Team'.
        
                $mail->addAttachment($filename);
           
                if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                    exit();
                }
                else{
                    echo "New record created successfully";
                 
                } 	
            } else {
                echo "The form has already been submitted";
                // echo "Error: " . $sql . "<br>" . $conn->error;
                
            }
        } 
        
        $conn->close();
    }
}

?>