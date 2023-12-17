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
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif
        }

        .container {
            margin: 30px auto;
        }

        .container .card {
            width: 100%;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            background: #fff;
            border-radius: 0px;
        }

        body {
            background: #eee
        }

        .btn.btn-primary {
            background-color: #ddd;
            color: black;
            box-shadow: none;
            border: none;
            font-size: 20px;
            width: 100%;
            height: 100%;
        }

        .btn.btn-primary:focus {
            box-shadow: none;
        }

        .container .card .img-box {
            width: 80px;
            height: 50px;
        }

        .container .card img {
            width: 100%;
            object-fit: fill;
        }

        .container .card .number {
            font-size: 24px;
        }

        .container .card-body .btn.btn-primary .fab.fa-cc-paypal {
            font-size: 32px;
            color: #3333f7;
        }

        .fab.fa-cc-amex {
            color: #1c6acf;
            font-size: 32px;
        }

        .fab.fa-cc-mastercard {
            font-size: 32px;
            color: red;
        }

        .fab.fa-cc-discover {
            font-size: 32px;
            color: orange;
        }

        .c-green {
            color: green;
        }

        .box {
            height: 40px;
            width: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #ddd;
        }

        .btn.btn-primary.payment {
            background-color: #1c6acf;
            color: white;
            border-radius: 0px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 24px;
        }


        .form__div {
            height: 50px;
            position: relative;
            margin-bottom: 24px;
        }

        .form-control {
            width: 100%;
            height: 45px;
            font-size: 14px;
            border: 1px solid #DADCE0;
            border-radius: 0;
            outline: none;
            padding: 2px;
            background: none;
            z-index: 1;
            box-shadow: none;
        }

        .form__label {
            position: absolute;
            left: 16px;
            top: 10px;
            background-color: #fff;
            color: #80868B;
            font-size: 16px;
            transition: .3s;
            text-transform: uppercase;
        }

        .form-control:focus+.form__label {
            top: -8px;
            left: 12px;
            color: #1A73E8;
            font-size: 12px;
            font-weight: 500;
            z-index: 10;
        }

        .form-control:not(:placeholder-shown).form-control:not(:focus)+.form__label {
            top: -8px;
            left: 12px;
            font-size: 12px;
            font-weight: 500;
            z-index: 10;
        }

        .form-control:focus {
            border: 1.5px solid #1A73E8;
            box-shadow: none;
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
                            Make Payment
                        </h4>
                    </div>
                </div>
            </div>

            <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div class="card p-3">
                        <div class="img-box">
                            <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt="">
                        </div>
                        <div class="number">
                            <label class="fw-bold" for="">**** **** **** ****</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small><span class="fw-bold">Expiry date:</span><span>12/25</span></small>
                            <small><span class="fw-bold">Name:</span><span></span></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div class="card p-3">
                        <div class="img-box">
                            <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png"
                                alt="">
                        </div>
                        <div class="number">
                            <label class="fw-bold">**** **** **** ****</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small><span class="fw-bold">Expiry date:</span><span>12/25</span></small>
                            <small><span class="fw-bold">Name:</span><span></span></small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-lg-0 mb-3">
                    <div class="card p-3">
                        <div class="img-box">
                            <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png"
                                alt="">
                        </div>
                        <div class="number">
                            <label class="fw-bold">**** **** **** ****</label>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <small><span class="fw-bold">Expiry date:</span><span>12/25</span></small>
                            <small><span class="fw-bold">Name:</span><span></span></small>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-4">
                    <div class="card p-3">
                        <p class="mb-0 fw-bold h4">Payment Method</p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card p-3">
                        <div class="card-body border p-0">
                            <!-- <p>
                                <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between"
                                    data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                    aria-controls="collapseExample">
                                    <span class="fw-bold">PayPal</span>
                                    <span class="fab fa-cc-paypal">
                                    </span>
                                </a>
                            </p> -->
                            <div class="collapse p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-8">
                                        <p class="h4 mb-0">Summary</p>
                                        <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of
                                                product</span></p>
                                        <p class="mb-0"><span class="fw-bold">Price:</span><span
                                                class="c-green">:$452.90</span></p>
                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                            nihil neque
                                            quisquam aut
                                            repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                            quis,
                                            iste harum ipsum hic, nemo qui!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body border p-0">
                            <p>
                                <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between"
                                    data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true"
                                    aria-controls="collapseExample">
                                    <span class="fw-bold">Credit Card</span>
                                    <span class="">
                                        <span class="fab fa-cc-amex"></span>
                                        <span class="fab fa-cc-mastercard"></span>
                                        <span class="fab fa-cc-discover"></span>
                                    </span>
                                </a>
                            </p>
                            <div class="collapse show p-3 pt-0" id="collapseExample">
                                <div class="row">
                                    <div class="col-lg-5 mb-lg-0 mb-3">
                                        <p class="h4 mb-0">Summary</p>
                                        <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of
                                                product</span>
                                        </p>
                                        <p class="mb-0">
                                            <span class="fw-bold">Price:</span>
                                            <span class="c-green">:$452.90</span>
                                        </p>
                                        <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque
                                            nihil neque
                                            quisquam aut
                                            repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab
                                            quis,
                                            iste harum ipsum hic, nemo qui!</p>
                                    </div>
                                    <div class="col-lg-7">
                                        <form action="" class="form">
                                            <div class="row">
                                                <!-- <div class="col-12">
                                                    <div class="form__div">
                                                        <input type="text" class="form-control" placeholder=" ">
                                                        <label for="" class="form__label">Card Number</label>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form__div">
                                                        <input type="text" class="form-control" placeholder=" ">
                                                        <label for="" class="form__label">MM / yy</label>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form__div">
                                                        <input type="password" class="form-control" placeholder=" ">
                                                        <label for="" class="form__label">cvv code</label>
                                                    </div>
                                                </div>
                                                <div class="col-12">
                                                    <div class="form__div">
                                                        <input type="text" class="form-control" placeholder=" ">
                                                        <label for="" class="form__label">name on the card</label>
                                                    </div>
                                                </div> -->
                                                <div class="col-12" id="paypal-button-container">
                                                    <!-- <div class="btn btn-primary payment">
                                                        Make Payment
                                                    </div> -->
                                                </div>
                                                <script>
                                                    paypal.Buttons({
                                                        createOrder() {
                                                        return fetch("/my-server/create-paypal-order", {
                                                            method: "POST",
                                                            headers: {
                                                            "Content-Type": "application/json",
                                                            },
                                                            body: JSON.stringify({
                                                            cart: [
                                                                {
                                                                sku: "YOUR_PRODUCT_STOCK_KEEPING_UNIT",
                                                                quantity: "YOUR_PRODUCT_QUANTITY",
                                                                },
                                                            ]
                                                            })
                                                        })
                                                        .then((response) => response.json())
                                                        .then((order) => order.id);
                                                        }
                                                    }).render('#paypal-button-container');
                                                </script>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                   
                </div>
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
                                        <th scope="col">
                                            <h4 class="m-0">Tracking ID</h4>
                                        </th>
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
                        <button type="submit" id="submit" class="btn btn-success" name="submit">Update</button>
                        <button type="button" id="send_invoice" class="btn btn-primary" name="send_invoice">Send Invoice</button>
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
    <script src="https://www.paypal.com/sdk/js?client-id=AehYm9flStfaQH4I8v8a5d3kCkf9njJSBPOmzZZsL0LLyulrepkwzs5AB5dx5_lYciy-sd6i0R4VF7nF&components=buttons"></script>
    <script src="assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="dist/js/pages/datatable/datatable-basic.init.js"></script>
    <script type="text/javascript">
        $(document).ready(function(e)
        {
            paypal.Buttons({
            style: {
                layout: 'vertical',
                color:  'blue',
                shape:  'rect',
                label:  'paypal'
            }
            }).render('#paypal-button-container');
            
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
                        <th scope="col"><h4 class="m-0">Tracking ID</h4></th>
                        <th scope="col"><h4 class="m-0">Value in US $</h4></th>
                        <th scope="col"><h4 class="m-0">Quantity</h4></th>
                        <th scope="col"><h4 class="m-0">Weight(lbs)</h4></th>
                        <th scope="col"><h4 class="m-0">Category</h4></th>
                        <th scope="col"><h4 class="m-0">Product link</h4></th>
                        <th scope="col"><h4 class="m-0">Shipment Mode</h4></th>
                        <th scope="col"><h4 class="m-0">Consolidation Fees</h4></th>
                        <th scope="col"><h4 class="m-0">Hanlding Fees</h4></th>
                        <th scope="col"><h4 class="m-0">TCA</h4></th>
                        <th scope="col"><h4 class="m-0">Shipment Fee</h4></th>
                        <th scope="col"><h4 class="m-0">Total Value</h4></th>
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
                        <th scope="col"><h4 class="m-0">Tracking ID</h4></th>
                        <th scope="col"><h4 class="m-0">Value in US $</h4></th>
                        <th scope="col"><h4 class="m-0">Quantity</h4></th>
                        <th scope="col"><h4 class="m-0">Weight(lbs)</h4></th>
                        <th scope="col"><h4 class="m-0">Category</h4></th>
                        <th scope="col"><h4 class="m-0">Product link</h4></th>
                        <th scope="col"><h4 class="m-0">Shipment Mode</h4></th>
                        <th scope="col"><h4 class="m-0">Consolidation Fees</h4></th>
                        <th scope="col"><h4 class="m-0">Hanlding Fees</h4></th>
                        <th scope="col"><h4 class="m-0">TCA</h4></th>
                        <th scope="col"><h4 class="m-0">Shipment Fee</h4></th>
                        <th scope="col"><h4 class="m-0">Total Value</h4></th>
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


