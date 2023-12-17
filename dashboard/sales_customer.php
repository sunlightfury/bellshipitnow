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

  if (!defined("_VALID_PHP"))
      die('Direct access to this location is not allowed.');
  
  $row = $user->getUserData();
  
    $fechai=date('Y-m-d');
	$fechaf=date('Y-m-d');
	$datei=date('Y-m-d');
	$datef=date('Y-m-d');
  	
?>

<link href="../assets/css_log/front.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="../assets/js/jquery.js"></script>
<script type="text/javascript" src="../assets/js/jquery-ui.js"></script>
<script src="../assets/js/jquery.ui.touch-punch.js"></script>
<script src="../assets/js/jquery.wysiwyg.js"></script>
<script src="../assets/js/global.js"></script>
<script src="../assets/js/custom.js"></script>
<link rel="stylesheet" type="text/css" href="assets/extra-libs/prism/prism.css">
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.min.js"></script>

<style type="text/css">
canvas {
    margin: auto;
}

.alert {
    margin-top: 20px;
}
</style>

<?php 
$allshipcustomerrow = $user->getCourierlist_user();
$order_form = $user->getOrder_form_list();
$customer_in=$_GET['cnum'];
$sql_inv= $db->query("SELECT * FROM `customer_invoices` WHERE `is_paid`='1' AND `customer_id` ='$customer_in'");
// $ro= $sql_inv->fetch_all();

?>

