<?php
// *************************************************************************
// *                                                                       *
// * DEPRIXA -  Integrated Web system                                      *
// * Copyright (c) JAOMWEB. All Rights Reserved                            *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * Email: osorio2380@yahoo.es                                            *
// * Website: http://www.jaom.info                                         *
// *                                                                       *
// *************************************************************************
// *                                                                       *
// * This software is furnished under a license and may be used and copied *
// * only  in  accordance  with  the  terms  of such  license and with the *
// * inclusion of the above copyright notice.                              *
// * If you Purchased from Codecanyon, Please read the full License from   *
// * here- http://codecanyon.net/licenses/standard                         *
// *                                                                       *
// *************************************************************************


// // Mail 
// require(dirname(__FILE__).'../vendor/fpdf/fpdf.php');
// require(dirname(__FILE__).'../vendor/phpmailer/autoload.php');
// require(dirname(__FILE__).'../vendor/phpmailer/phpmailer/src/Exception.php');
// require(dirname(__FILE__).'../vendor/phpmailer/phpmailer/src/PHPMailer.php');
// require(dirname(__FILE__).'../vendor/phpmailer/phpmailer/src/SMTP.php');
// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\Exception;
// end require file for mail
  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
      require_once("../init.php");



if (!$user->logged_in)

  redirect_to("login.php");



$row = $user->getUserData();

$servername = DB_SERVER;
$username   = DB_USER;
$password   = DB_PASS;
$dbname     = DB_DATABASE;
$conn       = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php include 'head_user.php'; 
 $customer_number = $_GET['customer_number'];
 $email_id = $_GET['emailid'];
//  echo $email_id;
if(isset($_POST['create_invoice'])){
    // echo "<pre>";
    // print_r($_POST);  
    $cname = $_POST['cname'];
    $tracking_id = $_POST['tracking_id'];
    $items = $_POST['items-name'];
    $quantity = $_POST['quantity'];
    $category = $_POST['category'];
    $product_link = $_POST['product_link'];
    $shipment_mode = $_POST['ship_mode'];
    $shipment_fee = $_POST['shipment_fee'];
    $pay_mode = $_POST['pay_mode'];
    $descrioptions = $_POST['descrioptions'];
    $weight = $_POST['weight'];
    $cbalance = $_POST['cbalance'];
    $pay_mode = $_POST['pay_mode'];
 
  
 $trackinid_result = $conn->query("SELECT `tracking_id` FROM customer_invoices WHERE tracking_id ='$tracking_id' ");
//  $result_sql_trckid = mysqli_query($conn,$sql_trckid);
 if($trackinid_result->num_rows > 0){
    // $paymentRow = $prevPaymentResult->fetch_assoc();
    echo "<script>alert('transaction id is already saved!')</script>";
 }
else
 {
    $result =$conn->query("INSERT INTO `customer_invoices`(`name`,`customer_id`, `tracking_id`,`items_name`, `quantity`, `catergory`, `product_link`, `shipment_mode`, `pay_mode`, `shipment_fee`, `description`, `weight`,`total_balance`) VALUES ('$cname','$customer_number','$tracking_id','$items','$quantity','$category','$product_link','$shipment_mode','$pay_mode','$shipment_fee','$descrioptions','$weight','$cbalance')");
    if($result > 0){
        echo "<script>alert('Record created successfully')</script>";
        echo "<script>window.location.href = 'customer_mails.php?email=$email_id'</script>";
        
       
    }
    else{
        echo "<script>window.location.href = 'error.php'</script>";
    }
 }
}
?>
<div class="row ">
    <div class="col-md-10 m-auto">
        <form action="" class=" bg-white shadow rounded p-3" method="post">
            <div class="form-row">
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="cname">Vendor Name</label>
                        <input type="text" class="form-control" id="cname" name="cname">
                    </div>
                </div>
                <div class="col-md-4  ">
                    <div class="form-group">
                        <label for="items-name">Items Name</label>
                        <input type="text" class="form-control" id="items-name" name="items-name" required>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="tracking_id">Tracking Number</label>
                        <input type="number" class="form-control" id="tracking_id" name="tracking_id" required>
                    </div>
                </div>

            </div>

            <div class="form-row">
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" required>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="category">Category</label>
                        <select class="form-control" id="category" name="category">
                            <option value="">Select</option>
                            <?php 
                    
                    $query_category = "select * from category";
                    $result_query_category = $conn->query($query_category); 
                    while ($row = $result_query_category->fetch_array(MYSQLI_BOTH))  
                    {
                        echo '<option>' . $row['name_item'] . '</option>';
                    }
                    ?>
                        </select>
                    </div>
                </div>
                <div class="col-md-4  ">
                    <div class="form-group">
                        <label for="product_link">Product Link</label>
                        <input type="text" class="form-control" id="product_link" name="product_link">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="shipment_mode">Shipment Mode</label>
                        <select class="form-control" id="ship_mode" name="ship_mode">
                            <option value="">Select</option>
                            <?php 
                        
                        $query_category = "select * from shipping_mode";
                        $result_query_category = $conn->query($query_category); 
                        while ($row = $result_query_category->fetch_array(MYSQLI_BOTH))  
                        {
                            echo '<option readonly="off">' . $row['ship_mode'] . '</option>';
                        }
                        ?>

                        </select>
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="shipment_fee">Shipment Fee</label>
                        <input type="number" class="form-control" id="shipment_fee" name="shipment_fee">
                    </div>
                </div>
                <div class="col-md-4  ">
                    <div class="form-group">
                        <label for="pay_mode">Pay Mode</label>
                        <input type="text" class="form-control" id="pay_mode" name="pay_mode">
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="descrioptions">Description</label>
                        <input type="text" class="form-control" id="descrioptions" name="descrioptions">
                    </div>
                </div>
                <div class="col-md-4  ">
                    <div class="form-group">
                        <label for="weight">Weight</label>
                        <input type="number" class="form-control" id="weight" name="weight">
                    </div>
                </div>
                <div class="col-md-4 ">
                    <div class="form-group">
                        <label for="cbalance">Balance(USD)</label>
                        <input type="number" class="form-control" id="cbalance" name="cbalance" required>
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mt-3">
                    <a href="customer.php?do=main_client" class="button btn btn-dark button-secondary"><span><i
                                class="ti-share-alt"></i></span> Return to the dashboard</a>
                </div>
                <div class="col-md-8 mt-3">
                    <button class="btn btn-primary" type="submit" name="create_invoice">Create Invoice</button>
                </div>
            </div>
        </form>
        <?php echo Core::doForm("processNewsletter");?>
    </div>
</div>



<script>
$(document).ready(function() {
    $('#summernote').summernote();
    $('.jstyling-select').removeClass('jstyling-select');
    $('#ship_mode').addClass('d-block');
    $('#category').addClass('d-block');
    $('#category').addClass('form-control');
    $('.jstyling-select-s').css('display', 'none');
});
</script>