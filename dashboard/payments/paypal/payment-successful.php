<?php
  session_start();
  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);
  $protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
  $base_url = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']).'/../../';

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
  $email = $_SESSION['email'];
  $userid = $_SESSION['cus_id'];
  $userId = $_SESSION['cuid'];

  $tracking = $_SESSION['tracking'];
  $item_id = $_SESSION['item_id'];
  $item_name = $_SESSION['shipment-tracking'];
  // customer invoice
  $tracking_id = $_SESSION['tracking_id'];
  // echo $tracking_id;
  $customer_item_id = $_SESSION['customer_item_id'];
  // shipment invoice
  $user_name = $_SESSION['shipments'];
  // echo $user_name;
  $shipment_id = $_SESSION['shipment_id'];
  $shipment_tracking = $_SESSION['shipment-tracking'];
  $payment_amount = empty($_SESSION['total_amount'])?$_SESSION['r_costtotal']:$_SESSION['total_amount'];
  
  // $tracking_id = $_REQUEST['tracking_id'];
  $txn_id = $_GET['PayerID'];
  $currency_code = 'USD';
  $payment_status = 'successful';
  $today = date('Y-m-d');
  
  // echo '<pre>';
  // print_r($_SESSION);
  // exit;

  if(isset($customer_item_id))
  {
    if(!empty($txn_id))
    {
      //Check if payment data exists with the same TXN ID.
      $prevPaymentResult = $db->query("SELECT `txnid` FROM `payments` WHERE `txnid` = '$txn_id'");
      $prevTransactionResult = $db->query("SELECT `transaction_id` FROM `transactions` WHERE `transaction_id` = '$txn_id'");
  
      if($prevPaymentResult->num_rows > 0)
      {
        // $paymentRow = $prevPaymentResult->fetch_assoc();
        // $last_insert_id = $paymentRow['txnid'];
        ?>
        <script>
          alert("transaction id is already saved!");
        </script>
        <?php
        header("location: $base_url");
      }
      else
      {
        //Insert tansaction data into the database
        $insert = $db->query("INSERT INTO `payments`(`txnid`, `payment_amount`, `payment_status`, `itemid`,`description`) VALUES('$txn_id','$payment_amount','$payment_status','$customer_item_id','$item_name')");

        $update = $db->query("UPDATE `customer_invoices` SET `is_paid` = 1 WHERE `id`='$customer_item_id'");
        // if($insert == true){
        //   echo "<script>alert('this is custmoer side')</script>";
        // }    
      }
      //Transaction details in transaction table
      if(!$prevTransactionResult->num_rows > 0)
      {
        //Transaction details
        $insert = $db->query("INSERT INTO `transactions` (`item_id`, `transaction_id`, `transaction_amount`, `transaction_state`, `transaction_track`, `customer_number`,`description`, `transaction_date`) VALUES('$customer_item_id','$txn_id','$payment_amount','$payment_status','$tracking_id','$userid','$item_name','$today')");
      }
    } 
  }
  else if(isset($item_id))
  {
    if(!empty($txn_id))
    {
      //Check if payment data exists with the same TXN ID.
      $prevPaymentResult = $db->query("SELECT `txnid` FROM payments WHERE `txnid` = '$txn_id'");
      $prevTransactionResult = $db->query("SELECT `transaction_id` FROM `transactions` WHERE `transaction_id` = '$txn_id'");
  
      if($prevPaymentResult->num_rows > 0)
      {
        // $paymentRow = $prevPaymentResult->fetch_assoc();
        // $last_insert_id = $paymentRow['txnid'];
        ?>
        <script>
          alert("transaction id is already saved!");
        </script>
        <?php
      }
      else
      {
        //Insert tansaction data into the database
        $insert = $db->query("INSERT INTO payments(`txnid`, `payment_amount`, `payment_status`, `itemid`,`description`) VALUES('$txn_id','$payment_amount','$payment_status','$item_id','$item_name')");
        $update = $db->query("UPDATE `order_form` SET `is_paid` = 1 WHERE `id`=$item_id");            
      }
      //Transaction detatils in transaction table
      if(!$prevTransactionResult->num_rows > 0)
      {
        //Transaction details
        $insert = $db->query("INSERT INTO `transactions` (`item_id`, `transaction_id`, `transaction_amount`, `transaction_state`, `transaction_track`,'customer_number', `description`, `transaction_date`) VALUES('$item_id','$txn_id','$payment_amount','$payment_status','$tracking','$userId','$item_name','$today')");
      }
    } 
  }
  else if(isset($shipment_id))
  {
    if(!empty($txn_id))
    {
      //Check if payment data exists with the same TXN ID.
      $prevPaymentResult = $db->query("SELECT `txnid` FROM `payments` WHERE `txnid` = '$txn_id'");
      $prevTransactionResult = $db->query("SELECT `transaction_id` FROM `transactions` WHERE `transaction_id` = '$txn_id'");
  
      if($prevPaymentResult->num_rows > 0)
      {
        // $paymentRow = $prevPaymentResult->fetch_assoc();
        // $last_insert_id = $paymentRow['txnid'];
        ?>
        <script>
          alert("transaction id is already saved!");
        </script>
        <?php
      }
      else
      {
        //Insert tansaction data into the database
        $insert = $db->query("INSERT INTO `payments`(`txnid`, `payment_amount`, `payment_status`, `itemid`,`description`) VALUES('$txn_id',$payment_amount,'$payment_status',$shipment_id,'$item_name')");
        $update = $db->query("UPDATE  `add_courier` SET `payment_status` = 1 WHERE `id`=$shipment_id");            
      }
      //Transaction detatils in transaction table
      if(!$prevTransactionResult->num_rows > 0)
      {
        //Transaction details
        $insert = $db->query("INSERT INTO `transactions` (`item_id`, `transaction_id`, `transaction_amount`, `transaction_state`, `transaction_track`,`customer_number`, `description`, `transaction_date`) VALUES($shipment_id,'$txn_id','$payment_amount','$payment_status','$shipment_tracking','$user_name','$item_name','$today')");
      }
    } 
  }

