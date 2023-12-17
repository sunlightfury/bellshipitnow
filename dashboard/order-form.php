<?php

define("_VALID_PHP", true);

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

<!DOCTYPE html>

<html dir="ltr" lang="en" ng-app="app">

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- Tell the browser to be responsive to screen width -->

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="">

  <meta name="author" content="">

  <!-- Favicon icon -->

  <link rel="icon" type="image/png" sizes="16x16" href="../uploads/favicon.png">

  <title>Assistant Shopper Form | Bellshipitnow</title>

  <!-- This page plugin CSS -->

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Custom CSS -->

  <link href="dist/css/style.min.css" rel="stylesheet">

  <link href="dist/css/custom.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/custom.css">

  <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>

  <style>



    #wait{

     position: fixed;

     left: 0;

     right: 0;

     z-index: 999;

     text-align: center;

     margin: 0;

     height: 100%;

     width: 100%;

     background: rgba(0,0,0,0.7);

     top: 0;

     bottom: 0;

     display: flex;

     justify-content: center;

     flex-direction: column;

   }

   #wait img{position: relative; z-index: 999;}



 </style>

</head>

<body ng-controller="memberdata" ng-init="fetch()">

  <div id="main-wrapper">

    <?php include 'topbar.php'; ?>

    <!-- End Topbar header -->

    <!-- Left Sidebar - style you can find in sidebar.scss  -->

    <?php include 'left_sidebar.php'; ?>

    <!-- End Left Sidebar - style you can find in sidebar.scss  -->

    <!-- General queries to the database  -->

    <!-- Page wrapper  -->

    <div class="page-wrapper">

      <!-- ============================================================== -->

      <!-- Bread crumb and right sidebar toggle -->

      <!-- ============================================================== -->

      <div class="page-breadcrumb">

        <div class="row">

          <div class="col-12 align-self-center">
            <h4 class="page-title">Assistant Shopper Form</h4>
            <h6 class="text-primary">Fill out the form below with product link(s) and details from your favorite US store and we will ship it to your door.</h6>
          </div>

        </div>

        <?php include 'head_courier.php'; ?>

      </div>

      <div class="container-fluid">

        <!-- ============================================================== -->

        <!-- Start Page Content -->

        <!-- ============================================================== -->

        <!-- row -->

        <div class="row">

          <div class="col-lg-12">

            <div id="main">

              <div class="main-holder">

                <div class="main-frame">

                  <div id="content">

                    <div class="shoppers-info">

                      <div class="intro-box"></div>



                      <!-- Modal -->

                      <div class="modal fade" id="bellshipitnowWorks" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

                        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                          <div class="modal-content">
                            <div class="modal-header border-0">
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>

                            <div class="modal-body text-center">
                              <h1 class="text-center mb-5">Welcome to Bellshipitnow!</h1>
                              <h3 class="text-center mb-5">How Bellshipitnow Works</h3>
                              <div class="viabox-works-dv mb-5">
                                <ul class="row">
                                  <li class="col-md-3 col-6">
                                    <span class="icon border-primary text-primary"><i class="fa fa-television" aria-hidden="true"></i></span>
                                    <span class="txt">Register for free to get your own US address instantly</span>
                                  </li>

                                  <li class="col-md-3 col-6">
                                    <span class="icon border-success text-success"><i class="fa fa-inbox" aria-hidden="true"></i></span>

                                    <span class="txt">Shop at any US website (Amazon.com, Ebay.com, Etc...)</span>
                                  </li>

                                  <li class="col-md-3 col-6">
                                    <span class="icon border-info text-info"><i class="fa fa-home" aria-hidden="true"></i></span>
                                    <span class="txt">Ship your purchase to your US address with Bellshipitnow</span>
                                  </li>

                                  <li class="col-md-3 col-6">
                                    <span class="icon border-warning text-warning"><i class="fa fa-plane" aria-hidden="true"></i></span>

                                    <span class="txt">Bellshipitnow will combine and ship your orders to your</span>
                                  </li>
                                </ul>
                              </div>

                              <h2 class="maw-600 mx-auto mb-4">Easy Package Forwarding. Serving over 200,000 people in 220 countries</h2>

                              <h2 class="maw-600 mx-auto mb-5">New York address = 0% Sales Tax</h2>

                              <div class="row">
                                <div class="col-md-4 col-sm-6">
                                  <div class="card">
                                    <div class="img px-3 pt-3"><img src="assets/images/ico05.png" alt="quality control to simultaneously improve productivity, speed, accuracy and flexibility"></div>

                                    <div class="card-body">
                                      <h3 class="card-title">Automated Warehouse</h3>
                                      <p class="card-text">We have invested in state-of-the-art technologies to equip our massive warehouse with fast, powerful and automated package sorting and storage retrieval solutions that encompasses inventory control, picking, packing, shipping sortation, and quality control to simultaneously improve productivity, speed, accuracy and flexibility.</p>
                                    </div>
                                  </div>
                                </div><!-- col -->

                                <div class="col-md-4 col-sm-6">
                                  <div class="card">
                                    <div class="img px-3 pt-3"><img src="assets/images/ico04.png" alt="automatically notified at the arrival of every package "></div>

                                    <div class="card-body">
                                      <h3 class="card-title">Fast Processing</h3>
                                      <p class="card-text">Our customers are automatically notified at the arrival of every package to their suites at Bellshipitnow warehouse. Customer can request to forward one or all their boxes as soon as they arrive at their suites. Our automated systems are setup to process and prepare shipments and get them ready for daily pickup by shipping companies like UPS, DHL, USPS, etc.</p>
                                    </div>
                                  </div>
                                </div><!-- col -->

                                <div class="col-md-4 col-sm-6">
                                  <div class="card">
                                    <div class="img px-3 pt-3"><img src="assets/images/ico02.png" alt="Free Package Consolidation"></div>
                                    <div class="card-body">
                                      <h3 class="card-title">Free Package Consolidation</h3>
                                      <p class="card-text">Save up to 85% on shipping cost when you combine all your boxes together. While most other package forwarding companies do not even offer package consolidation to their international customers or charge extra fees for it, here at Bellshipitnow we offer the consolidation service for free to all our customers.</p>
                                    </div>
                                  </div>
                                </div><!-- col -->

                                <div class="col-md-4 col-sm-6">
                                  <div class="card">
                                    <div class="img px-3 pt-3"><img src="assets/images/ico06.png" alt="Free Repackaging"></div>
                                    <div class="card-body">
                                      <h3 class="card-title">Free Repackaging</h3>
                                      <p class="card-text">We offer FREE repackaging service to all our customers to save them money on shipping costs. Repackaging reduces the dimensional weight of packages and helps ensure that their items are not damaged during transport. Our experienced staff take extra time to ensure that all of our customers' merchandise is properly packaged for international shipping.</p>
                                    </div>
                                  </div>
                                </div><!-- col -->

                                <div class="col-md-4 col-sm-6">
                                  <div class="card">
                                    <div class="img px-3 pt-3"><img src="assets/images/ico03.png" alt="0% Fee Assisted Purchase"></div>
                                    <div class="card-body">
                                      <h3 class="card-title">0% Fee Assisted Purchase</h3>
                                      <p class="card-text">Merchant won't accept your non-US credit card? No problem! Let us buy your items for you at NO additional charge. Our free concierge service allows our customers in 220+ countries to shop from a large number of US merchants who ship strictly to the United States and/or do not accept international credit cards.</p>
                                    </div>
                                  </div>
                                </div><!-- col -->

                                <div class="col-md-4 col-sm-6">
                                  <div class="card">
                                    <div class="img px-3 pt-3"><img src="assets/images/ico01.png" alt="Free 180 Day storage"></div>
                                    <div class="card-body">
                                      <h3 class="card-title">Free 180 Day storage</h3>
                                      <p class="card-text">Customers can store each package that arrives at their suites for FREE for a period of 180 days from the date of delivery of each package. This helps our customers to wait for more boxes to arrive at their units, in order to combine all of them in one large box if possible to save on shipping cost.</p>
                                    </div>
                                  </div>
                                </div><!-- col -->
                              </div><!-- row -->


                            </div>

                          </div>

                        </div>

                      </div>



                      <div class="box card p-4">

                        <div class="form-bx">

                          <form action = "sub_order_form.php" method="post" enctype = "multipart/form-data">

                            <div class="row">

                              <div class="col-6">

                                <div class="form-group maw-150">

                                  <label>Vendor Name:</label>

                                  <input type="text" name="vendor" class="form-control" name="name">

                                </div>

                              </div><!-- col -->



                              <div class="col-6">

                                <div class="form-group maw-150 ml-auto">

                                  <label>Tracking number:(Optional)</label>

                                  <input type="text" name="tracking_number" class="form-control" name="tracking" re>

                                </div>

                              </div><!-- col -->

                            </div><!-- row -->



                            <div class="table-bx table-border text-center">

                              <table class="table table-striped table-bordered">

                                <thead>

                                  <tr>

                                    <th scope="col"><h4 class="m-0">Item</h4></th>

                                    <th scope="col"><h4 class="m-0">Value in US $</h4></th>

                                    <th scope="col"><h4 class="m-0">Quantity</h4></th>

                                    <th scope="col"><h4 class="m-0">Category</h4></th>

                                    <th scope="col"><h4 class="m-0">Product link</h4></th>

                                    <th scope="col"><h4 class="m-0">Shipment Mode</h4></th>

                                    <th scope="col"><h4 class="m-0">Shipment Fee</h4></th>

                                    <th scope="col"><h4 class="m-0">Total Value</h4></th>

                                    <th scope="col"><h4 class="m-0">Action</h4></th>

                                  </tr>

                                </thead>

                                <tbody id="new_body">
                                  <?php
                                  for($i = 1;$i<=5;$i++)
                                    { ?>
                                  <tr>

                                    <td><input type="text" class="form-control" name="item[]" id="item"></td>

                                    <td><input type="text" class="form-control value" onkeypress="return isNumber(event)" name="value[]" id="value" required></td>

                                    <td><input type="text" class="form-control quantity" onkeypress="return isNumber(event)" name="quantity[]" id="quantity" required></td>

                                    <td>
                                      <div class="form-group">
                                        <select class="form-control" id="sel1" name="category[]" required>
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
                                    </td>
                                    
                                    <td><input type="text" class="form-control" name="product_link[]" id="product_link"></td>

                                    <td>
                                      <div class="form-group">
                                        <select class="form-control" id="product_mode" name="ship_mode[]" required>
                                          <option value="">Select</option>
                                          <?php 
                                            
                                            $query_category = "select * from shipping_mode";
                                            $result_query_category = $conn->query($query_category); 
                                            while ($row = $result_query_category->fetch_array(MYSQLI_BOTH))  
                                            {
                                              echo '<option>' . $row['ship_mode'] . '</option>';
                                            }
                                            ?>
                                        </select>
                                      </div>
                                    </td>

                                    <!-- <td><input type="text" class="form-control" name="ship_method[]" id="ship_method"></td> -->

                                    <td><input type="text" readonly="true" value="0" class="form-control" name="ship_fee[]" id="ship_fee"></td>

                                    <td><input type="text" class="form-control total" readonly="true" name="total[]" id="total"></td>

                                    <td><button type="button" class="btn btn-lg btn-danger remove"><i class="fa fa-trash" aria-hidden="true"></i></button></td>

                                  </tr>

                                  <?php
                                  }
                                  ?>

                                  <!-- <tr>

                                    <td><input type="text" class="form-control" name="item2" id="item"></td>

                                    <td><input type="number" class="form-control" name="value2" id="value"></td>

                                    <td><input type="number" class="form-control" name="quantity2" id="quantity"></td>

                                    <td><input type="text" class="form-control" name="total2" id="total"></td>
                                     <td><button type="button" class="btn btn-lg btn-danger"><i class="fa fa-trash" aria-hidden="true"></i></button></td>
                                  </tr>

                                  <tr>

                                    <td><input type="text" class="form-control" name="item3" id="item"></td>

                                    <td><input type="number" class="form-control" name="value3" id="value"></td>

                                    <td><input type="number" class="form-control" name="quantity3" id="quantity"></td>

                                    <td><input type="text" class="form-control" name="total3" id="total"></td>

                                  </tr>

                                  <tr>

                                    <td><input type="text" class="form-control" name="item4" id="item"></td>

                                    <td><input type="number" class="form-control" name="value4" id="value"></td>

                                    <td><input type="number" class="form-control" name="quantity4" id="quantity"></td>

                                    <td><input type="text" class="form-control" name="total4" id="total"></td>

                                  </tr>

                                  <tr>

                                    <td><input type="text" class="form-control" name="item5" id="item"></td>

                                    <td><input type="number" class="form-control" name="value5" id="value"></td>

                                    <td><input type="number" class="form-control" name="quantity5" id="quantity"></td>

                                    <td><input type="text" class="form-control" name="total5" id="total"></td>

                                  </tr> -->

                                </tbody>

                                <tfoot>
                                  <tr>
                                    <td colspan="9" align="right">
                                      <button type="button" class="btn btn-lg btn-primary" id="btnAdd">Add New Row</button>
                                    </td>
                                  </tr>
                                  <th colspan="8" class="align-middle"><h4 class="m-0">Totals($)</h4></th>

                                  <th><input type="text" readonly="true" class="form-control" value="0" id="grandtotal" name="grandtotal"></th>
                                  <input type="hidden" name="customer_number" value="<?php echo $user->customer_number; ?>" />
                                  <input type="hidden" name="email" value="<?php echo $user->email; ?>" />
                                </tfoot>

                              </table>

                            </div><!-- table-bx -->



                            <div class="row">

                              <div class="col-6">

                                <div class="btn-bx">

                                  <button type="button" class="btn btn-lg btn-danger">Close</button>

                                </div>

                              </div><!-- col -->



                              <div class="col-6">

                                <div class="btn-bx text-right">

                                  <button type="submit" class="btn btn-lg btn-primary">Add this order</button>

                                </div>

                              </div><!-- col -->

                            </div><!-- row -->



                          </form>

                        </div>

                      </div><!-- box -->



                    </div>

                  </div>

                </div>

              </div>

            </div>



            <hr>

          </div>

        </div>

        <!-- End row -->



      </div>



      <?php echo Core::doForm("processCourier");?>

      <?php

      if (!defined("_VALID_PHP"))

       die('Direct access to this location is not allowed.');

     ?>			







     <footer class="footer text-center bg-color-head">

      &copy <?php echo date('Y').' '.$core->site_name;?> - <?php echo $lang['foot'] ?>

    </footer>

    <!-- End footer -->

  </div>

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

