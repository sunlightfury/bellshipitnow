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
                        <h4 class="page-title">View Order</h4>
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
                                    <table id="zero_config" class="table table-bordered table-condensed table-hover table-striped">
                                        <thead>
                                            <tr>
                                            <th><b>Items Name</b></th>                                             
                                            <th><b>Quantity</b></th>
                                            <th><b>Category</b></th>
                                            <th><b>Product Link</b></th>
                                            <th><b>Shipment Mode</b></th>
                                            <th><b>Shipment Fee</b></th>
                                            <th><b>Pay Mode</b></th>     
                                            <th><b>Weight</b></th> 
                                            <th><b>Balance(USD)</b></th> 
 
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            
                                            $query_order = "SELECT * FROM `customer_invoices` WHERE id ='".$_GET['cid']."'";
                                            $result_query_order = $conn->query($query_order); 
                                            if(!$result_query_order):
                                                ?>
                                            <tr>
                                                <td colspan="9">
                                                <?php echo "
                                                <i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='130' alt='customer support with one of our shipping agents.' /></i>                             
                                                ",false;?>
                                                </td>
                                            </tr>
                                            <?php
                                            else:
                                             
                                            while ($row = $result_query_order->fetch_array(MYSQLI_BOTH))  
                                            {?>
                                            <td><?php echo $row['items_name'];?></td>
                                            <td><?php echo $row['catergory'];?></td>
                                            <td><?php echo $row['product_link'];?></td>
                                            <td><?php echo $row['shipment_mode'];?></td>
                                            <td><?php echo $row['shipment_fee'];?></td>
                                            <td><?php echo $row['pay_mode'];?></td>
                                            <td><?php echo $row['description'];?></td>
                                            <td><?php echo $row['weight'];?> </td>
                                            <td><?php echo formato($row['total_balance']);?></td> 
                                            <?php
                                            }
                                            unset($result_query_order);?>
                                            <?php endif;?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>
            <!-- footer -->

        <?php /*<?php
  
        if (!defined("_VALID_PHP"))
        die('Direct access to this location is not allowed.');
        ?>          
            
            <footer class="footer text-center bg-color-head">
                &copy <?php echo date('Y').' '.$core->site_name;?> - <?php echo $lang['foot'] ?>
            </footer> */?>
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