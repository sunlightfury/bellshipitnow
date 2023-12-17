<?php
define("_VALID_PHP", true);
require(dirname(__DIR__).'/lib/config.ini.php');

$servername = DB_SERVER;
$username   = DB_USER;
$password   = DB_PASS;
$dbname     = DB_DATABASE;
$conn       = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$product = '';

$customer_id = $_POST['customer_id'];
$order_id = $_POST['order_id'];

$order_sql = "SELECT * FROM `order_form` WHERE `id` = $order_id;";
$order_result = $conn->query($order_sql);
$order_row = $order_result->fetch_array(MYSQLI_BOTH);

$customer_id = $order_row['customer_id'];
$user_sql = "SELECT * FROM `users` WHERE `customer_number` = '$customer_id' LIMIT 1;";
$user_result = $conn->query($user_sql);
$user_row = $user_result->fetch_array(MYSQLI_BOTH);


$first_name = isset($user_row['fname']) && !empty($user_row['fname']) ? 
$user_row['fname'] : '';
$last_name = isset($user_row['lname']) && !empty($user_row['lname']) ? 
$user_row['lname'] : '';
$last_name = isset($user_row['lname']) && !empty($user_row['lname']) ? $user_row['lname'] : '';
$email = isset($user_row['email']) && !empty($user_row['email']) ? $user_row['email'] : '';
$code_phone = isset($user_row['code_phone']) && !empty($user_row['code_phone']) ? $user_row['code_phone'] : '';
$phone = isset($user_row['phone']) && !empty($user_row['phone']) ? $user_row['phone'] : '';
$address = isset($user_row['address']) && !empty($user_row['address']) ? $user_row['address'] : '';
$city = isset($user_row['city']) && !empty($user_row['city']) ? $user_row['city'] : '';
$state = isset($user_row['state']) && !empty($user_row['state']) ? $user_row['state'] : '';
$country = isset($user_row['country']) && !empty($user_row['country']) ? $user_row['country'] : 'United States';
$postal = isset($user_row['postal']) && !empty($user_row['postal']) ? $user_row['postal'] : '10003';
$invoice_number = '#'.$customer_id.date('dmyHis'); //rand(1111111,9999999)

$ch = curl_init();
// $clientId = 'ATsq5TNKa4Vbc1qvK4bNJeDz8vYGvkVMpdYZj9uLPGrwko2jZOY9Fq0vRFJH6bFIqherj8KSZK81NhCQ'; 
// test client 
$clientId = "AehYm9flStfaQH4I8v8a5d3kCkf9njJSBPOmzZZsL0LLyulrepkwzs5AB5dx5_lYciy-sd6i0R4VF7nF";
// $secret = 'EDzKNOd2asR0h9w2ELC5x0GtOx-V32EelX8e8tZVVlxtonX83YAGmaFMsB_EBmp4vp8jTUtL-uPTs4Uk'; 
//test secret 
$secret = "EBwIfVVS5zpBWj8-6q28aXirj2SveroTPuOes0pQu9EM2z2beTq4pZRfJ-OErXgr8-qZmxMHi3JZWlBw";

curl_setopt($ch, CURLOPT_URL, "https://api.sandbox.paypal.com/v1/oauth2/token");
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSLVERSION , 6); //NEW ADDITION
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
curl_setopt($ch, CURLOPT_USERPWD, $clientId.":".$secret);
curl_setopt($ch, CURLOPT_POSTFIELDS, "grant_type=client_credentials");

$result = curl_exec($ch);

if(empty($result))die("Error: No response.");
else
{
    $json = json_decode($result);
    $token = $json->access_token;
}

curl_close($ch); //THIS CODE IS NOW WORKING!

$payload = json_encode( 
    array
    ( 
        "detail"=> array
        (
            "currency_code" => "USD",
            "invoice_number" => $invoice_number,
            "reference" => "Bellshipitnow Shop Assistant",
            "invoice_date" => date("Y-m-d"),
            "note" => "Thank you for your business.",
            "term" => "No refunds once the shipping label is created",
            "memo" => "This is a one time shipping method",
            "payment_term" => array
            (
                "term_type" => "DUE_ON_RECEIPT",
                "due_date" => date("Y-m-d")
            )
        ),
        "invoicer" => array
        (
            "name" => array
            (
                "given_name" => "Rouzier",
                "surname" => "Charles"
            ),
            "address" => array
            (
                "address_line_1" => "228 Park Ave A # 698760",
                "address_line_2" => "New York, New York 10003",
                "admin_area_1" => "NY",
                "admin_area_2" => "FL",
                "postal_code" => "10003",
                "country_code" => "US"
            ),
            "email_address" => "rouziercharles@yahoo.com",
            "phones" => [array
            (
                "country_code" => "001",
                "national_number" => "8138625200",
                "phone_type" => "MOBILE"
            )],
            "website" => "https://bellshipitnow.com/v7/",
            "tax_id" => "93-2492488",
            "logo_url" => "https://bellshipitnow.com/assets/img/bellshipitnow_logo.png",
            "additional_notes" => "Feel free to reach out to me for any query or concern."
        ),
        "primary_recipients" => [array
        (
            "billing_info" => array
            (
                "name" => array
                (
                    "given_name" => $first_name,
                    "surname" => $last_name
                ),
            ),
            "address" => array
            (
                "address_line_1" => $address,
                "admin_area_1" => "NY",
                "admin_area_2" => $city,
                "postal_code" => $postal,
                "country_code" => $country
            ),
            "email_address" => $email,
            "phones" => array
            (
                "country_code" => "001",
                "national_number" => "7895648648",
                "phone_type" => "MOBILE"
            ),
            "additional_notes" => ""
        )],
        "shipping_info" => array
        (
            "name" => array
            (
                "given_name" => $first_name,
                "surname" => $last_name
            ),
        
            "address" => array
            (
                "address_line_1" => $address,
                "admin_area_1" => "NY",
                "admin_area_2" => $city,
                "postal_code" => $postal,
                "country_code" => $country
            ),
        ),
        "items" => [
            array
            (
                "name"=> "Zoom System wireless headphones",
                "quantity"=> "1",
                "unit_amount"=> array
                (
                  "currency_code"=> "USD",
                  "value"=> "120"
                ),
                "tax"=> array
                (
                  "name"=> "Tax",
                  "percent"=> "0"
                )
            )
        ],
        "discount" => array
        (
            "percent" => "0.001"
        ),
        "shipping_cost" => array
        (
            "amount" => array
            (
                "currency" => "USD",
                "value" => "150"
            ),
        ),
        "note" => "Thank you for your business.",
        "terms" => "No refunds after 30 days."
    ) 
);


$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v2/invoicing/invoices');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

$headers = array();
$headers[] = 'Authorization: Bearer '.$token;
$headers[] = 'Content-Type: application/json';
$headers[] = 'Prefer: return=representation';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);


if (curl_errno($ch)) 
{
    echo 'Error:' . curl_error($ch);
}
else
{   
    $result = json_decode($result);
  
    $invoice_id = $result->id;
    $payload = json_encode(array("send_to_invoicer"=> true));
    curl_setopt($ch, CURLOPT_URL, 'https://api-m.sandbox.paypal.com/v2/invoicing/invoices/'.$invoice_id.'/send');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    
    $headers = array();
    $headers[] = 'Authorization: Bearer '.$token;
    $headers[] = 'Content-Type: application/json';
    $headers[] = 'Prefer: return=representation';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
    $result = curl_exec($ch);
    echo '<pre>';
    print_R($result);
    exit;
}
curl_close($ch);

?>