<script src="add_package.js"></script>



<script>

$(window).on('load',function(){

  $('#bellshipitnowWorks').modal('show');

});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

$(function () {
  $("#btnAdd").bind("click", function () {
      var div = $("<tr />");
      div.html(GetDynamicTextBox(""));
      $("#new_body").append(GetDynamicTextBox(""));
  });

  $(document).on("click", ".remove", function () {
    var total = $(this).closest("tr").find(".total").val();
    var grandtotal = $("#grandtotal").val() - total;
    $("#grandtotal").val(grandtotal);
      $(this).closest("tr").remove();
  });

    $(document).on('keyup','.quantity',function(){
      var value = $(this).closest("tr").find(".value").val();
      var quantity = $(this).val();
      var total = 0;
      if(value != 0)
        total = value * quantity;
      $(this).closest("tr").find(".total").val(total);
      var grandtotal =0;
      $('.total').each(function(i, obj) 
      {
        if($(this).val() != '')
          grandtotal = grandtotal + parseInt($(this).val());
      });
      $("#grandtotal").val(grandtotal);
  });

    $(document).on('keyup','.value',function(){
      var quantity = $(this).closest("tr").find(".quantity").val();
      var value = $(this).val();
      var total = 0;
      if(quantity != 0)
        total = value * quantity;
      $(this).closest("tr").find(".total").val(total);
      var grandtotal = parseInt($("#grandtotal").val()) + total;
      $("#grandtotal").val(grandtotal);
  });
});

