<?php
$admin = 0;
if($row->userlevel == '9')
	$admin = 1;
?>

<aside class="left-sidebar">

<!-- Sidebar scroll-->

<div class="scroll-sidebar bg-color-head">

	<!-- Sidebar navigation-->

	<nav class="sidebar-nav side-bar-clr">

		<ul id="sidebarnav">

			<!-- User Profile-->

			<li>

				<!-- User Profile-->

				<div class="user-profile d-flex no-block dropdown m-t-20">

					<div class="user-pic text-white">

						<img src="../thumbmaker.php?src=<?php echo UPLOADURL;?><?php echo ($row->avatar) ? $row->avatar : "blank.png";?>&amp;w=<?php echo $core->thumb_w;?>&amp;h=<?php echo $core->thumb_h;?>&amp;s=1&amp;a=t1" class="rounded-circle" width="40" alt="safely ship a variety of US products"/>

					</div>

					<?php

					date_default_timezone_set("".$core->timezone."");

					$t = date("H");



					if($t < 12){

						$mensaje = ''.$lang['message1'].'';

					}

					else if($t < 18){

						$mensaje = ''.$lang['message2'].'';

					} 

					else{

						$mensaje = ''.$lang['message3'].'';

					}

					?> 



					<div class="user-content hide-menu m-l-10">

						<a href="javascript:void(0)" class="" id="Userdd" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

							<h5 class="m-b-0 user-name font-medium text-white"><?php echo $mensaje; ?>,&nbsp;&nbsp;</h5>

							<span class="op-5 user-email text-white"><?php echo $row->fname;?></span>

						</a>

					</div>

				</div>

				<!-- End User Profile-->

			</li>



			<!-- User Profile-->

			<!-- <div class="nav-small-cap"> <span class="hide-menu"></span></div> -->
			<?php 
			if($admin == 1)
				{?>
			<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark text-white" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-dashboard text-white"></i><span class="hide-menu text-white"><?php echo $lang['dashboard']; ?> </span></a>

				<ul aria-expanded="false" class="collapse  first-level">

					<li class="sidebar-item"><a href="index.php" class="sidebar-link"><i class="mdi mdi-adjust text-white"></i><span class="hide-menu text-white"> <?php echo $lang['home'] ?> </span></a></li>

				</ul>

			</li>

			<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-cube-send text-white"></i><span class="hide-menu text-white"><?php echo $lang['shipment'] ?></span></a>

				<ul aria-expanded="false" class="collapse  first-level">

					<li class="sidebar-item"><a href="courier.php?do=list_courier" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['shipmentlist'] ?> </span></a></li>

					<li class="sidebar-item"><a href="customer_list.php" class="sidebar-link"><i class="mdi mdi-cube-send text-white"></i><span class="hide-menu text-white"> <?php echo $lang['createshipment'] ?> </span></a></li>

				</ul>

			</li>	

			<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="far fa-list-alt text-white"></i><span class="hide-menu text-white">Forms</span></a>

				<ul aria-expanded="false" class="collapse  first-level">

					<li class="sidebar-item"><a href="form_1583.php" class="sidebar-link"><i class="far fa-list-alt text-white"></i><span class="hide-menu text-white"> <?php echo "Form 1583" ?> </span></a></li>

				</ul>

			</li>	

			<?php
		}
		?>
			<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fa fa-shopping-bag text-white"></i><span class="hide-menu text-white">Assistant Shop</span></a>

				<ul aria-expanded="false" class="collapse  first-level">
					<?php 
					if($admin != 1)
					{?>
					<li class="sidebar-item"><a href="order-form.php" class="sidebar-link"><i class="fa fa-shopping-bag text-white"></i><span class="hide-menu text-white"> <?php echo "Order" ?> </span></a></li>
					<?php 
					}
					if($admin == 1)
					{?>
					<li class="sidebar-item"><a href="order_manage.php" class="sidebar-link"><i class="far fa-list-alt text-white"></i><span class="hide-menu text-white"> <?php echo "Manage" ?> </span></a></li>
					<?php
					}
					?>
				</ul>
			</li>	
			
			<!-- <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="order-form.php" aria-expanded="false"><i class="fa fa-shopping-bag text-white" aria-hidden="true"></i><span class="hide-menu text-white">
				<?php
				echo "Assistant Shop" 
				 ?>
				 </span></a>
			 </li> -->
			<?php 
			if($admin == 1)
			{?>
			<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-view-week text-white"></i><span class="hide-menu text-white"><?php echo $lang['container'] ?></span></a>

				<ul aria-expanded="false" class="collapse  first-level">

					<li class="sidebar-item"><a href="container.php?do=list_container" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['contalist'] ?> </span></a></li>

					<li class="sidebar-item"><a href="client_container.php" class="sidebar-link"><i class="mdi mdi-view-week text-white"></i><span class="hide-menu text-white"> <?php echo $lang['createcontainer'] ?> </span></a></li>

				</ul>

			</li>



			<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti ti-gift text-white"></i><span class="hide-menu text-white"><?php echo $lang['conso-lidate'] ?></span></a>

				<ul aria-expanded="false" class="collapse  first-level">

					<li class="sidebar-item"><a href="add_packages.php" class="sidebar-link"><i class="fas fa-cubes text-white"></i><span class="hide-menu text-white"> <?php echo $lang['langs_01034'] ?> </span></a></li>

					<li class="sidebar-item"><a href="consolidate.php?do=list_consolidate" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['langs_01031'] ?> </span></a></li>



				</ul>

			</li>



			<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-book-multiple text-white"></i><span class="hide-menu text-white"><?php echo $lang['manageshipment'] ?></span></a>

				<ul aria-expanded="false" class="collapse  first-level">

					<li class="sidebar-item"><a href="shipping.php?do=shipment" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['all'] ?> </span></a></li> 

					<li class="sidebar-item"><a href="shipping.php?do=pending" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['pending'] ?> </span></a></li> 

					<li class="sidebar-item"><a href="shipping.php?do=rejected" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['rejected'] ?> </span></a></li> 

					<li class="sidebar-item"><a href="shipping.php?do=delivered" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['delivered'] ?> </span></a></li>

					<li class="sidebar-item"><a href="shipping.php?do=delivered_consolidated" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['langs_01032'] ?> </span></a></li>								

				</ul>

			</li>



			<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="customer.php?do=main_client" aria-expanded="false"><i class="mdi mdi-account-multiple-plus text-white"></i><span class="hide-menu text-white"><?php echo $lang['customerlist'] ?> </span></a></li>



			<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="driver.php?do=main_driver" aria-expanded="false"><i class="mdi mdi-car text-white"></i><span class="hide-menu text-white"><?php echo $lang['driver-list'] ?></span></a></li>	



			<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="tools.php?do=ship_rates" aria-expanded="false"><i class="mdi mdi-package text-white"></i><span class="hide-menu text-white"><?php echo $lang['shiprates'] ?> </span></a></li>						
			<?php
			}
			?>


			<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="fas fa-hand-holding-usd text-white"></i><span class="hide-menu text-white"><?php echo $lang['transaction'] ?></span></a>

				<ul aria-expanded="false" class="collapse  first-level">
					<?php 
					if($admin == 1)
						{?>
					<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark" href="shipping.php?do=billings" aria-expanded="false"><i class="mdi mdi-credit-card-plus text-white"></i><span class="hide-menu text-white"><?php echo $lang['billing'] ?> </span></a></li>

					<li class="sidebar-item"><a href="paymentlist_online.php" class="sidebar-link"><i class="fas fa-donate text-white"></i><span class="hide-menu text-white"> <?php echo $lang['payment'] ?> </span></a></li>
					<?php
					}
					?>

					<li class="sidebar-item"><a href="invoice.php" class="sidebar-link"><i class="fas fa-donate text-white"></i><span class="hide-menu text-white"> Invoice </span></a></li>
					 

				</ul>

			</li>	

			<?php if (!$user->levelCheck("2")) : ?>

				<?php /*<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal text-white"></i> <span class="hide-menu text-white"><?php echo $lang['configutarions'] ?></span></li>*/?>
				<?php 
				if($admin == 1)
				{?>


				<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-account-multiple text-white"></i><span class="hide-menu text-white"><?php echo $lang['accountt'] ?> </span></a>

					<ul aria-expanded="false" class="collapse  first-level">

						<li class="sidebar-item"><a href="user.php?do=main" class="sidebar-link"><i class="mdi mdi-check text-white "></i><span class="hide-menu text-white"> <?php echo $lang['usermanage'] ?> </span></a></li>

						<li class="sidebar-item"><a href="user.php?do=main&amp;action=edit&amp;id=<?php echo $user->uid;?>" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['profiles'] ?> </span></a></li> 

						<li class="sidebar-item"><a href="user.php?do=newsletter" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['newsletter'] ?> </span></a></li>

					</ul>

				</li>



				<li class="sidebar-item"> <a class="sidebar-link has-arrow waves-effect" href="javascript:void(0)" aria-expanded="false"><i class="mdi mdi-settings text-white"></i><span class="hide-menu text-white"><?php echo $lang['tool'] ?></span></a>

					<ul aria-expanded="false" class="collapse  first-level">

						<li class="sidebar-item"><a href="tools.php?do=config" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['setcompany'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=config_taxes" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['langs_01033'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=offices" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['officegroup'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=courier_company" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['couriercompany'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=shipping_mode" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['shipmode'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=status_courier" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['stylestatus'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=payment_method" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['paymode'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=packaging" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['packatype'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=category" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['itemcategory'] ?> </span></a></li>

						<hr />

						<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu text-white"><strong><?php echo $lang['container'] ?></strong></span></li>

						<li class="sidebar-item"><a href="tools.php?do=shipline" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['shipline'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=incoterms" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['incoterms'] ?> </span></a></li>

						<hr />

						<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu text-white"><strong><?php echo $lang['template'] ?></strong></span></li>

						<li class="sidebar-item"><a href="tools.php?do=news" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['newmanage'] ?> </span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=templates" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"><?php echo $lang['emailtemplate'] ?> </span></a></li>

						<hr />

						<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal text-white"></i> <span class="hide-menu text-white"><strong><?php echo $lang['setsms'] ?></strong></span></li>

						<li class="sidebar-item"><a href="tools.php?do=sms" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"><?php echo $lang['smsc'] ?></span></a></li>

						<li class="sidebar-item"><a href="tools.php?do=templates_sms" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['smstemplate'] ?> </span></a></li>

						<hr />

						<li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu text-white"><strong><?php echo $lang['backup'] ?></strong></span></li>

						<li class="sidebar-item"><a href="tools.php?do=backup" class="sidebar-link"><i class="mdi mdi-check text-white"></i><span class="hide-menu text-white"> <?php echo $lang['restorbackup'] ?> </span></a></li>

					</ul>

				</li>

			</li>
			<?php
			}
			?>

		<?php endif;?>

		<!-- <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu text-white"></span></li> -->



		<li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="../logout.php" aria-expanded="false"><i class="fa fa-power-off m-r-5 m-l-5 text-white"></i><span class="hide-menu text-white"><?php echo $lang['wout'] ?></span></a></li>

	</ul>

</nav>

<!-- End Sidebar navigation -->

</div>

<!-- End Sidebar scroll-->

</aside>

