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
    
    if (!$user->is_Admin())
    {
        if (!$user->logged_in) 
        {
        redirect_to("login.php");
        } 
        else 
        {
            redirect_to("authMsg.php");
        }
    }

    $row = $user->getUserData();
    $servername = DB_SERVER;
    $username   = DB_USER;
    $password   = DB_PASS;
    $dbname     = DB_DATABASE;
    $conn       = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Approve Order
    if(isset($_GET['app']))
    {
        $id = $_GET['id'];
        $query = "update order_form set approve_status=1 where id=$id";
        echo $query;
        $conn->query($query);
        header('Location: order_manage.php');
    }

    // Delete order
    if(isset($_GET['del']))
    {
        $id = $_GET['id'];
        $query = "delete from order_form where id=$id";
        $conn->query($query);
        header('Location: order_manage.php');
    }

    if(isset($_POST['submit']))
    {   
        // echo "<pre>";
        // print_r($_POST);
        // exit;
        $id = $_POST['order_id'];
        $product = array();
        if(isset($_POST['item']))
        {
            foreach ($_POST['item'] as $value) 
            {
                if(!empty($value))
                    $product['item'][] = $value;
            }
            foreach ($_POST['value'] as $value) 
            {
                if(!empty($value))
                    $product['value'][] = $value;
            }
            foreach ($_POST['quantity'] as $value) 
            {
                if(!empty($value))
                    $product['quantity'][] = $value;
            }
            foreach ($_POST['category'] as $value) 
            {
                if(!empty($value))
                    $product['category'][] = $value;
            }
            foreach ($_POST['product_link'] as $value) 
            {
                if(!empty($value))
                    $product['product_link'][] = $value;
            }
            foreach ($_POST['ship_method'] as $value) 
            {
                if(!empty($value))
                    $product['ship_method'][] = $value;
            }
            foreach ($_POST['ship_fee'] as $value) 
            {
                if(!empty($value))
                    $product['ship_fee'][] = $value;
            }
            foreach ($_POST['total'] as $value) 
            {
                if(!empty($value))
                    $product['total'][] = $value;
            }
            $product = json_encode($product);
            $grandtotal = $_POST['grand_total'];
            $tracking_id = $_POST['tracking_id'];

            $servername = DB_SERVER;
            $username   = DB_USER;
            $password   = DB_PASS;
            $dbname     = DB_DATABASE;
            $conn       = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) 
            {
                die("Connection failed: " . $conn->connect_error);
            }
            $query = "update order_form set tracking ='$tracking_id', product = '$product',grandtotal=$grandtotal where id=$id";
            $conn->query($query);
        }
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
    
    <title>Shop Assistant | <?php echo $core->site_name ?></title>
    <!-- This page plugin CSS -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        #loading 
        {
            position: fixed;
            display: block;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            text-align: center;
            opacity: 0.9;
            background-color: #fff;
            z-index: 99;
        }

        #loading-image 
        {
            position: absolute;
            top: 45%;
            left: 45%;
            z-index: 100;
        }
    </style>
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
                        <h4 class="page-title">
                            Shop Assistant Orders
                        </h4>
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
                                                <th>Customer Number</th>
                                                <th>Name</th>
                                                <!-- <th>Tracking ID</th> -->
                                                <th>Item</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Category</th>
                                                <th>Product Link</th>
                                                <th>Shipment Mode</th>
                                                <th>Total Price</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                $query_order = "SELECT * FROM order_form WHERE `approve_status` = 0 ORDER BY created_at DESC";
                                                $result_query_order = $conn->query($query_order); 
                                                if(!$result_query_order):
                                            ?>
                                            <tr>
                                                <td colspan="12">
                                                    <?php echo "
                                                    <i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='130' alt='shopping,gifts,bags'/></i>                             
                                                    ",false;?>
                                                </td>
                                            </tr>
                                            <?php
                                            else:
                                            $max = 1;
                                            while ($rows = $result_query_order->fetch_array(MYSQLI_BOTH))  
                                            { ?>
                                                <tr>
                                                    <td>
                                                        <a href="customer.php?do=main_client&id=<?php echo $row->id;?>&customer_id=<?= $rows['customer_id']; ?>"><?php echo $rows['customer_id'];?>
                                                        </a>
                                                        <input type="hidden" name="customer_id" value="<?= $rows['customer_id'];?>">
                                                    </td>
                                                    <td>
                                                        <?php echo $rows['name'];?>
                                                    </td>
                                                                                                        
                                                    <?php
                                                        $product = json_decode($rows['product'], true);
                                                        if(!empty($product))
                                                        {  
                                                            $max = sizeOf($product["item"]);
                                                            // echo '<td>'.$rows['tracking'].'</td>';
                                                            echo '<td>';
                                                            
                                                            for($i=0;$i<$max;$i++)
                                                            {
                                                                if(isset($product["item"][$i]))
                                                                {
                                                                    echo $product["item"][$i];
                                                                    if($i != ($max - 1))
                                                                    echo '<br/><hr/>';
                                                                }
                                                                
                                                            }
                                                            echo '</td><td>';
                                                            for($i=0;$i<$max;$i++)
                                                            {  
                                                                if(isset($product["value"][$i]))
                                                                {
                                                                
                                                                    echo $product["value"][$i];
                                                                
                                                                    if($i != ($max - 1))
                                                                
                                                                    echo '<br/><hr/>';
                                                                }
                                                            }
                                                            echo '</td><td>';
                                                            for($i=0;$i<$max;$i++)
                                                            {  
                                                                if(isset($product["quantity"][$i]))
                                                                {
                                                                    echo $product["quantity"][$i];
                                                                    if($i != ($max - 1))
                                                                    echo '<br/><hr/>';
                                                                }
                                                            }
                                                            echo '</td><td>';
                                                            for($i=0;$i<$max;$i++)
                                                            { 
                                                                if(isset($product["category"][$i]))
                                                                {
                                                                    echo $product["category"][$i];
                                                                    if($i != ($max - 1))
                                                                    echo '<br/><hr/>';
                                                                }
                                                                
                                                            }
                                                            echo '</td><td>';
                                                            for($i=0;$i<$max;$i++)
                                                            {  
                                                                if(isset($product["product_link"][$i]))
                                                                {
                                                                    echo $product["product_link"][$i];
                                                                    if($i != ($max - 1))
                                                                    echo '<br/><hr/>';
                                                                }
                                                            }
                                                            echo '</td><td>';
                                                            for($i=0;$i<$max;$i++)
                                                            {   
                                                                if(isset($product["ship_method"][$i]))
                                                                {
                                                                    echo $product["ship_method"][$i];
                                                                    if($i != ($max - 1))
                                                                    echo '<br/><hr/>';
                                                                }
                                                            }
                                                            echo '</td>';
                                                           
                                                            echo '<td>';
                                                            for($i=0;$i<$max;$i++)
                                                            {   
                                                                if(isset($product["total"][$i]))
                                                                {
                                                                    echo $product["total"][$i];
                                                                    if($i != ($max - 1))
                                                                    echo '<br/><hr/>';
                                                                }
                                                            }
                                                            echo '</td>';
                                                        }
                                                        else
                                                            echo '<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td>';
                                                        ?>
                                                    
                                                    <td class="d-flex">
                                                        <!-- <button type="submit" data-toggle="tooltip" title="Approve" name="approve_btn" class="btn btn-lg btn-success remove"><img src="assets/images/tick.png" height=20 width=20 alt="delete"/></button> -->
                                                        <a href='order_manage.php?app&id=<?php echo $rows['id'];?>' class="btn btn-lg btn-success remove"><img src="assets/images/tick.png" height=20 width=20 alt="delete"/></a>&nbsp;
                                                        <button type="button" class="btn btn-lg btn-info remove edit_modal" data-toggle="tooltip" title="Edit" data-toggle="modal" data-id="<?php echo $rows['id'];?>"><i class="fa fa-eye" aria-hidden="true"></i></button>&nbsp;
                                                    <a href='order_manage.php?del&id=<?php echo $rows['id'];?>' class="btn btn-lg btn-danger remove"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
                                                </tr>
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
    
    <!-- The Modal -->
    <div class="modal fade" id="edit-modal">
        <div id="loading">
            <img id="loading-image" src="../assets/images/loader.gif" alt="Loading..." />
        </div>
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <form method="post" id="edit-form"> 
                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Order</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <!-- Modal body -->
                    <div class="modal-body">
                        <input type="hidden" id="order_id" name="order_id">
                        <div class="table-bx table-border text-center table-responsive">
                            <table id="edit-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                            <h4 class="m-0">Item</h4>
                                        </th>
                                        <!-- <th scope="col">
                                            <h4 class="m-0">Tracking ID</h4>
                                        </th> -->
                                        <th scope="col">
                                            <h4 class="m-0">Value in US $</h4>
                                        </th>
                                        <th scope="col">
                                            <h4 class="m-0">Quantity</h4>
                                        </th>
                                        <th scope="col">
                                            <h4 class="m-0">Category</h4>
                                        </th>
                                        <th scope="col">
                                            <h4 class="m-0">Total Value</h4>
                                        </th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        <!-- <button type="submit" id="submit" class="btn btn-success" name="submit">Update</button>
                        <button type="button" id="send_invoice" class="btn btn-primary" name="send_invoice">Send Invoice</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>

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
    <script type="text/javascript">
        $(document).ready(function(e)
        {
            $('#loading').hide();
            $(document).on("click", ".edit_modal", function () 
            {
                $('#loading').show();
                var id = $(this).data('id');
                $('#order_id').val(id);
                var data = '';
                $.ajax({
                    type: "POST",
                    url: "edit_order.php",
                    data: "id="+id,
                    cache: false,
                    success: function(html) 
                    {   
                        $('#loading').hide();
                        data = `<thead>
                        <tr><th scope="col"><h4 class="m-0">Item</h4></th>
                        <th scope="col"><h4 class="m-0">Item Price (USD)</h4></th>
                        <th scope="col"><h4 class="m-0">Quantity</h4></th>
                      
                        <th scope="col"><h4 class="m-0">Category</h4></th>
                        <th scope="col"><h4 class="m-0">Product link</h4></th>
                        <th scope="col"><h4 class="m-0">Shipment Mode</h4></th>
                        <th scope="col"><h4 class="m-0">Total Value(USD)</h4></th>
                        </tr></thead>`;
                        data += html;
                        $("#edit-table").html(data);
                    }
                });
                $('#edit-modal').modal('show');
            });

            $(document).on('keyup','.quantity',function()
            {
                var value = $(this).closest("tr").find(".value").val();
                var quantity = $(this).val();
                var ship_fee = $(this).closest("tr").find(".ship_fee").val();
                var total = 0;
                if(ship_fee == '')
                    ship_fee = 0;
                if(value != 0)
                    total = (value * quantity) + parseInt(ship_fee);
                $(this).closest("tr").find(".total").val(total);
                var grandtotal = 0;
                $('.total').each(function(i, obj) 
                {
                    if($(this).val() != '')
                        grandtotal = grandtotal + parseInt($(this).val());
                });
                $("#grand_total").val(grandtotal);
            });

            $(document).on('keyup','.value',function()
            {
                var quantity = $(this).closest("tr").find(".quantity").val();
                var value = $(this).val();
                var ship_fee = $(this).closest("tr").find(".ship_fee").val();
                var total = 0;
                if(ship_fee == '')
                    ship_fee = 0;
                if(quantity != 0)
                    total = (value * quantity) + parseInt(ship_fee);
                $(this).closest("tr").find(".total").val(total);
                var grandtotal =0;
                $('.total').each(function(i, obj) 
                {
                    if($(this).val() != '')
                    grandtotal = grandtotal + parseInt($(this).val());
                });
                $("#grand_total").val(grandtotal);
            });

            $(document).on('keyup','.ship_fee',function()
            {
                var quantity = $(this).closest("tr").find(".quantity").val();
                var ship_fee = $(this).val();
                var value = $(this).closest("tr").find(".value").val();
                var total = 0;
                if(ship_fee == '')
                    ship_fee = 0;
                if(quantity != 0)
                    total = (value * quantity) + parseInt(ship_fee);
                $(this).closest("tr").find(".total").val(total);
                var grandtotal =0;
                $('.total').each(function(i, obj) 
                {
                    if($(this).val() != '')
                    grandtotal = grandtotal + parseInt($(this).val());
                });
                $("#grand_total").val(grandtotal);
            });

            $(document).on("click","#send_invoice",function(inve)
            {
                $.ajax({
                    type: "POST",
                    url: "send_invoice.php",
                    data:  $("#edit-form").serializeArray(),
                    cache: false,
                    success: function(html) 
                    {   
                        $('#loading').hide();
                        data = `<thead>
                        <tr><th scope="col"><h4 class="m-0">Item</h4></th>
                        <th scope="col"><h4 class="m-0">Item Price (USD)</h4></th>
                        <th scope="col"><h4 class="m-0">Quantity</h4></th>
                        <th scope="col"><h4 class="m-0">Category</h4></th>
                        <th scope="col"><h4 class="m-0">Product link</h4></th>
                        <th scope="col"><h4 class="m-0">Shipment Mode</h4></th>
                        <th scope="col"><h4 class="m-0">Consolidation Fees</h4></th>
                        <th scope="col"><h4 class="m-0">Hanlding Fees</h4></th>
                        <th scope="col"><h4 class="m-0">TCA</h4></th>
                        <th scope="col"><h4 class="m-0">Total Value(USD)</h4></th>
                        </tr></thead>`;
                        data += html;
                        $("#edit-table").html(data);
                    }
                });
            });
        });
    </script>
</body>
</html>


