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
	
    <title><?php echo $lang['deliver-ship1'] ?> | <?php echo $core->site_name ?></title>
    <!-- This page plugin CSS -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
	<link rel="stylesheet" href="assets/css/custom.css">
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
                        <h4 class="page-title"><?php include("filter.php");?></h4>
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
				<?php switch(Filter::$action): case "status": ?>
				<?php $row = Core::getRowById(Core::cTable, Filter::$id);?>
				<?php $statusrow = $core->getStatus(); ?>
				<div class="row justify-content-center">
					<!-- Column -->
					<div class="col-sm-12 col-lg-8">
						<div class="card">
							<div class="card-body">
								<div id="loader" style="display:none"></div>
								<div id="msgholder"></div>
								<form class="xform" id="admin_form" method="post">
									<header>
									<h4 class="modal-title"><?php echo $lang['deliver-ship2'] ?> <?php echo $row->order_inv;?> </h4> <?php echo $lang['deliver-ship3'] ?> <?php echo $row->r_dest;?> | <?php echo $row->r_city;?></header>
									<div class="row"> 										
										<div class="col-sm-12 col-md-4">
											<div class="input-group mb-3">
											</div>
										</div>
										<div class="col-sm-12 col-md-4">
											<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['deliver-ship4'] ?></label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text">
														<span style="color:#ff0000" class="ti-calendar"></span>
													</span>
												</div>
												<input type="text" class="form-control" id="datepicker-autoclose" name="deliver_date" placeholder="mm/dd/yyyy" >
											</div>
										</div>

										<div class="col-sm-12 col-md-4">
											<label for="inputEmail3" class="control-label col-form-label"><?php echo $lang['deliver-ship5'] ?></label>
											<div class="input-group mb-3">
												<div class="input-group-prepend">
													<span class="input-group-text" id="basic-addon1"><i class="ti-timer"></i></span>
												</div>
												<input class="form-control" name="delivery_hour" value="<?php date_default_timezone_set("".$core->timezone.""); echo "" . date("h:i:sa"); ?>">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-sm-12 col-md-4">
											<div class="input-group mb-3">
												<i align='left' class='display-3 text-warning d-block'><img src='assets/images/alert/deliver.png' width='159' alt="superlative customer service"/></i>
											</div>
										</div>
										<div class="col-sm-12 col-md-4">
											<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['deliver-ship6'] ?></label>
											<input class="form-control" name="person_receives" value="<?php echo $row->person_receives;?>" placeholder="<?php echo $lang['deliver-ship6'] ?>">
										</div>
										<div class="col-sm-12 col-md-4">
											<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['deliver-ship7'] ?></label>
											<div class="input-group mb-3">
												<input class="form-control" name="name_employee" value="<?php echo $row->name_employee;?>" placeholder="<?php echo $lang['deliver-ship7'] ?>">
											</div>
										</div>
									
										<div class="col-sm-12 col-md-2" style="display:none">
											<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['deliver-ship8'] ?></label>
											<input class="form-control" name="status_courier" value="Delivered" placeholder="<?php echo $lang['deliver-ship8'] ?>">
										</div>
										<div class="col-sm-12 col-md-2" style="display:none">
											<label for="inputcontact" class="control-label col-form-label"><?php echo $lang['deliver-ship9'] ?></label>
											<input class="form-control" name="act_status" value="2" placeholder="<?php echo $lang['deliver-ship9'] ?>">
										</div>	
									</div>
									</br>
									<footer>
										<button class="button" name="dosubmit" type="submit"><?php echo $lang['deliver-ship10'] ?><span><i class="ti-briefcase"></i></span></button>
										<a href="index.php" class="button button-secondary"><span><i class="ti-share-alt"></i></span> <?php echo $lang['deliver-ship11'] ?></a> 
									</footer>
									<input name="id" type="hidden" value="<?php echo Filter::$id;?>" />									
								</form>
							</div>
						</div>
					</div>
					<!-- Column -->
				</div>
                <!-- End row -->
            </div>
			<?php echo Core::doForm("processDelivershipment");?> 
			<?php break;?>
			<?php endswitch;?>

			
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

		<script src="assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<script>
		// Date Picker
		jQuery('.mydatepicker, #datepicker, .input-group.date').datepicker();
		jQuery('#datepicker-autoclose').datepicker({
			autoclose: true,
			todayHighlight: true
		});
		jQuery('#date-range').datepicker({
			toggleActive: true
		});
		jQuery('#datepicker-inline').datepicker({
			todayHighlight: true
		});
		</script>
		
</body>

</html>
