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
	redirect_to("login.php");

$row = $user->getUserData();
	
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
	
    <title><?= $lang['edit-courier1'] ?> | <?= $core->site_name ?></title>
    <!-- This page plugin CSS -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/custom.css">
	<style>
		#wait
		{
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

		#wait img
		{	
			position: relative; z-index: 999;
		}

		.allert
		{
			position:absolute;
			margin:20px 0px 0px 100px;

		}
		.tooltip 
		{
			position: relative;
			display: inline-block;
		}

		.tooltip .tooltiptext 
		{
			visibility: hidden;
			width: 140px;
			background-color: #555;
			color: #fff;
			text-align: center;
			border-radius: 6px;
			padding: 5px;
			position: absolute;
			z-index: 1;
			bottom: 150%;
			left: 50%;
			margin-left: -75px;
			opacity: 0;
			transition: opacity 0.3s;
		}

		.tooltip .tooltiptext::after 
		{
			content: "";
			position: absolute;
			top: 100%;
			left: 50%;
			margin-left: -5px;
			border-width: 5px;
			border-style: solid;
			border-color: #555 transparent transparent transparent;
		}

		.tooltip:hover .tooltiptext 
		{
			visibility: visible;
			opacity: 1;
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
		
		<!-- General queries to the database  -->		   

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"><?php echo "Create Shipping Label"; //include("filter.php"); ?></h4>
                    </div>
                </div>
				<?php include 'head_courier.php'; ?>
            </div>
			
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
				<!-- Edit Shipment -->

				<div id="wait">
					<span>
						<img src="assets/images/ajax-loader.gif" alt="wordwide delivery" />
					</span>
				</div>

				<div class="row">
					<h5 id="error_message" class="m-3 text-danger alert d-none"></h5>
				</div>
				<?php switch(Filter::$action): case "ship": ?>
				<?php  $row = Core::getRowById(Core::cTable, Filter::$id);?>
				<form id="admin_form" method="post">
					<div class="row">
						<div class="col-sm-12 col-lg-6" style="display:none">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title">Sender Data:</h4>
									<hr>

									<div class="row">
										<div class="col-sm-12 col-md-6">
											<div class="form-group">
												<label for="inputEmail3" class="control-label col-form-label">Addres</label>
												<input type="text" class="form-control is-valid" name="address" value="<?= $row->address;?>" placeholder="Address" readonly>
											</div>
										</div>
										<div class="col-sm-12 col-md-3">
											<div class="form-group">
												<label for="inputcontact" class="control-label col-form-label">Phone</label>
												<input type="number" class="form-control is-valid" name="phone" value="<?= $row->phone;?>" placeholder="Phone" readonly>
											</div>
										</div>
										<div class="col-sm-12 col-md-3">
											<div class="form-group">
												<label for="inputEmail3" class="control-label col-form-label">Origin</label>
												<input type="text" class="form-control is-valid" name="country" value="<?= $row->country;?>" placeholder="Origin" readonly>
											</div>
										</div>                                       
									</div>
									<div class="row"> 
										<div class="col-sm-12 col-md-3">
											<div class="form-group">
												<label for="inputcontact" class="control-label col-form-label">City</label>
												<input type="text" class="form-control is-valid" name="city" value="" placeholder="City" readonly>
											</div>
										</div>
									
										<div class="col-sm-12 col-md-3">
											<div class="form-group">
												<label for="inputEmail3" class="control-label col-form-label">Postal Code</label>
												<input type="text" class="form-control is-valid" name="postal" value="<?= $row->postal;?>" placeholder="Postal Code" readonly>
											</div>
										</div>
										<div class="col-sm-12 col-md-6">
											<div class="form-group">
												<label for="inputcontact" class="control-label col-form-label">Email</label>
												<input type="email" class="form-control is-valid" name="email" value="<?= $row->email;?>" placeholder="Email" readonly>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-12 col-lg-6">
							<div class="card">
								<div class="card-body">
								<h4 class="card-title"><?= $lang['edit-courier2'] ?></h4>
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<div class="form-group">
												<label for="inputname" class="control-label col-form-label"><?= $lang['edit-courier3'] ?></label>
												<input type="text" class="form-control" name="s_name" value="<?= $row->s_name;?>" placeholder="<?= $lang['edit-courier4'] ?>" readonly>
											</div>
										</div>
										<div class="col-sm-12 col-md-6" style="display:none">
											<div class="form-group">
												<label for="inputcontact" class="control-label col-form-label"><?= $lang['edit-courier5'] ?></label>
												<div class="input-group mb-3">
													<input type="email" class="form-control" name="r_email" value="<?= $row->r_email;?>" readonly>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-6">
											<label for="inputname" class="control-label col-form-label"><?= $lang['edit-courier6'] ?></label>
											<div class="input-group mb-3">
												<input type="text" class="form-control" name="r_name" value="<?= $row->r_name;?>" readonly>
											</div>
										</div>
									</div>
									<div class="row" style="display:none">
										<div class="col-sm-12 col-md-4">
											<label for="inputlname" class="control-label col-form-label">Address</label>
											<div class="input-group mb-3">
												<input type="text" class="form-control" name="r_address" value="<?= $row->r_address;?>" readonly>
											</div>
										</div>
										<div class="col-sm-12 col-md-4">
											<label for="inputEmail3" class="control-label col-form-label">Phone</label>
											<div class="input-group mb-3">
												<input type="number" class="form-control" name="r_phone" value="<?= $row->r_phone;?>" readonly>
											</div>
										</div>
										<div class="col-sm-12 col-md-4">
											<label for="inputcontact" class="control-label col-form-label">Cell Phone</label>
											<div class="input-group mb-3">
												<input type="number" class="form-control" name="rc_phone" value="<?= $row->rc_phone;?>" readonly>
											</div>
										</div>									                                     
									</div>
									<div class="row" style="display:none"> 
										<div class="col-sm-12 col-md-4">
											<label for="inputEmail3" class="control-label col-form-label">Destination</label>
											<div class="input-group mb-3">
												<input type="text" class="form-control" name="r_dest" value="<?= $row->r_dest;?>" readonly>
											</div>
										</div>  
										<div class="col-sm-12 col-md-4">
											<label for="inputcontact" class="control-label col-form-label">City</label>
											<div class="input-group mb-3">
												<input type="text" class="form-control" name="r_city" value="<?= $row->r_city;?>" readonly>
											</div>
										</div>
									
										<div class="col-sm-12 col-md-4">
											<label for="inputEmail3" class="control-label col-form-label">Postal Code</label>
											<div class="input-group mb-3">
												<input type="text" class="form-control" name="r_postal" value="<?= $row->r_postal;?>" readonly>
											</div>
										</div>
									</div>
									
									<div class="row"> </br></div>
									<hr class="m-t-0 m-b-35">
									
									<h4 class="card-title"><?= $lang['edit-courier7'] ?></h4>
									<div class="row">									
										<div class="col-sm-12 col-md-6" style="display:none">
											<div class="form-group">
												<label for="inputname" class="control-label col-form-label">Staff Role*</label>
												<input type="text" class="form-control" name="level" value="<?= $row->level;?>" placeholder="Staff Role" readonly>
											</div>
										</div>										
										<div class="col-sm-12 col-md-4">
											<label for="inputname" class="control-label col-form-label"><?= $lang['edit-courier8'] ?></label>
											<div class="input-group mb-3">
												<input class="form-control"  name="origin_off" value="<?= $row->origin_off;?>" readonly>
											</div>
										</div>
										<div class="col-sm-12 col-md-4">
											<label for="inputname" class="control-label col-form-label">Assign driver</label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" style="color:#ff0000"><i class="fas fa-car"></i></span>
												</div>
												<input class="form-control"  name="c_driver" value="<?= $row->c_driver;?>" readonly>
											</div>
										</div>
										<div class="col-sm-12 col-md-4">
											<label for="inputcontact" class="control-label col-form-label"><?= $lang['edit-courier9'] ?></i></label>
											<div class="input-group">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<span style="color:#ff0000" class="ti-calendar"></span>
													</span>
												</div>
												<input type='text' class="form-control" id='datetimepicker1' name="collection_courier" placeholder="<?= $lang['edit-courier11'] ?>" value="<?= $row->collection_courier;?>" data-toggle="tooltip" data-placement="bottom" title="<?= $lang['add-title10'] ?>" readonly/>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-4">
											<label for="inputlname" class="control-label col-form-label"><?= $lang['edit-courier12'] ?> <i style="color:#ff0000" class="fas fa-boxes"></i></label>
											<div class="input-group">
												<input class="form-control" name="package" value="<?= $row->package;?>" readonly>	
											</div>
										</div>
										<div class="col-sm-12 col-md-4">
											<label for="inputcontact" class="control-label col-form-label"><?= $lang['edit-courier13'] ?></label>
											<div class="input-group">
												<input class="form-control" name="courier" value="<?= $row->courier;?>" readonly>
											</div>
										</div>										
										<div class="col-sm-12 col-md-4">
											<label for="inputcontact" class="control-label col-form-label"><?= $lang['edit-courier14'] ?> <i style="color:#ff0000" class="fas fa-shipping-fast"></i></label>
											<div class="input-group">
												<input class="form-control" name="status_courier" value="<?= $row->status_courier;?>" readonly>
											</div>
										</div>								                                     
									</div>
									<div class="row"> 									
										<div class="col-sm-12 col-md-4">
											<label for="inputEmail3" class="control-label col-form-label"><?= $lang['edit-courier15'] ?></label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="icon-clock"></i></span>
												</div>
												<input type="text" class="form-control" name="deli_time" value="<?= $row->deli_time;?>" readonly>
											</div>
										</div>

										<div class="col-sm-12 col-md-4">
											<label for="inputEmail3" class="control-label col-form-label"><?= $lang['edit-courier16'] ?></label>
											<div class="input-group mb-3">
												<input class="form-control" name="service_options" value="<?= $row->service_options;?>" readonly>
											</div>
										</div>

										<div class="col-sm-12 col-md-4">
											<label for="inputEmail3" class="control-label col-form-label"><?= $lang['edit-courier17'] ?> <i style="color:#ff0000" class="fas fa-donate"></i></label>
											<div class="input-group mb-3">
												<input class="form-control" name="pay_mode" value="<?= $row->pay_mode;?>" readonly>
											</div>
										</div>

										<div class="col-sm-12 col-md-4">
											<label for="inputcontact" class="control-label col-form-label">Payment Status<i style="color:#ff0000" class="fas fa-donate"></i></label>
											<div class="input-group">
												<input class="form-control" name="status_courier" value="<?= $row->payment_status==1?'Paid':'Unpaid'; ?>" readonly>
											</div>
										</div>			
									</div>
									<hr>
									<div class="form-actions">
										<div class="card-body">
											<div class="row">
												<div class="col-md-12">
													<div class="row">
														<div class="col-md-offset-3 col-md-12 mb-2">
															<button type="button" name="create_shipping_label" id="create_shipping_label" class="btn btn-primary"> 
																<i class="fa fa-list"></i>&nbsp;Create Shipping Label
															</button>
														</div>
														<div class="col-md-offset-3 col-md-12">
															<button type="submit" name="dosubmit" class="btn btn-success"> <i class="ti-reload"></i>&nbsp; <?= $lang['edit-courier18'] ?></button>
															<a href="index.php" class="btn btn-dark"><i class="icon-action-undo"></i><?= $lang['edit-courier19'] ?></a> 
														</div>
													</div>
												</div>
												<div class="col-md-6"> </div>
											</div>
										</div>
									</div>
									<input name="id" type="hidden" value="<?= Filter::$id;?>" />
									<input name="shipping_object_id" id="shipping_object_id" type="hidden" value="<?= $row->shipping_object_id ?>" />
								</div>
							</div>
						</div>

						<div class="col-sm-12 col-lg-6">
							<div class="card">
								<div class="card-body">
									<h4 class="card-title"><?= $lang['edit-courier20'] ?></h4>
									<div class="row">
										<div class="col-sm-12 col-md-6">
											<label for="inputcom" class="control-label col-form-label">Tracking Number</label>	
											<div class="input-group mb-4">
											<div class="input-group-prepend">
												<span class="input-group-text" id="basic-addon1" style="color:#ff0000"><?= $row->letter_or;?></span>
											</div>	
												<input type="text" class="form-control" name="tracking" id="tracking_no" value="<?= $row->tracking;?>" readonly>
												<input type="hidden" class="form-control" name="order_inv" value="<?= $row->order_inv;?>" readonly>
											</div>
										</div>

										<div class="col-sm-12 col-md-3">
											<label for="inputEmail3" class="control-label col-form-label"><?= $lang['edit-courier22'] ?></label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="fas fa-percent" style="color:#36bea6"></i></span>
												</div>
												<input type="number" class="form-control" onKeyUp="suma();"  id="sum3" name="r_tax" value="<?= $row->r_tax;?>" readonly>
											</div>
										</div>
										<div class="col-sm-12 col-md-3">
											<label for="inputEmail3" class="control-label col-form-label"><?= $lang['edit-courier23'] ?></label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="fas fa-percent" style="color:#36bea6"></i></span>
												</div>
												<input type="number" class="form-control"  onKeyUp="suma();" id="sum5" name="r_insurance" value="<?= $row->r_insurance;?>" readonly>
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<label for="shipping_label_div" class="control-label col-form-label">Shipping Label</label>
											<div class="input-group mb-3" id="shipping_label_div tooltip">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="fas fa-link" style="color:#36bea6"></i></span>
												</div>
												<input type="text" class="form-control" id="shipping_label" name="shipping_label" value="<?= $row->shipping_label;?>" readonly>
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1">
														<a href="<?=$row->shipping_label;?>" id="shipping_label_url">
															<i class="fas fa-eye" style="color:#36bea6"></i>
														</a>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="row"></br></div>
									<div class="card-body bg-light">
										<div class="row"> 
											<div class="col-sm-12 col-md-4">
												<label for="inputEmail3" class="control-label col-form-label"><?= $lang['edit-courier24'] ?></label>
												<div class="input-group">
													<input class="form-control" name="itemcat" value="<?= $row->itemcat;?>" readonly>
												</div>
											</div> 
											<div class="col-sm-12 col-md-4">
												<label for="inputcontact" class="control-label col-form-label"><?= $lang['edit-courier25'] ?></label>
												<div class="input-group">
													<input type="text" data-toggle="tooltip" data-placement="bottom" title="<?= $lang['edit-courier27'] ?>" class="form-control" name="r_qnty" value="<?= $row->r_qnty;?>" readonly>
												</div>
											</div>
											<div class="col-sm-12 col-md-4">
												<label for="inputcontact" class="control-label col-form-label"><?= $lang['edit-courier26'] ?></label>
												<div class="input-group">
													<input type="text" data-toggle="tooltip" data-placement="bottom" title="<?= $lang['edit-courier41'] ?>" class="form-control" onKeyUp="suma();"  id="sum4" name="r_weight" value="<?= $row->r_weight;?>" readonly>
												</div>
											</div>
											<div class="col-sm-12 col-md-12">
												<label for="inputEmail3" class="control-label col-form-label"><?= $lang['edit-courier28'] ?></label>
												<div class="input-group">
													 <textarea class="form-control" rows="2" name="r_description" placeholder="<?= $lang['edit-courier29'] ?>" readonly><?= $row->r_description;?></textarea>
												</div>
											</div>
										</div>
										<div class="row"> </br></br></div>
										<div class="row">
											<div class="col-sm-12 col-md-12">
												<label for="inputlname" class="control-label col-form-label"><?= $lang['edit-courier30'] ?> <i class="ti-package" style="color:#36bea6"></i> <?= $lang['edit-courier31'] ?> <b><i style="color:#FF0000" class="ti-help-alt" data-toggle="tooltip" data-placement="top" title="<?= $lang['edit-courier32'] ?> / <?= $core->meter;?> = kg"></i></b></label>
												<div class="input-group">
													<!-- input box for Length -->
													<input type="number" class="form-control" data-toggle="tooltip" data-placement="bottom" title="<?= $lang['edit-courier33'] ?>"   onKeyUp="suma();" id="l1" name="length" value="<?= $row->length;?>" readonly>
													<div class="cross strong text__color-gray-darker text__size-smaller">&nbsp; x &nbsp;</div>
													<!-- input box for width -->
													<input type="number" class="form-control" data-toggle="tooltip" data-placement="bottom" title="<?= $lang['edit-courier34'] ?>"   onKeyUp="suma();" id="w2" name="width" value="<?= $row->width;?>" readonly>
													<div class="cross strong text__color-gray-darker text__size-smaller">&nbsp; x &nbsp;</div>
													<!-- input box for height -->
													<input type="number" class="form-control" data-toggle="tooltip" data-placement="bottom" title="<?= $lang['edit-courier35'] ?>"  onKeyUp="suma();" id="h3" name="height" value="<?= $row->height;?>" readonly>
													<input type="number" class="form-control" id="vol" value="0" name="v_weight" value="<?= $row->v_weight;?>" style="display:none">
												</div>
											</div>
											<div class="col-sm-12 col-md-3">
												<label for="inputEmail3" class="control-label col-form-label"><?= $lang['edit-courier37'] ?> <b><i style="color:#FF0000" class="ti-help-alt" data-toggle="tooltip" data-placement="top" title="<?= $lang['edit-courier36'] ?>"></i></b></label>
												<div class="input-group">
													<input type="number" class="form-control" onKeyUp="suma();" id="sum2" name="r_custom" value="<?= $row->r_custom;?>" readonly>
												</div>
											</div>
											<div class="col-sm-12 col-md-3">
												<label for="inputname" class="control-label col-form-label"><?= $lang['edit-courier38'] ?></label>
												<input class="form-control" name="r_curren" value="<?= $row->r_curren;?>" readonly>
											</div>
										</div>									
									</div>
									<hr class="m-t-0 m-b-5">
									<div class="card-body">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group row">
													<label class="control-label text-left col-md-5">Shipping Charges &nbsp; <b><?= $core->currency;?></b></label>
													<div class="col-md-6">
														<p class="form-control-static"> <input type="text" data-toggle="tooltip" data-placement="top" title="Shipping Charges" class="form-control" name="shipping_charges" id="shipping_charges" value="<?= $row->shipping_charges;?>" readonly> </p>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-left col-md-5">Handling Charges&nbsp; <b><?= $core->currency;?></b></label>
													<div class="col-md-6">
														<p class="form-control-static"> 
															<input type="text" data-toggle="tooltip" data-placement="top" title="Handling Charges" class="form-control" name="handling_charges" id="handling_charges" value="<?= $row->handling_charges;?>" readonly> </p>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-left col-md-5">Consolidation Charges &nbsp; <b><?= $core->currency;?></b></label>
													<div class="col-md-6">
														<p class="form-control-static"> <input type="text" data-toggle="tooltip" data-placement="top" title="Consolidation Charges" class="form-control" name="consolidation_charges" id="consolidation_charges" value="<?= $row->consolidation_charges;?>" readonly> </p>
													</div>
												</div>
												<div class="form-group row">
													<label class="control-label text-left col-md-5">TCA Charges&nbsp; <b><?= $core->currency;?></b></label>
													<div class="col-md-6">
														<p class="form-control-static"> <input type="text" data-toggle="tooltip" data-placement="top" title="TCA Charges" class="form-control" name="tca_charges" id="tca_charges" value="<?= $row->tca_charges;?>" readonly> </p>
													</div>
												</div>

												<div class="form-group row">
													<label class="control-label text-left col-md-5">Insurance Charges&nbsp; <b><?= $core->currency;?></b></label>
													<div class="col-md-6">
														<p class="form-control-static"> <input type="text" data-toggle="tooltip" data-placement="top" title="Insurance Charges" class="form-control" name="insurance_charges" id="insurance_charges" value="<?= $row->insurance_charges;?>" readonly> </p>
													</div>
												</div>

												<div class="form-group row">
													<label class="control-label text-left col-md-5">Tax Charges&nbsp; <b><?= $core->currency;?></b></label>
													<div class="col-md-6">
														<p class="form-control-static"> <input type="text" data-toggle="tooltip" data-placement="top" title="Tax Charges" class="form-control" name="r_costtotal" id="tax_charges" value="<?= $row->tax_charges;?>" readonly> </p>
													</div>
												</div>
												<hr>
												<div class="form-group row">
													<label class="control-label text-left col-md-5"><h4>Total Charges &nbsp; <b><?= $core->currency;?></b></h4></label>
													<div class="col-md-6">
														<p class="form-control-static"> <input type="text" data-toggle="tooltip" data-placement="top" title="<?= $lang['edit-courier40'] ?>" class="form-control" name="r_costtotal" id="r_costtotal" value="<?= (float)($row->r_costtotal); ?>" readonly> </p>
													</div>
												</div>
											</div>
											<!--/span-->
										</div>
									</div>								
								</div>
							</div>
						</div>
					</div>
				</form>
                <!-- End row -->
            </div>
			<?= Core::doForm("processUCourier");?>
			<?php break;?>
			<?php endswitch;?>

			
			<?php
  
			  if (!defined("_VALID_PHP"))
				  die('Direct access to this location is not allowed.');
			?>			
			
			<footer class="footer text-center bg-color-head">
				&copy <?= date('Y').' '.$core->site_name;?> - <?= $lang['foot'] ?>
			</footer>

			<!-- End footer -->
		</div>
	</div>

	<!-- End Wrapper -->
		

	<!-- ============================================================== -->
	<!-- All Jquery -->
	<!-- ============================================================== -->
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

	<!--Datetimepicker -->
		
	<?php include 'datetimepicker.php'; ?>

	<script type="text/javascript">

		function suma()
		{
			
			var num2 = "5.56789";
			var sum2 = document.getElementById("sum2");
			var sum3 = document.getElementById("sum3");
			var sum4 = document.getElementById("sum4");
			var sum5 = document.getElementById("sum5");
			
			var l1 = document.getElementById("l1");
			var w2 = document.getElementById("w2");
			var h3 = document.getElementById("h3");

			var input = document.getElementById("total_result");
			
			var volumetric = <?= $core->meter;?>;
			var pound_weight_price = <?= $core->value_weight;?>;
			var percent = 100;

			var total_insurance = sum2.value * sum5.value/percent; 									
			var total_metric = l1.value * w2.value * h3.value/volumetric * pound_weight_price; 		
			var total_weight = pound_weight_price * sum4.value; 									
			
			var calculate_weight;
			if (total_weight > total_metric) 
			{
				calculate_weight = total_weight;
			} 
			else 
			{
				calculate_weight = total_metric;
			}
			
			var total_tax = (calculate_weight + total_insurance) * sum3.value/percent; 
			
			total_result = parseFloat(parseFloat(total_insurance)  +  parseFloat(calculate_weight) + parseFloat(total_tax)) .toFixed(2); 
			
			// input.value = total_result;

		}
	</script>
			
	<script type="text/javascript"> 
		// <![CDATA[
		$(document).ready(function () 
		{	
			$("#wait").hide();
			$(document).on("click","#create_shipping_label",function(e)
			{	
				shipping_label = $("#shipping_label").val();
				if(shipping_label.length>10)
				{	
					msg = "Shipping label has already been created!"
					$("#msgholder").html('<div class="bgred text-center text-light">'+msg+'</div>');
					$("#error_message").text(msg);
					// alert(msg);
					// toastr.error(msg);
					$("html, body").animate({ scrollTop: 0 }, "slow");
  					return false;
				}
				else
				{
					$.ajax({
						type: 'POST',
						url: 'create_shipment.php',
						data: 
						{
							object_id:$("#shipping_object_id").val()
						},
						beforeSend: function() { $('#wait').show(); },
						complete: function() { $('#wait').hide(); },
						success: function (data) 
						{	
							res = jQuery.parseJSON(data);
							if(res['status'] != '200')
							{
								$("#tracking_no").val("");
								$("#error_message").text(res['message']);
								$("#msgholder").html('<div class="bgred text-center text-light">'+res['message']+'</div>');
							}
							else
							{
								$("#shipping_label").val(res['data'][0]);
								$("#tracking_no").val(res['data'][1]);
								$("#msgholder").html('<div class="bggreen text-center text-light">Shipping Label has been created</div>');
								$("#shipping_label_url").attr("href",res['data'][0]);
								$("html, body").animate({ scrollTop: 0 }, "slow");
  								return false;
							}		
						}
					});
				}
			});
			$('a.activate').on('click', function () 
			{
				var uid = $(this).attr('id').replace('act_', '')
				var text = "<i class=\"icon-warning-sign icon-3x pull-left\"></i>Are you sure you want to activate this user account?<br /><strong>Email notification will be sent as well</strong>";
				new Messi(text, 
				{
					title: "Activate User Account",
					modal: true,
					closeButton: true,
					buttons: [{
						id: 0,
						label: "Activate",
						val: 'Y'
					}],
					callback: function (val) 
					{
						$.ajax({
							type: 'post',
							url: "controller.php",
							data: 
							{
								activateAccount: 1,
								id: uid,
							},
							cache: false,
							beforeSend: function () 
							{
								showLoader();
							},
							success: function (msg) 
							{
								hideLoader();
								$("#msgholder").html(msg);
								$('html, body').animate({
									scrollTop: 0
								}, 600);
							}
						});
					}
				});
			});
			$("#search-input").on("keyup", function () 
			{
				var srch_string = $(this).val();
				var data_string = 'userSearch=' + srch_string;
				if (srch_string.length > 3) 
				{
					$.ajax({
						type: "POST",
						url: "controller.php",
						data: data_string,
						beforeSend: function () 
						{
							$('#search-input').addClass('loading');
						},
						success: function (res) 
						{
							$('#suggestions').html(res).show();
							$("input").blur(function () 
							{
								$('#suggestions').fadeOut();
							});
							if ($('#search-input').hasClass("loading")) 
							{
								$("#search-input").removeClass("loading");
							}
						}
					});
				}
				return false;
			});
			var dates = $('#fromdate, #enddate').datepicker({
				defaultDate: "+1w",
				changeMonth: false,
				numberOfMonths: 2,
				dateFormat: 'yy-mm-dd',
				onSelect: function (selectedDate) 
				{
					var option = this.id == "fromdate" ? "minDate" : "maxDate";
					var instance = $(this).data("datepicker");
					var date = $.datepicker.parseDate(instance.settings.dateFormat || $.datepicker._defaults.dateFormat, selectedDate, instance.settings);
					dates.not(this).datepicker("option", option, date);
				}
			});
			function copyShippingLabelToClipboard() 
			{
				var copyText = document.getElementById("shipping_label");
				copyText.select();
				copyText.setSelectionRange(0, 99999);
				navigator.clipboard.writeText(copyText.value);
				
				var tooltip = document.getElementById("shipping_label_div");
				tooltip.innerHTML = "Copied: " + copyText.value;
			}

			function outShippingLabel() 
			{
				var tooltip = document.getElementById("shipping_label_div");
				tooltip.innerHTML = "Copy to clipboard";
			}	
			$(document).on("click mouseout","#shipping_label_div",function(e)
			{
				copyShippingLabelToClipboard();
				outShippingLabel();
			});
		});
		// ]]>
	</script>
</body>
</html>
