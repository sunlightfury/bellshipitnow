<?php
define("_VALID_PHP", true);
require_once("../../../init.php");

  
  $row = $user->getUserData();
  $customer_number = $row->customer_number;

  $servername = DB_SERVER;
  $username   = DB_USER;
  $password   = DB_PASS;
  $dbname     = DB_DATABASE;
  $db       = new mysqli($servername, $username, $password, $dbname);

  if ($db->connect_error) {
	  die("Connection failed: " . $db->connect_error);
  }

//Set useful variables for paypal form
$paypal_link = 'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
$paypal_username = 'bellshipitnow@gmail.com'; //Business Email

error_reporting(0);
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
$link = "https://"; 
else
$link = "http://"; 
$site_url = $link.$_SERVER['HTTP_HOST'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Paypal :: SPACE-O </title>
</head>
<body>
	<?php
		//fetch products from the database
		$results = $db->query("SELECT * FROM products");
		while($row = $results->fetch_assoc())
		{
	?>
    <img src="images/<?php echo $row['image']; ?>"/>
    <br/>Prodcut Name: <?php echo $row['name']; ?>
    <br/>Product Price: <?php echo $row['price']; ?>
    <form action="<?php echo $paypal_link; ?>" method="post">

        <!-- Identify your business so that you can collect the payments. -->
        <input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
        
        <!-- Specify a Buy Now button. -->
        <input type="hidden" name="cmd" value="_xclick">
        
        <!-- Specify details about the item that buyers will purchase. -->
        <input type="hidden" name="item_name" value="<?php echo $row['name']; ?>">
        <input type="hidden" name="item_number" value="<?php echo $row['id']; ?>">
        <input type="hidden" name="amount" value="<?php echo $row['price']; ?>">
        <input type="hidden" name="currency_code" value="USD">
        
        <!-- Specify URLs -->
        <input type='hidden' name='cancel_return' value='<?=$site_url?>/payments/paypal/payment-cancelled.html'>
		<input type='hidden' name='return' value='<?=$site_url?>/payments/paypal/payment-successful.php'>

        
        <!-- Display the payment button. -->
        <input type="image" name="submit" border="0"
        src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal - The safer, easier way to pay online">
        <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
    
    </form>
    <?php } ?>
      
</body>
</html>
