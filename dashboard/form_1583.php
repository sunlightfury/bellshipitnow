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
    
    if (!$user->logged_in) 
        redirect_to("login.php");
  	
  	$row = $user->getUserData();
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
    <title>Form 1583</title>
    <!-- This page plugin CSS -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/style.min.css" rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular.min.js"></script>
    <link rel="stylesheet" href="assets/css/custom.css">
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
      <div class="page-wrapper bg-light">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="container">
          <div class="row mx-auto">
            <div class="col-lg-12 text-center bg-color-head my-4">
              <h3 class="page-title p-3">Form 1583</h3>
            </div>
          </div>
          <?php include 'head_courier.php'; ?>
        </div>
        <div class="container">
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
                        <div class="intro-box">
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder mx-auto">
                            <h3>What will my free US address look like? Is it a physical address or just a P.O. Box?</h3>
                            <p>Bellshipitnow provides you with a forever free physical US address, NOT just a Mailbox or a P.O. Box. 
                              Your Bellshipitnow US address allows you to receive mail, packages of any size or even oversized items on pallets that are shipped from merchants using major shipping carriers such as UPS, FEDEX, DHL, USPS, etc. You will not encounter any issues with companies that refuse to ship to P.O. Boxes.
                              Your Bellshipitnow US address will look like this:<br /> <strong>
                              ======================== <br /> 
                              Your name or company name<br />
                              Unit# (BSNXXX) <br />
                              40 Memorial Highway <br />
                              20C New Rochelle, NY 10801<br />
                              United States<br />
                              ======================== <br /> </strong>
                            </p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Some US stores require a US Phone number for orders, what number should I provide them? </h3>
                            <p>You can provide them with Bellshipitnow main contact number listed on your account or follow this guide on: <a href="http://www.makeuseof.com/tag/no-us-phone-number-best-free-apps-calling-to-usa/" target="_blank">"How to get a Free US Phone number"</a>.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3 id="shipping-restrictions">What items am I prohibited from shipping?</h3>
                            <p>Prohibited or Restricted Commodities items may vary by country. Please refer to the country-specific facts and regulations on shipping carriers sites: <br>
                              <br><a href="http://www.ups.com/ga/CountryRegs?WT.svl=SubNav" target="_blank">. UPS Facts and Regulations & Guide to Shipping Dangerous Goods</a>
                              <br><a href="http://www.dhl.com/en/express/shipping/shipping_advice/dangerous_goods.html" target="_blank">. DHL Facts and Regulations & Guide to Shipping Dangerous Goods</a>
                              <br><a href="https://www.usps.com/ship/shipping-restrictions.htm" target="_blank">. USPS Facts and Regulations & Guide to Shipping Dangerous Goods</a>
                              <br><a href="https://www.aramex.com/content/uploads/109/197/45680/Prohibited-Items-InternationalExpress.pdf" target="_blank">. ARAMEX Facts and Regulations & Guide to Shipping Dangerous Goods</a>
                              <br><a href="https://www.tnt.com/express/en_gb/site/home/how-to-ship-parcel/international-rules-regulations/dangerous-goods.html" target="_blank">. TNT Facts and Regulations & Guide to Shipping Dangerous Goods</a>
                              <br>
                              <br> For more up to date information on country-specific facts and regulations, we suggest visiting the website or contacting the local customs office in your country.
                            </p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3><a id="DimensionalWeight">How does Bellshipitnow calculate the Billable Weight?</a> </h3>
                            <p>We follow the international standard to determine the Billable Weight of a shipment. All international shipping carriers base their shipping rates on the Billable Weight, which is the greater of Actual Weight and Dimensional Weight. Actual Weight is the weight of the package when put on a scale. Dimensional Weight is based on the size of the package. Large items that have a small Actual Weight, like pillows and lamp shades, will have a larger Dimensional Weight. 
                              <br>For up-to-date information on how Dimensional Weight is calculated by shipping carriers, please visit <a href="http://www.dhl-usa.com/en/tools/volumetric_weight_express.html" target="_blank">DHL Dimensional Weight Calculator</a> or <a href="http://www.ups.com/content/us/en/resources/ship/packaging/dim_weight.html" target="_blank">UPS Dimensional Weight Calculator</a> <br>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>How long can I store my items at my suite with Bellshipitnow? </h3>
                            <p>Bellshipitnow can store each package free of charge for a period of 180 days from the date of delivery. The maximum storage time for each package is 180 days since the date of its delivery to your suite.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3><a id="Bitcoin">What forms of payment are accepted on Bellshipitnow.com?</a></h3>
                            <p> You can pay for the shipping fees and/or your Assisted Purchases using a wide range of payment methods at the checkout on Bellshipitnow.com: <br>
                              <br /> . PAYPAL
                              <br /> . CREDIT CARDS (Visa, MasterCard, Discover, American Express and most other major Credit cards) 
                              <br /> . BANK WIRE TRANSFERS.
                              <br /> Checks, Moneyorders or WesternUnion are not accepted at this time.
                            </p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>What shipping carriers does Bellshipitnow use to forward packages?</h3>
                            <p>You can select the shipping carrier and method during checkout process on Bellshipitnow.com to ship packages from Bellshipitnow suite to your country using a wide range of carriers:<br /> 
                              <br /> . UPS
                              <br /> . DHL
                              <br /> . FedEx
                              <br /> . USPS (Available to certain countries only)
                            </p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Some merchants require a credit card with a US billing  address. I don’t have one, what can I do?</h3>
                            <p>There are several things you can do: <br /> <br /> 
                              - A) Use our Free Assisted Purchase service: Let us buy your items for you at NO ADDITIONAL CHARGE ! <br /> 
                              . After you register, simply log into your Bellshipitnow account and click on "Place New order" button (Purple button) under "Assisted Purchases", then complete the order form and payment. <br />
                              . We will order the item(s) for you, FREE OF CHARGE & provide your with (Order placement / Shipping / Delivery) confirmations.  <br /> 
                              . Once the item(s) arrives at your suite with Bellshipitnow, you can choose to forward it to you or combine with other items before forwarding it.
                              <br /> <br />
                              - B) You may try to get a Debit Card with your US address with Bellshipitnow as the billing address. <br /><br /> 
                              - C) Contact your credit card issuer and request that a secondary address be added to your card. Use your Bellshipitnow address as your secondary address. Most credit card companies will allow this.   
                            </p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>I want to buy items from U.S. websites but they won't ship to my international address. Can Bellshipitnow.com allow me to access these deals?</h3>
                            <p>With your own US address from Bellshipitnow.com, you will be able to buy goods far cheaper than otherwise  possible. Most of US merchants will not ship to international addresses, but now you can! Ship the goods to your established address with us and we will then consolidate all your packages and ship them to you outside the U.S.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Do you accept certified mail, registered mail, and COD shipments?</h3>
                            <p>Yes, we do accept certified mail, registered mail at NO additional charge; we simply must have your explicit confirmation before receiving such shipments. We do not accept COD shipments. </p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Do I need to submit USPS Form 1583 <a name="USPS_Form_1583"></a> ?</h3>
                            <p>
                              We need this form to accept packages shipped from merchants via <a href="http://www.usps.com/" target="_blank">USPS</a> to your Bellshipitnow suite. We do NOT need this form to accept packages from merchants who ship via other major shipping carriers such as UPS, FEDEX, DHL, etc. Usually you can select the shipping carrier at the checkout process on the merchant's website. Select any other carrier than USPS, and you will not need to provide us with the 1583 USPS form<br /><br />
                              Due to <a href="http://www.usps.com/" target="_blank">USPS</a> regulations, all customers must complete <a href="http://bellshipitnow.com/dashboard/uspsForm1583.pdf" target="_blank">USPS Form 1583</a> in order to receive shipments from USPS at their Bellshipitnow suite. Bellshipitnow may not accept mail from USPS until we receive Form 1583, authorizing Bellshipitnow to accept mail on your behalf. This is a one time requirement by the United States Postal Service and we can’t waive it. <br/>
                              <br />
                              <strong>Instructions to submit USPS Form 1583 to Bellshipitnow:</strong> <br />  <br /> 
                              <strong>1. Print & Fill:</strong> <a href="http://bellshipitnow.com/dashboard/uspsForm1583.pdf" target="_blank">Click here to print USPS Form 1583</a>, then fill it following the instructions bellow.
                              <br/><br/>
                              <strong>2. Attach & Submit:</strong> <a href="" target="_blank">Click here to login to Bellshipitnow Customer Support and submit the filled USPS Form 1583 as attachment.</a> </strong></big>(Once you login, click "Submit a Request" and attach USPS Form 1583. Attachment Link is at the bottom of the Request Form)
                              <br /><br />
                              These are the steps you need to complete on <a href="http://bellshipitnow.com/dashboard/uspsForm1583.pdf" target="_blank">USPS Form 1583 (PDF download link)</a> so we can accept USPS deliveries at your suite at Bellshipitnow:<br />
                              <strong>For Everyone </strong><br />
                              Box 1:  Enter date<br />
                              Box 2:  Name in Which Applicant's Mail Will Be Received for Delivery to Agent. (Most of the cases your name or company name)<br />
                              Box 3:  Enter the US address provided to you by Bellshipitnow.
                              <br /> 
                              Box 4:  Enter the address of Bellshipitnow warehouse<br />
                              Box 5:   Enter 'Yes' and sign inside the box if you want the agent "Bellshipitnow" to accept registered mail for you<br />
                              Box 6:  Enter your name<br />
                              Box 7:  Enter your address and phone number (in your Country) <br />
                              Box 8:  Enter the number of your 2 types of identification. Make copies of those identifications to send with your form. Please be sure to include expiration date of the IDs.<br />
                              <strong> For Businesses </strong> <br />
                              Box 9:  Enter your company name<br />
                              Box 10:  Enter your company's address and phone number<br />
                              Box 11:   Enter the type of business<br />
                              Box 12:  For the business, enter the names of the people who will receive mail<br />
                              Box 13:  Enter the names and addresses of the company officers<br />
                              Box 14:  Enter the registered business name and address, plus the country, state and date of registration <br>
                              <strong> For Everyone </strong> <br />
                              Box 15:  Get the form signed by an agent or notary public. If a Notary is not available, an attorney, bank or government official may sign and seal.<br />
                              Box 16:  Your signature
                            </p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>What if I can't access the internet? Can  you still offer service to my area?</h3>
                            <p>Yes. You can still have your mail and packages forwarded, but it will have to be on a fixed  schedule. Simply sign up for our automatic forwarding option and we will send  your packages and mail on a prearranged schedule.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Which countries do you ship to?</h3>
                            <p>For a list of countries we serve, view the registration form. Please take the  time to click on the country of your choosing, as not all shipping options are  available in all countries. If a country is not listed on our website, we do not offer service.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Do you offer shipping services within the United States?</h3>
                            <p>Yes. We will offer our address to anyone in the United States. We have many  customers that ship through us within the United   States in order to create a US business presence and receive a Portland, Oregon postmark on their outgoing  mail and packages.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Do you offer any options for forwarding letters and documents?</h3>
                            <p>Yes, we can forward letters and documents just like we forward boxed packages. You can use the shipping calculator just estimate the shipping rates.<br /> <br /></p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>How can I redirect mail or packages from another US address to my new address with Bellshipitnow?</h3>
                            <p>If you already have an address in the US, you should make a Change of Address with USPS. This can be done online on USPS.com</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>What if I don't want some of the mail that arrives in my box? Do I have to pay to have it sent to me?</h3>
                            <p>With online access, you can discard items that pass our screen with a simple click of the mouse. This way, you will never end up paying for shipping  unwanted mail.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Do you require a deposit like your other competitors?</h3>
                            <p>No deposit is required. The package will be shipped to you from us once we have received the paypal payment for shipping fees, enabling us not to require any initial deposit.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Do quoted shipping rates include Import Duties and Taxes?</h3>
                            <p>While our shipping rates include all shipping and handling costs, you may still be responsible for certain Import Duties and Taxes levied against your shipment by your country. Bellshipitnow is not responsible for any delays in shipping associated with customs difficulties. For more information, we suggest contacting your local customs office.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>Can I declare another value on my items in order to lower Import Duties and Taxes?</h3>
                            <p>You may declare whatever value you want on your items from your account area on Bellshipitnow.com. That will be value that we declare on your package when we forward it to you. We always recommend declaring a reasonable value to avoid unnecessary delays or penalties when the package arrives at your country.</p>
                          </div>
                        </div>
                        <div class="box boxes shadow-sm mb-2 bg-white rounded p-4">
                          <div class="visual"></div>
                          <div class="text-holder">
                            <h3>What social networking sites can I find Bellshipitnow on?</h3>
                            <p>You can join us on:
                              <br> <a href="http://www.twitter.com/bellshipitnow" target="_blank">http://www.twitter.com/bellshipitnow</a> 
                              <br> <a href="http://www.facebook.com/bellshipitnow" target="_blank">http://www.facebook.com/bellshipitnowcom</a> 
                              <br> <a href="http://www.pinterest.com/bellshipitnow" target="_blank">http://www.pinterest.com/bellshipitnow</a> 
                              <br> <a href="http://www.linkedin.com/companies/bellshipitnow" target="_blank">http://www.linkedin.com/companies/bellshipitnow</a> 
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id ="wait" ><span><img src="assets/images/ajax-loader.gif" alt="guarantee a safe and fast shipping to any location" /></span></div>
              <div class="card boxes shadow-sm mb-2 bg-white rounded p-4">
                <form action = "sub_form_1583.php" method="post" enctype = "multipart/form-data" >
                  <div class="card-body text-center">
                  <p>United States Postal Service®</p>
                  <h3>Application for Delivery of Mail Through Agent</h3>
                  <p>See Privacy Act Statement on Reverse</p>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify">In consideration of delivery of my or our (firm) mail to the agent named below, the addressee and agent agree: (1) the addressee or the agent must not file a change of address order with the Postal Service™ upon termination of the agency relationship; (2) the transfer of mail to another address is the responsibility of the addressee and the agent; (3) all mail delivered to the agency under this authorization must be prepaid with new postage when redeposited in the mails; (4) upon request the agent must provide to the Postal Service all addresses to which the agency transfers mail; and (5) when any information required on this form changes or becomes obsolete, the addressee(s) must file a revised application with the Commercial Mail Receiving Agency (CMRA). NOTE: The applicant must execute this form in duplicate in the presence of the agent, his or her authorized employee, or a notary public. The agent provides the original completed signed PS Form 1583 to the Postal Service and retains a duplicate completed signed copy at the CMRA business location. The CMRA copy of PS Form PS 1583 must at all times be available for examination by the postmaster (or designee) and the Postal Inspection Service. The addressee and the agent agree to comply with all applicable Postal Service rules and regulations relative to delivery of mail through an agent. Failure to comply will subject the agency to withholding of mail from delivery until corrective action is taken. This application may be subject to verification procedures by the Postal Service to confirm that the applicant resides or conducts business at the home or business address listed in boxes 7 or 10, and that the identification listed in box 8 is valid.</p>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-left"><strong >1.</strong></p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Date</p>
                      </div>
                      <input type="date" class="form-control input-focus" name="date" required placeholder="Date">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >2.</strong> Name in Which Applicant's Mail Will Be Received for Delivery to Agent. (Complete a separate PS Form 1583 for EACH applicant. Spouses may complete and sign one PS Form 1583. Two items of valid identification apply to each spouse. Include dissimilar information for either spouse in appropriate box.)</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Name</p>
                      </div>
                      <input type="text" class="form-control input-focus"  name="delivery_name" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >3.</strong> Address to be Used for Delivery (Include PMB or # sign.)</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Address</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="delivery_address" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">City</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="delivery_city" required placeholder="">
                      <div class="input-group-prepend">
                        <p class="input-group-text">State</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="delivery_state" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Zip</p>
                      </div>
                      <input type="number" class="form-control input-focus" name="delivery_zip" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >4.</strong> Applicant authorizes delivery to and in care of:</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Name</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="authorizes_name" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Address</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="authorizes_address" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">City</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="authorizes_city" required placeholder="">
                      <div class="input-group-prepend">
                        <p class="input-group-text">State</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="authorizes_state" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Zip</p>
                      </div>
                      <input type="number" class="form-control input-focus" name="authorizes_zip" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >5.</strong> This authorization is extended to include restricted delivery mail for the undersigned(s):</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Extended authorization</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="authorization_extended" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >6.</strong> Name of Applicant</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Name</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="applicant_name" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >7.</strong> Applicant Home Address (No., street, apt./ste. no)</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Address</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="home_address" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">City</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="home_city" required placeholder="">
                      <div class="input-group-prepend">
                        <p class="input-group-text">State</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="home_state" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Zip</p>
                      </div>
                      <input type="number" class="form-control input-focus" name="home_zip" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Applicant Telephone Number (Include area code)</p>
                      </div>
                      <input type="tel" class="form-control input-focus" name="applicant_telephone" required placeholder="">
                    </div>
                  </div>
                  <div class = "row" >
                    <div class="col-md-11 mx-auto">
                      <p class="text-justify"><strong >8.</strong> Two types of identification are required. One must contain a photograph of the addressee(s). Social Security cards, credit cards, and birth certificates are unacceptable as identification. The agent must write in identifying information. Subject to verification.</p>
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">A</p>
                      </div>
                      <input type="file" name="id_A" accept="image/*" class="form-control input-focus" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">B</p>
                      </div>
                      <input type="file" name="id_B" accept="image/*" class="form-control input-focus" required placeholder="">
                    </div>
                  </div>
                  <div class = "row" >
                    <div class="col-md-11 mx-auto">
                      <p class="text-justify">Acceptable identification includes: valid driver's license or state non-driver's identification card; armed forces, government, university, or recognized corporate identification card; passport, alien registration card or certificate of naturalization; current lease, mortgage or Deed of Trust; voter or vehicle registration card; or a home or vehicle insurance policy. A photocopy of your identification may be retained by agent for verification.</p>
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >9.</strong> Name of Firm or Corporation</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Name</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="firm_name" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >10.</strong> Business Address (No., street, apt./ste. no)</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Address</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="business_address" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">City</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="business_city" required placeholder="">
                      <div class="input-group-prepend">
                        <p class="input-group-text">State</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="business_state" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Zip</p>
                      </div>
                      <input type="number" class="form-control input-focus" name="business_zip" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Business Telephone Number (Include area code)</p>
                      </div>
                      <input type="tel" class="form-control input-focus" name="business_telephone" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >11.</strong> Type of Business</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Type</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="business_type" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >12.</strong> If applicant is a firm, name each member whose mail is to be delivered. (All names listed must have verifiable identification. A guardian must list the names of minors receiving mail at their delivery address.)</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Firm Name</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="firm_member_name" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >13.</strong> If a CORPORATION, Give Names and Addresses of Its Officers</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Officers Details</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="corporation_officers_name" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >14.</strong> If business name (corporation or trade name) has been registered, give name of county and state, and date of registration.</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Business Registration Details</p>
                      </div>
                      <input type="text" class="form-control input-focus" name="registered_business_info" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >Warning:</strong> The furnishing of false or misleading information on this form or omission of material information may result in criminal sanctions (including fines and imprisonment) and/or civil sanctions (including multiple damages and civil penalties).</p>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >15.</strong> Signature of Agent/Notary Public</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Signature</p>
                      </div>
                      <input type="file" accept="image/*" class="form-control input-focus" name="agent_signature" required placeholder="">
                    </div>
                  </div>
                  <div class="col-md-11 mx-auto">
                    <p class="text-justify"><strong >16.</strong> Signature of Applicant (If firm or corporation, application must be signed by officer. Show title.)</p>
                    <div class="input-group mb-3">
                      <div class="input-group-prepend">
                        <p class="input-group-text">Signature</p>
                      </div>
                      <input type="file" accept="image/*" class="form-control input-focus" name="applicant_signature" required placeholder="">
                    </div>
                  </div>
                  <input type="hidden" name="customer_number" value="<?php echo $user->customer_number; ?>" />
                  <input type="hidden" name="email" value="<?php echo $user->email; ?>" />
                  <input type="submit" class="btn btn-lg bg-color-head" value="Submit">
                </form>
              </div>
              <hr>
            </div>
          </div>
          <!-- End row -->
        </div>
        </footer>
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
    <script src="add_package.js"></script>
    <script>                             
    $(document).ready(function(){
      $('#wait').hide(); 
        $("form").submit(function(e){
          e.preventDefault();
          var formData = new FormData(this);
            // var formData = new FormData(this.closest("form"));
          $.ajax({
            type: 'POST',
            url: 'sub_form_1583.php',
            data: formData,
            beforeSend: function() { $('#wait').show(); },
						complete: function() { $('#wait').hide(); },
            success: function (data) {
              alert(data);
              // form.reset();
              // res = jQuery.parseJSON(data);
              console.log(data);	 
            },
            cache: false,
            contentType: false,
            processData: false
          });
				});		
			});
		</script>
  </body>