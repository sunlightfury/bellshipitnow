<?php
session_start();
if ($_SESSION["role"] != "Admin") 
{
  header("location: ../index.php");
}
$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$base_url = $protocol . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . '/dashboard';

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

//save Trasaction information form PayPal
  $email = $_SESSION['username'];

  $useroid = $_SESSION['id'];
  // $planprice= $_COOKIE['price'];
  // $planname = $_GET['item_name'];
  // $txn_id = $_GET['tx'];
  // $payment_price = $_GET['amt'];
  // $currency_code = $_GET['cc'];
  // $payment_status = $_GET['st'];
  // $today = date('Y-m-d H:i:s');

  // if(!empty($txn_id)){
  //   //Check if payment data exists with the same TXN ID.
  //     $prevPaymentResult = $db->query("SELECT txnid FROM payments WHERE txnid = '$txn_id'");
  
  //     if($prevPaymentResult->num_rows > 0){
  //         $paymentRow = $prevPaymentResult->fetch_assoc();
  //         $last_insert_id = $paymentRow['txnid'];
  //         
  //     }else{
  //         //Insert tansaction data into the database
  //         $insert = $db->query("INSERT INTO payments(`txnid`, `payment_amount`, `payment_status`, `itemid`, `createdtime`) VALUES('$txn_id','$payment_price','$payment_status','$planname','$today')");
           
  //     }
  //   } 
?>
 <?php function removeCookies() {
    setcookie("price", "", time() - 86400);
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
 <a onclick = 'removeCookies()' style="margin-left:50%" href="<?=$base_url?>" class="btn btn-info">Home</a>
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