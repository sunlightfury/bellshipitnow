<?php 
    error_reporting(E_ALL);
    error_reporting(-1);
    ini_set('error_reporting', E_ALL);

    $_SERVER["HTTP_ACCEPT_LANGUAGE"]='en-US';
    define("_VALID_PHP", true);
    require_once("../init.php");
    $servername = DB_SERVER;
    $username   = DB_USER;
    $password   = DB_PASS;
    $dbname     = DB_DATABASE;
    $db       = new mysqli($servername, $username, $password, $dbname);
    if ($db->connect_error) 
    {
        die("Connection failed: " . $db->connect_error);
    }
    
    require_once('../vendor/shippo-php-client-master/lib/Shippo.php');
    // test key shippo_test_e59aa237e0b0519947985acf993131cd8c93bd7c
    // live key shippo_live_2c366c199257cf916d15a08def27ed8d5493621d
    Shippo::setApiKey("shippo_live_2c366c199257cf916d15a08def27ed8d5493621d");

    $object_id = isset($_POST['object_id']) && !empty($_POST['object_id'])?trim($_POST['object_id']):'';//'21ecdea108d44a27ba6b6c0e78823702'; //
    // Purchase the desired rate.
    $transaction = Shippo_Transaction::create
    ( 
        array
        ( 
            'rate' => $object_id, 
            'label_file_type' => "PDF", 
            'async' => false 
        ) 
    );

    // Retrieve label url and tracking number or error message
    if ($transaction["status"] == "SUCCESS")
    {
        $res['status'] = 200;
        $shipping_label_url = isset($transaction["label_url"]) && !empty($transaction["label_url"])?$transaction["label_url"]:'';
        $shipping_tracking_number = isset($transaction["tracking_number"]) && !empty($transaction["tracking_number"])?$transaction["tracking_number"]:'';
        // echo("\n");
        // echo( $transaction["tracking_number"] );
        $res['data'] = array($shipping_label_url,$shipping_tracking_number);
        $res['message'] = "Success";
        $update = $db->query("UPDATE `add_courier` SET `shipping_label` = '$shipping_label_url',`tracking`='$shipping_tracking_number' WHERE `shipping_object_id`='$object_id'");        
    }
    else 
    {   
        $res['status'] = 403;
        foreach ($transaction['messages'] as $message) 
        {
            $res['message'][] = array($message['text']);
        }
        $res['data'] = '';
    }
    echo json_encode($res);
    exit;