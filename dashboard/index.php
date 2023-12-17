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
    session_start();
    define("_VALID_PHP", true);
    require_once("../init.php");
  
    if (is_dir("../setup")): 
        die("<div style='text-align:center'>" 
        . "</br></br>"
        . "<span style='padding: 15px; border: 1px solid #999; background-color:#f9b66d;border-radius:5px;color:#666;padding:5px;margin-top: 40px;" 
        . "font-family: Verdana; font-size: 14px; margin-left:auto; margin-right:auto'>" 
        . "<b>Warning:</b> Please delete the <b>setup</b> folder!</span></div>");
    endif;
  
    if (!$user->is_Admin())
    {
        if (!$user->logged_in) 
        {
        redirect_to("login.php");
        } 
        else 
        {
            redirect_to("invoice.php");
        }
    }
	$row = $user->getUserData();
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="Courier DEPRIXA-Integral Web System" />
	<meta name="author" content="Jaomweb">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../uploads/favicon.png">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
    <title><?php echo $lang['dashboard']; ?> | <?php echo $core->site_name ?></title>
    <!-- font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
	<link href="assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="assets/extra-libs/c3/c3.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/ddslick@1.0.3/src/jquery.ddslick.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
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
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title"><?php echo $lang['dashboard'] ?></h4>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
			<!-- ============================================================== -->
                <?php (Filter::$do && file_exists(Filter::$do.".php")) ? include(Filter::$do.".php") : include("ship_list.php");?>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- footer -->
            
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.css">
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.all.min.js"></script>
            <?php
                if (isset($_SESSION['status']) && $_SESSION['status'] == 200) 
                {
                    echo '<script>
                    // Show SweetAlert2 success message
                    Swal.fire({
                        icon: "success",
                        title: "'.$_SESSION['message'].'",
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        // Redirect to the welcome page after successful login
                        // window.location.href = "dashboard/index.php";
                    });
                </script>';
                    unset($_SESSION['status']);
                    unset($_SESSION['data']);
                    unset($_SESSION['message']);
                } 
                else if (isset($_SESSION['status']) && $_SESSION['status'] != 200) 
                {
                    echo '<script>
                    // Show SweetAlert2 success message
                    Swal.fire({
                        icon: "error",
                        title: "'.$_SESSION['message'].'",
                        showConfirmButton: false,
                        timer: 2000
                    }).then(function() {
                        // Redirect to the welcome page after successful login
                        // window.location.href = "dashboard/index.php";
                    });
                    </script>';
                    unset($_SESSION['status']);
                    unset($_SESSION['data']);
                    unset($_SESSION['message']);
                }
                echo "<script>
                toastr.success('test', {timeOut: 5000});
                </script>";
            ?>
			
            <?php include 'footer.php'; ?>
			