function GetDynamicTextBox(value) 
{
  return '<tr><td><input type="text" class="form-control" name="item[]" id="item"></td><td><input type="text" class="form-control value" name="value[]" onkeypress="return isNumber(event)" id="value"></td><td><input type="text" class="form-control quantity" name="quantity[]" onkeypress="return isNumber(event)" id="quantity"></td><td><div class="form-group"><select class="form-control" id="sel1" name="category[]"><option value="">Select</option><option>Accessory (no-battery)</option><option>Accessory (with battery)</option><option>Audio Video</option><option>Bags & Luggages</option><option>Books & Collectibles</option><option>Cameras</option><option>Computers & Laptops</option> <option>Dry Food &amp; Supplements</option> <option>Fashion</option> <option>Gaming</option> <option>Health & Beauty</option> <option>Home Appliances</option> <option>Home Decor</option><option>Jewelry</option><option>Mobile Phones</option><option>Pet Accessory</option><option>Sauce</option><option>Sport & Leisure</option><option>Tablets</option><option>Toys</option><option>Watches</option></select></div></td><td><input type="text" class="form-control" name="product_link[]" id="product_link"></td><td><div class="form-group"><select class="form-control" id="product_mode" name="ship_mode[]"><option value="">Select</option><option>Priority Mail Express</option><option>Priority Mail ExpressPriority Mail</option><option>First-Class Mail</option><option>International Economy</option><option>International Priority</option><option>Express Domestic</option></select></div></td><td><input type="text" disabled="true" value="0" class="form-control" name="ship_fee[]" id="ship_fee"></td><td><input type="text" class="form-control total" name="total[]" readonly="true" id="total"></td><td><button type="button" class="btn btn-lg btn-danger remove"><i class="fa fa-trash" aria-hidden="true"></i></button></td></tr>';
}


</script>



</body>