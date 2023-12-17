<?php
session_start();
// For test payments we want to enable the sandbox mode. If you want to put live
// payments through then this setting needs changing to `false`.
$enableSandbox = false;
$live_client_id = "ATsq5TNKa4Vbc1qvK4bNJeDz8vYGvkVMpdYZj9uLPGrwko2jZOY9Fq0vRFJH6bFIqherj8KSZK81NhCQ";
$live_secret = "EDzKNOd2asR0h9w2ELC5x0GtOx-V32EelX8e8tZVVlxtonX83YAGmaFMsB_EBmp4vp8jTUtL-uPTs4Uk";
// Database settings. Change these for your database configuration.
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$base_url = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']);

define("_VALID_PHP", true);
require_once("../../../init.php");

$row = $user->getUserData();
$customer_number = $row->customer_number;

$servername = DB_SERVER;
$username   = DB_USER;
$password   = DB_PASS;
$dbname     = DB_DATABASE;
$db       = new mysqli($servername, $username, $password, $dbname);

if ($db->connect_error) 
{
	die("Connection failed: " . $db->connect_error);
}

// PayPal settings. Change these to your account details and the relevant URLs
// for your site.
$paypalConfig = 
[
	'email' => 'Bellshipitnow@gmail.com',//'test@hachistaging.com',
	'return_url' => $base_url.'/payment-successful.php',
	'cancel_url' => $base_url.'/payment-cancelled.html',
	'notify_url' => $base_url.'/payments.php'
];

$paypalUrl = $enableSandbox ? 'https://www.sandbox.paypal.com/cgi-bin/webscr' : 'https://www.paypal.com/cgi-bin/webscr';

// Product being purchased.
if(isset($_POST['item_id']))
{ 
	$_SESSION['cuid'] = $_POST['cuid'];
	$itemName = $_POST['item_name'];
	$itemAmount = $_POST['amount'];
	$_SESSION['price'] = $itemAmount;
	$_SESSION['item_id'] = $_POST['item_id'];
	$_SESSION['tracking-id'] = $_POST['tracking-id'];
}
elseif(isset($_POST['shipment_id']))
{
	$ship_item = $_POST['ship_item'];
	$itemAmount = $_POST['r_costtotal'];
	// echo $ship_item;
	$_SESSION['shipments'] = $_POST['shipments'];
	$_SESSION['r_costtotal'] = $itemAmount;
	$_SESSION['shipment_id'] = $_POST['shipment_id'];
	$_SESSION['shipment-tracking'] = $_POST['shipment-tracking'];
	// echo $_SESSION['shipment_id'];
}
else
{
	//Customer payments products details
	$_SESSION['cus_id'] = $_POST['cus_id'];
	$_SESSION['tracking_id'] = $_POST['tracking_id'];
	$_SESSION['customer_item_id'] = $_POST['customer_item_id'];
	$_SESSION['total_amount'] = $_POST['total_amount'];
	$_SESSION['customer_name'] = $_POST['customer_name'];

}


// echo "<pre>";
// // echo $_SESSION['customer_item_id'];
//   print_r($_POST);
//   exit;
// Include Functions
require 'functions.php';

// Check if paypal request or response
if (!isset($_POST["txn_id"]) && !isset($_POST["txn_type"])) 
{

	// Grab the post data so that we can set up the query string for PayPal.
	// Ideally we'd use a whitelist here to check nothing is being injected into
	// our post data.
	$data = [];
	foreach ($_POST as $key => $value) {
		$data[$key] = stripslashes($value);
	}

	// Set the PayPal account.
	$data['business'] = $paypalConfig['email'];

	// Set the PayPal return addresses.
	$data['return'] = stripslashes($paypalConfig['return_url']);
	$data['cancel_return'] = stripslashes($paypalConfig['cancel_url']);
	$data['notify_url'] = stripslashes($paypalConfig['notify_url']);

	// Set the details about the product being purchased, including the amount
	// and currency so that these aren't overridden by the form data.
	$data['item_name'] = $itemName;
	$data['amount'] = $itemAmount;
	$data['currency_code'] = $_POST['currency_code'];

	// Add any custom fields for the query string.
	//$data['custom'] = USERID;

	// Build the query string from the data.
	$queryString = http_build_query($data);

	// echo '<pre>';
	// print_R($queryString);
	// exit;
	// Redirect to paypal IPN
	header('location:' . $paypalUrl . '?' . $queryString);
	exit();

} else {
	// Handle the PayPal response.

	// Create a connection to the database.
	$db = $con; //new mysqli($dbConfig['host'], $dbConfig['username'], $dbConfig['password'], $dbConfig['name']);

	// Assign posted variables to local data array.
	if(isset($_POST['item_id']) && ($_POST['item_id']!=""))
	{
	$data = [
		'item_name' => $_POST['item_name'],
		'item_number' => $_POST['item_number'],
		'payment_status' => $_POST['payment_status'],
		'payment_amount' => $_POST['mc_gross'],
		'payment_currency' => $_POST['mc_currency'],
		'txn_id' => $_POST['txn_id'],
		'receiver_email' => $_POST['receiver_email'],
		'payer_email' => $_POST['payer_email'],
		'custom' => $_POST['custom'],
	];
	}
	else if(isset($_POST['customer_item_id']))
	{
	$data = [
		'item_name' => $_POST['customer_name'],
		'item_number' => $_POST['customer_item_id'],
		'payment_status' => $_POST['payment_status'],
		'payment_amount' => $_POST['mc_gross'],
		'payment_currency' => $_POST['mc_currency'],
		'txn_id' => $_POST['txn_id'],
		'receiver_email' => $_POST['receiver_email'],
		'payer_email' => $_POST['payer_email'],
		'custom' => $_POST['custom'],
	];
	}
	else if(isset($_POST['shipment_id']))
	{
		$data = [
			'item_name' => $_POST['ship_item'],
			'item_number' => $_POST['shipment_id'],
			'payment_status' => $_POST['payment_status'],
			'payment_amount' => $_POST['mc_gross'],
			'payment_currency' => $_POST['mc_currency'],
			'txn_id' => $_POST['txn_id'],
			'receiver_email' => $_POST['receiver_email'],
			'payer_email' => $_POST['payer_email'],
			'custom' => $_POST['custom'],
		];
		}
	// We need to verify the transaction comes from PayPal and check we've not
	// already processed the transaction before adding the payment to our
	// database.
	if (verifyTransaction($_POST) && checkTxnid($data['txn_id'])) 
	{
		if (addPayment($data, $email, $userid) !== false) {
			// Payment successfully added.
			 
		}
	}
}
 