// $email = $_SESSION['username'];

// $userid = $_SESSION['id'];
// $today = time();
// $planprice = $_SESSION['price'];

// $fetchresult = $db->query("SELECT * FROM users WHERE id = '$userid' AND role = 'Admin'");
// $fetchrow = $fetchresult->fetch_assoc();
// $subscription = strtotime($fetchrow['subscription']);
// $datediff = $subscription - $today;
// $expire = round($datediff / (60 * 60 * 24));
// $date = new DateTime(date("Y-m-d"));

// if ($expire<1) {
//   if ($planprice==20) {
//       $date->modify('+31 day');
//       $subscription = $date->format('Y-m-d');
//   }
//   if ($planprice==220) {
//       $date->modify('+366 day');
//       $subscription = $date->format('Y-m-d');
//   }
// } else {
//   if ($planprice==20) {
//       $oldsub = $expire+31;
//       $date->modify($oldsub.' day');
//       $subscription = $date->format('Y-m-d');
//   }
//   if ($planprice==220) {
//       $oldsub = $expire+366;
//       $date->modify($oldsub.' day');
//       $subscription = $date->format('Y-m-d');
//   }
// }
// $sql = $db->query("UPDATE users SET paid = '1', subscription = '$subscription' WHERE username = '$email' AND role = 'Admin'");
// session_unset();

function removeSession() 
{
  unset($_SESSION['price']);
}

?>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="https://js.stripe.com/v2/"></script>
<!-- jQuery is used only for this example; it isn't required to use Stripe -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<h1 style="text-align:center" class="alert alert-success">The payment has received. Your order will be shipped soon.</h1>
  <a onclick = 'removeSession()' style="margin-left:50%" href="<?= $base_url; ?>" class="btn btn-info">Dashboard</a>
  <!--  <h1>Your Payment ID - <//?php echo $last_insert_id; ?>.</h1>
    <div class="card card-warning">
      <div class="card-header">
        <h3 class="card-title">Subscription</h3>
      </div>
      <!-- /.card-header ->
      <div class="card-body">
          <!-- input states ->
          <div class="form-group">
            <label class="control-label"> Plan</label>
            <input type="text" class="form-control is-warning" value="<//?php echo $planname;?>" disabled>
          </div>
          <div class="form-group">
            <label class="control-label"> Price</label>
            <input type="text" class="form-control is-warning" value="<//?php echo $planprice." ".$currency_code;?>" disabled>
          </div>
          <div class="form-group">
            <label class="control-label" for="inputWarning"> Status</label>
            <input type="text" class="form-control is-warning" value="<//?php echo$payment_status;?>" disabled>
          </div>
          <div class="form-group">
            <label class="control-label" for="name"> Reference Number</label>
            <input type="text" class="form-control is-warning" value="<//?php echo $last_insert_id;?>" disabled>
          </div>
          <div class="form-group">
            <label class="control-label" for="name"> Transaction ID</label>
            <input type="text" class="form-control is-warning" value="<//?php echo $txn_id;?>" disabled>
          </div>
          <h1 class="display-3">Thank You!</h1>
      </div>
      <!-- /.card-body ->
    </div>-->
<?php
//}else{
?>
	<!--<h1>Your payment has failed.</h1>-->
<?php
//}
?>