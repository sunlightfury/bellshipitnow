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

  define("_VALID_PHP", true);
  require_once("../init.php");

    
    $row = $user->getUserData();
    $customer_number = $row->customer_number;

    $servername = DB_SERVER;
    $username   = DB_USER;
    $password   = DB_PASS;
    $dbname     = DB_DATABASE;
    $conn       = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../uploads/favicon.png">

    <title>Assistant Shop | <?php echo $core->site_name ?></title>
    <!-- This page plugin CSS -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <div id="main-wrapper">
        <?php include 'topbar.php'; ?>
        <!-- End Topbar header -->

        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <?php include 'left_sidebar.php'; ?>
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Pay Invoice</h4>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-12 col-xl-12 col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex no-block align-items-center m-b-30">
                                    <!-- <h4 class="card-title"><?php echo $lang['allcustomer'] ?></h4> -->
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config"
                                        class="table table-bordered table-condensed table-hover table-striped">
                                        <?php if($user->userlevel=='9')
                                        {
                                        ?>
                                        <thead>
                                            <tr>
                                                <th>Customer Number</th>
                                                <th>Tracking ID</th>
                                                <th>Item</th>
                                                <!-- <th>Description</th> -->
                                                <th>Amount</th>
                                                <th>Created at
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- shipment -->
                                            <?php 
                                            
                                            $shipt_corier = "SELECT * FROM  `add_courier` where `status_courier` = 'Approved'";
                                            $shipt_corier_order = $conn->query($shipt_corier); 
                                            if(!$shipt_corier_order):
                                                ?>
                                            <tr>
                                                <td colspan="8">
                                                <?php 
                                                    echo "<i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='130' /></i>";
                                                ?>
                                                </td>
                                            </tr>
                                            <?php
                                            else:
                                            $max = 1;
                                            while ($row_id = $shipt_corier_order->fetch_array(MYSQLI_BOTH))  
                                            { ?>

                                            <td>
                                                <a href="customer.php?do=main_client&user_id=<?php echo $row_id['username'];?>"><?php echo $row_id['username'];?>
                                                </a>
                                            </td>

                                            <td>
                                                <?php echo $row_id['tracking'];?>
                                            </td>
                                            <td>
                                                <a href="order_view.php?id=<?php echo $row_id['id'];?>">Items</a>
                                            </td>
                                            <!-- <td>
                                                Name: Shipment Form #<?php echo $row_id['id'];?>
                                            </td> -->
                                            <td><?php echo $row_id['r_costtotal'];?></td>
                                            <td><?php echo $row_id['created'];?></td>
                                            <td>
                                                <?php
                                                    $page = 'buy';
                                                    $planprice = $row_id['r_costtotal'];
                                                    $plan = $row_id['id'].' '.$row_id['id'];
                                                    $currency = "USD";
                                                    // setcookie("price", "planprice");

                                                    //Set useful variables for paypal form
                                                    $paypal_link = 'payments/paypal/payments.php'; //'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
                                                    
                                                    $paypal_username = 'bellshipitnow@gmail.com'; //Business Email
                                                ?>
                                                <form action="<?php echo $paypal_link; ?>" method="post">
                                                    <!-- Identify your business so that you can collect the payments. -->
                                                    <?php /*<input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
                                                    */?>

                                                    <input type="hidden" name="cmd" value="_xclick" />
                                                    <input type="hidden" name="no_note" value="1" />
                                                    <input type="hidden" name="lc" value="UK" />
                                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />

                                                    <!-- Specify a Buy Now button. -->
                                                    <!-- <input type="hidden" name="cmd" value="_xclick"> -->

                                                    <!-- Specify details about the item that buyers will purchase. -->

                                                    <input type="hidden" name="item_name"
                                                        value="BellShipItNow Shipment Payment">
                                                    <input type="hidden" name="item_id" value="<?=$row_id['id'];?>">
                                                    <input type="hidden" name="tracking-id"
                                                        value="<?=$row_id['tracking'];?>">
                                                    <input type="hidden" name="amount" value="<?=$planprice;?>">
                                                    <input type="hidden" name="currency_code" value="USD">
                                                    <button type="submit" disabled class="btn btn-lg <?php if($row_id['payment_status'] != "1")
                                                    {
                                                        echo "btn-danger";
                                                        // echo "disabled";
                                                    } 
                                                    else
                                                    {
                                                        echo "btn-success";
                                                    }
                                                    ?> remove edit_modal"
                                                    data-toggle="modal" data-id="<?php echo $row_id['id'];?>" <?php if($row_id['payment_status'] == "1")
                                                    {
                                                        echo "disabled";
                                                    } 
                                                    ?>>
                                                    <?php if($row_id['payment_status'] != "1")
                                                    {
                                                        echo "Unpaid";
                                                    } 
                                                    else
                                                    {
                                                        echo "Paid";
                                                    }
                                                    ?>
                                                    </button>
                                                </form>
                                            </td>

                                            <!-- <button type="button" class="btn btn-lg btn-danger remove">X</button></td> -->
                                            </tr>
                                            <?php
                                            }
                                            unset($result_query_order);
                                            ?>
                                            <?php endif;?>
                                            <!-- end shipment invoice -->

                                            <?php 
                                            $query_order = "SELECT * FROM `order_form` where `approve_status` = 1";
                                            $result_query_order = $conn->query($query_order); 
                                            if(!$result_query_order):
                                                ?>
                                            <tr>
                                                <td colspan="8">
                                                <?php echo "
                                                <i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='130' /></i>    
                                                ",false;?>
                                                </td>
                                            </tr>
                                            <?php
                                            else:
                                            $max = 1;
                                            while ($row = $result_query_order->fetch_array(MYSQLI_BOTH))  
                                            { ?>

                                            <td>
                                                <a href="customer.php?do=main_client&id=<?php echo $row['id'];?>"><?php echo $row['customer_id'];?>
                                                </a>
                                            </td>

                                            <td><?php echo $row['tracking'];?></td>
                                            <td><a href="order_view.php?id=<?php echo $row['id'];?>">Items</a></td>
                                            <td>Name: Assistant Form #<?php echo $row['id'];?></td>
                                            <td><?php echo $row['grandtotal'];?></td>
                                            <td><?php echo $row['created_at'];?></td>
                                            <td>
                                                <?php
                                                    $page = 'buy';
                                                    $planprice = $row['grandtotal'];
                                                    $plan = $row['customer_id'].' '.$row['id'];
                                                    $currency = "USD";
                                                    // setcookie("price", "planprice");

                                                    //Set useful variables for paypal form
                                                    $paypal_link = 'payments/paypal/payments.php'; //'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
                                                    
                                                    $paypal_username = 'bellshipitnow@gmail.com'; //Business Email
                                                ?>
                                                <form action="<?php echo $paypal_link; ?>" method="post">

                                                    <!-- Identify your business so that you can collect the payments. -->
                                                    <?php /*<input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
                                                    */?>

                                                    <input type="hidden" name="cmd" value="_xclick" />
                                                    <input type="hidden" name="no_note" value="1" />
                                                    <input type="hidden" name="lc" value="UK" />
                                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />

                                                    <!-- Specify a Buy Now button. -->
                                                    <!-- <input type="hidden" name="cmd" value="_xclick"> -->

                                                    <!-- Specify details about the item that buyers will purchase. -->
                                                   
                                                    <input type="hidden" name="item_name"
                                                        value="BellShipItNow Shipment Payment">
                                                    <input type="hidden" name="item_id" value="<?=$row['id'];?>">
                                                    <input type="hidden" name="tracking-id"
                                                        value="<?=$row['tracking'];?>">
                                                    <input type="hidden" name="amount" value="<?=$planprice;?>">
                                                    <input type="hidden" 
                                                        name="currency_code" value="USD">
                                                    <button type="submit" disabled class="btn btn-lg <?php if($row['is_paid'] != "1")
                                                    {
                                                        echo "btn-danger";
                                                        // echo "disabled";
                                                    } 
                                                    else
                                                    {
                                                        echo "btn-success";
                                                    }
                                                    ?> remove edit_modal"
                                                        data-toggle="modal" data-id="<?php echo $row['id'];?>" <?php if($row['is_paid'] == "1")
                                                        {
                                                            echo "disabled";
                                                        } 
                                                        ?>>
                                                        <?php if($row['is_paid'] != "1")
                                                        {
                                                            echo "Unpaid";
                                                        } 
                                                        else
                                                        {
                                                            echo "Paid";
                                                        }
                                                        ?>
                                                    </button>
                                                </form>
                                            </td>

                                            <!-- <button type="button" class="btn btn-lg btn-danger remove">X</button></td> -->
                                            </tr>
                                            <?php
                                            }
                                            unset($result_query_order);
                                            ?>
                                            <?php 
                                            endif; 
                                            ?>
                                            <?php 
                                            $query_invoice = "SELECT * FROM `customer_invoices` WHERE `approve_status` = 1";
                                            $result_query_invoice = $conn->query($query_invoice); 
                                            if(!$result_query_invoice):
                                                ?>
                                            <tr>
                                                <td colspan="8">
                                                    <?php echo "
                                                <i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='130' /></i>
                                                ",false;?>
                                                </td>
                                            </tr>
                                            <?php
                                            else:
                                            $max = 1;
                                            while ($rows = $result_query_invoice->fetch_array(MYSQLI_BOTH))  
                                            { ?>
                                            <tr>
                                                <td>
                                                    <a href="customer.php?do=main_client&number=<?php echo $rows['customer_id'];?>"><?php echo $rows['customer_id'];?>
                                                    </a>
                                                </td>
                                                <td><?php echo $rows['tracking_id'];?></td>
                                                <td>
                                                    <a href="view_customer_invoice.php?cid=<?php echo $rows['id'];?>">Items</a>
                                                </td>
                                                <td>Name: Customer Invoice #<?php echo $rows['id'];?></td>
                                                <td><?php echo formato($rows['total_balance']);?></td>
                                                <td><?php echo $rows['created_at'];?></td>
                                                <td>
                                                    <?php
                                                        $page = 'buy';
                                                        $planprice = $rows['total_balance'];
                                                        $plan = $rows['customer_id'].' '.$rows['id'];
                                                        $currency = "USD";
                                                        // setcookie("price", "planprice");

                                                        //Set useful variables for paypal form
                                                        $paypal_link = 'payments/paypal/payments.php'; //'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
                                                            
                                                        $paypal_username = 'bellshipitnow@gmail.com'; //Business Email
                                                    ?>
                                                    <form action="<?php echo $paypal_link; ?>" method="post">
                                                        <!-- Identify your business so that you can collect the payments. -->
                                                        <?php /*<input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
                                                        */?>

                                                        <input type="hidden" name="cmd" value="_xclick" />
                                                        <input type="hidden" name="no_note" value="1" />
                                                        <input type="hidden" name="lc" value="UK" />
                                                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                                                        <!-- Specify a Buy Now button. -->
                                                        <!-- <input type="hidden" name="cmd" value="_xclick"> -->

                                                        <!-- Specify details about the item that buyers will purchase. -->
                                                        
                                                        <input type="hidden" name="customer_name"
                                                            value="Customer Shipment Payment">
                                                        <input type="hidden" name="customer_item_id" value="<?=$rows['id'];?>">
                                                        <input type="hidden" name="tracking_id" value="<?=$rows['tracking_id'];?>">
                                                        <input type="hidden" name="total_amount" value="<?= $planprice; ?>">
                                                        <input type="hidden" name="currency_code" value="USD">
                                                        <button type="submit" disabled class="btn btn-lg <?php if($rows['is_paid'] != "1")
                                                        {  "btn-danger";
                                                            // echo "disabled";
                                                        } 
                                                        else
                                                        {
                                                            echo "btn-success";
                                                        }
                                                        ?> remove edit_modal"
                                                            data-toggle="modal" data-id="<?php echo $rows['id'];?>" <?php if($rows['is_paid'] == "1")
                                                            {
                                                                echo "disabled";
                                                            } 
                                                           ?>>
                                                           <?php if($rows['is_paid'] != "1")
                                                            {
                                                                echo "Unpaid";
                                                            } 
                                                            else
                                                            { 
                                                                echo "Paid"; 
                                                            }
                                                            ?>
                                                        </button>
                                                    </form>
                                                </td>

                                                <!-- <button type="button" class="btn btn-lg btn-danger remove">X</button></td> -->
                                            </tr>
                                            <?php
                                            }
                                            unset($result_query_order);?>
                                            <?php endif;?>

                                        </tbody>

                                        <?php 
                                        } 
                                        else
                                        { 
                                        ?>
                                        <thead>
                                            <tr>
                                                <th>Item</th>
                                                <th>Duration</th>
                                                <th>Shipping</th>
                                                <th>Handling</th>
                                                <th>Consolidation</th>
                                                <th>TCA</th>
                                                <th>Insurance</th>
                                                <th>Tax</th>
                                                <!-- <th>Description</th> -->
                                                <th>Total</th>
                                                <th>Created at</th>
                                                <th>Invoice</th>
                                                <th>Tracking No</th>
                                                <th>Shipping Label</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- shipment -->
                                            <?php 
                                            $shipt_corier = "SELECT * FROM  `add_courier` where `username`='$user->username' AND `status_courier` = 'Approved'";
                                            $shipt_corier_order = $conn->query($shipt_corier); 
                                            if(!$shipt_corier_order):
                                                ?>
                                            <tr>
                                                <td colspan="8">
                                                <?php echo "
                                                <i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='130' /></i>
                                                ",false;?>
                                                </td>
                                            </tr>
                                            <?php
                                            else:
                                            $max = 1;
                                            while ($row_id = $shipt_corier_order->fetch_array(MYSQLI_BOTH))  
                                            { ?>
                                            <tr>
                                            <td>
                                                <a href="order_view.php?id=<?php echo $row_id['id'];?>">Items</a>
                                            </td>
                                            <!-- <td>Name: Shipment Form #<?php echo $row_id['id'];?></td> -->
                                            <td>
                                                <?php echo $row_id['duration_terms'];?>
                                            </td>
                                            <td>
                                                <?= !empty($row_id['shipping_charges'])?$row_id['shipping_charges']:0.00; ?>
                                            </td>
                                            <td>
                                                <?= !empty($row_id['handling_charges'])?$row_id['handling_charges']:0.00; ?>
                                            </td>
                                            <td>
                                                <?= !empty($row_id['consolidation_charges'])?$row_id['consolidation_charges']:0.00; ?>
                                            </td>
                                            <td>
                                                <?= !empty($row_id['tca_charges'])?$row_id['tca_charges']:0.00; ?>
                                            </td>
                                            <td>
                                                <?= !empty($row_id['insurance_charges'])?$row_id['insurance_charges']:0.00; ?>
                                            </td>
                                            <td>
                                                <?= !empty($row_id['tax_charges'])?$row_id['tax_charges']:0.00; ?>
                                            </td>
                                            <td>
                                                <?= !empty($row_id['r_costtotal'])?$row_id['r_costtotal']:0.00; ?>
                                            </td>
                                            <td>
                                                <?= $row_id['created'];?>
                                            </td>
                                            <td class="d-flex">
                                                <a href="invoice/inv_ship.php?do=inv_ship&action=ship&id=<?= $row_id['id']; ?>">
                                                <i class="fa fa-eye"></i> View</a>
                                            </td>
                                            <td>
                                                <?= $row_id['tracking']; ?>
                                            </td>
                                            <td>
                                                <a href="<?= $row_id['shipping_label']; ?>">
                                                <i class="fa fa-eye"></i> View</a>
                                            </td>
                                            <td>
                                                <?php
                                                    $page = 'buy';
                                                    $planprice = $row_id['r_costtotal'];
                                                    $plan = $row_id['id'].' '.$row_id['id'];
                                                    $currency = "USD";
                                                    // setcookie("price", "planprice");

                                                    //Set useful variables for paypal form
                                                    $paypal_link = 'payments/paypal/payments.php'; //'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
                                                    
                                                    $paypal_username = 'bellshipitnow@gmail.com'; //Business Email
                                                ?>
                                                <form action="<?php echo $paypal_link; ?>" method="post">
                                                    <!-- Identify your business so that you can collect the payments. -->
                                                    <?php /*<input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
                                                    */?>

                                                    <input type="hidden" name="cmd" value="_xclick" />
                                                    <input type="hidden" name="no_note" value="1" />
                                                    <input type="hidden" name="lc" value="UK" />
                                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />

                                                    <!-- Specify a Buy Now button. -->
                                                    <!-- <input type="hidden" name="cmd" value="_xclick"> -->

                                                    <!-- Specify details about the item that buyers will purchase. -->
                                                    <input type="hidden" name="shipments" value="<?php echo $user->username?>">
                                                    <input type="hidden" name="ship_item" value="BellShipItNow Shipment Payment">
                                                    <input type="hidden" name="shipment_id" value="<?=$row_id['id'];?>">
                                                    <input type="hidden" name="shipment-tracking" value="<?=$row_id['tracking'];?>">
                                                    <input type="hidden" name="r_costtotal" value="<?=$row_id['r_costtotal'];?>">
                                                    <input type="hidden" name="currency_code" value="USD">
                                                   
                                                    <button type="submit" class="btn btn-lg <?php if($row_id['payment_status'] != "1")
                                                    {
                                                        echo "btn-danger";
                                                    } 
                                                    else
                                                    {
                                                        echo "btn-success";
                                                    }
                                                    ?> remove edit_modal"
                                                    data-toggle="modal" data-id="<?php echo $row_id['id'];?>" <?php if($row_id['payment_status'] == "1")
                                                    {
                                                        echo "disabled";
                                                    } 
                                                   ?>>
                                                   <?php if($row_id['payment_status'] != "1")   
                                                    {
                                                        echo "Pay Now";
                                                    } 
                                                    else
                                                    {
                                                        echo "Paid";
                                                    }
                                                    ?>
                                                   </button>      
                                                </form>
                                            </td>
                                           
                                            <!-- <button type="button" class="btn btn-lg btn-danger remove">X</button></td> -->
                                            </tr>
                                            <?php
                                            }
                                            unset($result_query_order);?>
                                            <?php endif;?>
                                            <?php 
                                            $query_order = "SELECT * FROM `order_form` WHERE `customer_id`='$customer_number' and `approve_status` = 1";
                                            $result_query_order = $conn->query($query_order); 
                                            if(!$result_query_order):
                                                ?>
                                            <tr>
                                                <td colspan="7">
                                                    <?php echo "
                                                    <i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='130' /></i>  
                                                    ",false;?>
                                                </td>
                                            </tr>
                                            <?php
                                            else:
                                            $max = 1;
                                            while ($row = $result_query_order->fetch_array(MYSQLI_BOTH))  
                                            { ?>
                                            <tr>
                                                <!-- <td><a href="" class="edit_modal" data-toggle="modal" data-id="<?php echo $row['id'];?>"><?php echo $row['customer_id'];?></a></td> -->
                                                <td><?php echo $row['tracking'];?></td>
                                                <td><a href="order_view.php?id=<?php echo $row['id'];?>">Items</a></td>
                                                <td>Name: Assistant Form #<?php echo $row['id'];?></td>
                                                <td><?php echo $row['grandtotal'];?></td>
                                                <td><?php echo $row['created_at'];?></td>
                                                <td>
                                                    <?php
                                                        $page = 'buy';
                                                        $planprice = $row['grandtotal'];
                                                        $plan = $row['customer_id'].' '.$row['id'];
                                                        $currency = "USD";
                                                        // setcookie("price", "planprice");

                                                        //Set useful variables for paypal form
                                                        $paypal_link = 'payments/paypal/payments.php'; //'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
                                                        
                                                        $paypal_username = 'bellshipitnow@gmail.com'; //Business Email
                                                    ?>
                                                    <form action="<?php echo $paypal_link; ?>" method="post">
                                                        <!-- Identify your business so that you can collect the payments. -->
                                                        <?php /*<input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
                                                        */?>
                                                        <input type="hidden" name="cmd" value="_xclick" />
                                                        <input type="hidden" name="no_note" value="1" />
                                                        <input type="hidden" name="lc" value="UK" />
                                                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />

                                                        <!-- Specify a Buy Now button. -->
                                                        <!-- <input type="hidden" name="cmd" value="_xclick"> -->

                                                        <!-- Specify details about the item that buyers will purchase. -->
                                                        <!-- <input type="hidden" name="cus_id" value="<?=$row['customer_id'];?>"> -->
                                                        <input type="hidden" name="item_name" value="BellShipItNow Shipment Payment">
                                                        <input type="hidden" name="item_id" value="<?=$row['id'];?>">
                                                        <input type="hidden" name="tracking-id" value="<?=$row['tracking'];?>">
                                                        <input type="hidden" name="cuid" value="<?=$row['customer_id'];?>"> 
                                                        <input type="hidden" name="amount" value="<?= $planprice;?>">
                                                        <input type="hidden" name="currency_code" value="USD">
                                                        <button type="submit" class="btn btn-lg <?php if($row['is_paid'] != "1")
                                                        {
                                                            echo "btn-danger";
                                                        }  
                                                        else
                                                        {
                                                            echo "btn-success";
                                                        }
                                                        ?> remove edit_modal"
                                                            data-toggle="modal" data-id="<?php echo $row['id'];?>" 
                                                            <?php if($row['is_paid'] == "1")
                                                            {
                                                                echo "disabled";
                                                            } 
                                                           ?>>
                                                            <?php 
                                                            if($row['is_paid'] != "1")
                                                            {
                                                                echo "Pay Now";
                                                            } 
                                                            else
                                                            {
                                                                echo "Paid";
                                                            }
                                                            ?>
                                                        </button>
                                                    </form>
                                                </td>
                                                <!-- <button type="button" class="btn btn-lg btn-danger remove">X</button></td> -->
                                            </tr>
                                            <?php
                                            }
                                            unset($result_query_order);?>
                                            <?php endif;?>
                                            <?php 
                                            $query_invoice = "SELECT * FROM `customer_invoices` where `customer_id`='$customer_number' and `approve_status` = 1";
                                            $result_query_invoice = $conn->query($query_invoice); 
                                            if(!$result_query_invoice):
                                            ?>
                                            <tr>
                                                <td colspan="7">
                                                <?php echo "
                                                <i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='130' /></i>  
                                                ",false;?>
                                                </td>
                                            </tr>
                                            <?php
                                            else:
                                            $max = 1;
                                            while ($rows = $result_query_invoice->fetch_array(MYSQLI_BOTH))  
                                            { 
                                            ?>
                                            <tr>
                                                <td><?php echo $rows['tracking_id'];?></td>
                                                <td><a href="view_customer_invoice.php?cid=<?php echo $rows['id'];?>">Items</a>
                                                </td>
                                                <td>Name: Customer Invoice #<?php echo $rows['id'];?></td>
                                                <td><?php echo formato($rows['total_balance']);?></td>
                                                <td><?php echo $rows['created_at'];?></td>
                                                <td>
                                                <?php
                                                    $page = 'buy';
                                                    $planprice = $rows['total_balance'];
                                                    $plan = $rows['customer_id'].' '.$rows['id'];
                                                    $currency = "USD";
                                                    // setcookie("price", "planprice");

                                                    //Set useful variables for paypal form
                                                    $paypal_link = 'payments/paypal/payments.php'; //'https://www.sandbox.paypal.com/cgi-bin/webscr'; //Test PayPal API URL
                                                    
                                                    $paypal_username = 'bellshipitnow@gmail.com'; //Business Email
                                                ?>
                                                <form action="<?php echo $paypal_link; ?>" method="post">
                                                    <!-- Identify your business so that you can collect the payments. -->
                                                    <?php /*<input type="hidden" name="business" value="<?php echo $paypal_username; ?>">
                                                    */?>
                                                    <input type="hidden" name="cmd" value="_xclick" />
                                                    <input type="hidden" name="no_note" value="1" />
                                                    <input type="hidden" name="lc" value="UK" />
                                                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />

                                                    <!-- Specify a Buy Now button. -->
                                                    <!-- <input type="hidden" name="cmd" value="_xclick"> -->

                                                    <!-- Specify details about the item that buyers will purchase. -->
                                                    <!-- <input type="hidden" name="cu_id" value="<?=$rows['customer_id'];?>"> -->
                                                    <input type="hidden" name="customer_name"
                                                        value="Customer Shipment Payment">
                                                    <input type="hidden" name="customer_item_id"
                                                        value="<?=$rows['id'];?>">

                                                    <input type="hidden" name="cus_id"
                                                        value="<?=$rows['customer_id'];?>">    
                                                    <input type="hidden" name="tracking_id"
                                                        value="<?=$rows['tracking_id'];?>">
                                                    <input type="hidden" name="total_amount"
                                                        value="<?=$planprice;?>">
                                                    <input type="hidden" name="currency_code" value="USD">
                                                    <button type="submit" class="btn btn-lg <?php if($rows['is_paid'] != "1")
                                                    {
                                                        echo "btn-danger";
                                                    } 
                                                    else
                                                    {
                                                        echo "btn-success";
                                                    }
                                                    ?> remove edit_modal"
                                                        data-toggle="modal" data-id="<?php echo $rows['id'];?>" <?php if($rows['is_paid'] == "1"){
                                                            echo "disabled";
                                                        } 
                                                        ?>>
                                                        <?php if($rows['is_paid'] != "1")
                                                        {
                                                            echo "Pay Now";
                                                        } 
                                                        else
                                                        {
                                                            echo "Paid";
                                                        }
                                                    ?>
                                                    </button>
                                                </form>
                                            </td>
                                            <!-- <button type="button" class="btn btn-lg btn-danger remove">X</button></td> -->
                                            </tr>
                                            <?php
                                            }
                                            unset($result_query_order);?>
                                            <?php endif;?>
                                        </tbody>
                                        <?php  } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <!-- footer -->
            <?php 
                /*
                <?php
    
                    if (!defined("_VALID_PHP"))
                    die('Direct access to this location is not allowed.');
                ?>

                <footer class="footer text-center bg-color-head">
                    &copy <?php echo date('Y').' '.$core->site_name;?> - <?php echo $lang['foot'] ?>
                </footer> 
                */
            ?>
            <!-- End footer -->
        </div>
        <?php include 'footer.php'; ?>
    </div>

    <!-- End Wrapper -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="dist/js/app.min.js"></script>
    <script src="dist/js/app.init.js"></script>
    <script src="dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>

    <!--This page plugins -->
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
</body>
</html>