<div class="row">
    <!-- Column -->
    <div class="col-lg-12 col-xl-12 col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="row" ng-app="app_billing">
                    <!-- column -->
                    <div class="col-lg-3">
                        <div class="m-r-10"><span class="text-secondary display-5"><i style="color:#7460ee"
                                    class="mdi mdi-package-variant-closed"></i></span></div>
                        <span><?php echo $lang['lshippping'] ?></span>
                        <h2 class="m-b-0 m-t-30">
                            <?php echo $core->currency;?>
                            <?php
							// $total_assistant = $db->query("SELECT SUM(order_form.grandtotal) as total FROM order_form, users WHERE order_form.name=users.username AND order_form.approve_status='1' AND users.id=".Filter::$id."")->fetch_object()->total;
								// echo $total_assistant;
								 
								$total = $db->query("SELECT SUM(add_courier.r_costtotal) as total FROM add_courier, users WHERE add_courier.username=users.username AND add_courier.act_status='1' AND users.id=".Filter::$id."")->fetch_object()->total;
								$sum_price= $db->query("SELECT * FROM `customer_invoices` WHERE `is_paid`='1' AND `customer_id` ='$customer_in'");
								// echo $total;
								if($sum_price->num_rows >0){					
								while ($row = mysqli_fetch_assoc($sum_price)){
									$total_sum="0";
									$total_sum += $row['total_balance'];		 
								}
								 print formato($total  + $total_sum);
								}
                                else{	
									print formato($total);
								}
								 	 
								 //output value
							?>
                        </h2>
                        <h6 class="font-light text-muted"><?php echo $lang['learning'] ?></h6>
                    </div>

                    <div class="col-lg-3">
                        <div class="m-r-10"><span class="text-secondary display-5"><i style="color:#f62d51"
                                    class="mdi mdi-account-circle"></i></span></div>
                        <span><?php echo $lang['lcustomer'] ?></span>
                        <h2 class="m-b-0 m-t-30">
                            <?php
								$results = $db->query("SELECT users.fname, users.lname FROM add_courier, users WHERE add_courier.username=users.username AND users.id=".Filter::$id." limit 1");
								while($row = $results->fetch_array()) {
									print $row["fname"].' '.$row["lname"];
								}
							?>
                        </h2>
                        <h6 class="font-light text-muted"><?php echo $lang['lbilling'] ?></h6>
                    </div>
                    <!-- column -->
                </div>

                <!-- Nav tabs -->
                <ul class="nav nav-tabs customtab" role="tablist">
                    <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#shipping" role="tab"><span
                                class="hidden-sm-up"><i class="mdi mdi-package-variant-closed"></i></span> <span
                                class="hidden-xs-down"><?php echo $lang['langs_01039'] ?></span></a> </li>
                </ul>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="shipping" role="tabpanel">
                        <div class="p-20">
                            <div class="table-responsive">
                                <table id="zero_config"
                                    class="table table-bordered table-condensed table-hover table-striped">
                                    <thead>
                                        <tr>
                                            <th><b><?php echo $lang['ldate'] ?></b></th>
                                            <th><b><?php echo $lang['ltrack'] ?></b></th>
                                            <th class="text-center"><b><?php echo $lang['ldescription'] ?></b></th>
                                            <th class="text-center"><b><?php echo $lang['lquantity'] ?></b></th>
                                            <th class="text-center"><b><?php echo $lang['lweight'] ?></b></th>
                                            <th class="text-center"><b><?php echo $lang['lpaymode'] ?></b></th>
                                            <th class="text-center"><b><?php echo "SHIPMENT FEES"; ?></b></th>

                                            <th class="text-center"><b><?php echo $lang['lbalance'] ?>
                                                    (<?php echo $core->currency; ?>)</b></th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php if(($allshipcustomerrow >0)||($order_form > 0)||(isset($sql_inv) > 0)):?>
                                        <tr>
                                            <?php 
												while($rows=mysqli_fetch_array($sql_inv)){
													 echo "<td>".$rows['created_at']."</td>";
													 echo "<td class='text-center'>".$rows['tracking_id']."</td>";
													 echo "<td > <b>Customer Invoice</b>#".$rows['description']."</td>";
													 echo "<td class='text-center'>".$rows['quantity']."</td>";
													 echo "<td class='text-center'>".$rows['weight']."</td>";
													 echo "<td class='text-center'>".$rows['pay_mode']."</td>";
													 echo "<td class='text-center'>".$rows['shipment_fee']."</td>";
													 echo "<td class='text-center'>".formato($rows['total_balance'])."</td>";
												}
											?>
                                        </tr>
										
                                        <?php if($allshipcustomerrow >0){ ?>
                                        <?php foreach ($allshipcustomerrow as $row):?>
                                        <tr>
                                            <td><?php echo $row->created;?></td>
                                            <td><?php echo $row->order_inv;?></td>
                                            <td class="text-center"><?php echo $row->itemcat;?> |
                                                <?php echo $row->r_description;?></td>
                                            <td class="text-center"><?php echo $row->r_qnty;?></td>
                                            <td class="text-center">
                                                <?php 
														if ($row->r_weight > $row->v_weight) {
															echo  round_out($row->r_weight);
														} else {
															echo round_out($row->v_weight);
														}
													?>
                                            </td>
                                            <td class="text-center"><?php echo $row->pay_mode;?></td>
                                            <td class="text-center"><?php echo " ";?></td>
                                            <td class="text-center"><?php echo $row->r_costtotal;?></td>
                                        </tr>
                                        <?php endforeach;?>
                                        <?php unset($row);?>
                                        <?php } if($order_form >0){ ?>
                                        <?php foreach ($order_form as $row1):?>
                                        <tr>
                                            <td><?php echo $row1->created_at;?></td>
                                            <td class="text-center"><?php echo $row1->tracking;?></td>
                                            <td class="text-center"><a class="text-primary"
                                                    href="items_view.php?id=<?php echo $row1->id;?>">Items list</a></td>
                                            <td class="text-center"><?php echo '1';?></td>
                                            <td class="text-center"><?php echo '';?></td>
                                            <td class="text-center"><?php echo 'Paypal';?></td>
                                            <td class="text-center"><?php echo $row1->shipment_fee;?></td>
                                            <td class="text-center"><?php echo formato($row1->grandtotal);?></td>
                                        </tr>

                                        <?php endforeach;?>
                                        <?php unset($row1); }?>
                                        <?php  else: ?>
                                        <tr>
                                            <td colspan="8">
                                                <?php echo "
											<i align='center' class='display-3 text-warning d-block'><img src='assets/images/alert/ohh_shipment.png' width='130' alt='Access to thousands of US stores'/></i>								
											",false;?>
                                            </td>
                                        </tr>

                                        <?php endif;?>
                                    </tbody>


                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>

<script src="app_billing.js"></script>
<script src="assets/extra-libs/prism/prism.js"></script>