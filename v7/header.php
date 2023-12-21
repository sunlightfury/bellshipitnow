<?php
  session_start();
  $username = isset($_SESSION['username']) && !empty($_SESSION['username']) && $_SESSION['username'] != 'Guest'?$_SESSION['username']:'';
?>

<!DOCTYPE html>
<html data-wf-page="657c2d823c2c41e7bc8dd6e7" data-wf-site="657c2d813c2c41e7bc8dd686" class=" w-mod-ix">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="Discover seamless international shopping with BellShipItNow.com! Shop from your favorite USA stores and have your purchases delivered right to your doorstep, no matter where you are. Our efficient and reliable shipping services ensure that you can enjoy the latest trends, exclusive products, and top-notch brands from the USA, without any hassle." name="description">
  <meta content="Shipping Solutions, USA products, Freight Services,International Shipping,Logistics Management,Parcel Delivery,Cargo Shipping,Express Shipping,E-commerce Shipping,Freight Forwarding,Same-day Delivery,Global Shipping,Door-to-Door Shipping,Custom Shipping Solutions,Shipping and Handling,Shipping Rates,Reliable Shipping,Expedited Shipping,Shipping Companies,Shipping Partners,Affordable Shipping" name="keywords">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:site" content="@bellshipitnow">
  <meta name="twitter:title" content="Discover seamless international shopping with BellShipItNow.com! Shop from your favorite USA stores and have your purchases delivered right to your doorstep, no matter where you are.">
  <meta name="twitter:creator" content="@author_handle">
  <!-- Twitter summary card with large image must be at least 280x150px -->
  <meta name="twitter:image:src" content="https://bellshipitnow.com/assets/img/bellshipitnow_logo.png">

  <meta property="og:title" content="Discover seamless international shopping with BellShipItNow.com! Shop from your favorite USA stores and have your purchases delivered right to your doorstep" />
  <meta property="og:type" content="article" />
  <meta property="og:url" content="https://bellshipitnow.com/" />
  <meta property="og:image" content="https://bellshipitnow.com/assets/img/bellshipitnow_logo.png" />
  <meta property="og:description" content="Our efficient and reliable shipping services ensure that you can enjoy the latest trends, exclusive products, and top-notch brands from the USA, without any hassle." />
  <meta property="og:site_name" content="BELLSHIPITNOW" />

  <!-- Font Format Implementation Goes Here -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">

  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16.png">
  <link rel="manifest" href="/site.webmanifest">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css?ver=<?= date('H:i:s'); ?>" rel="stylesheet" />
  <link href="assets/css/webflow.css" />
  <!--    <link href="assets/css/clientbellshipitnow.css" rel="stylesheet" type="text/css" />-->
  <link href="assets/css/auroras-fantabulous-site-050fff.webflow.css" rel="stylesheet" type="text/css" />
  
  <!-- Bootstrap -->
  <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="css/style.css?ver=<?= date('H:i:s'); ?>" />
  <link rel="stylesheet" href="assets/css/select2.min.css" integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- lottie animation-->
  <script>
    var animation = lottie.loadAnimation({
        container: document.getElementById('__lottie_element_2'),
        // the DOM element that will contain the animation
        renderer: 'svg',
        loop: true,
        autoplay: true,
        // path: './v7/lottie/lq3pxzws.lottie'
        path: './document/menu-animation.json'
        // the path to the animation JSON file
    });
  </script>
  <script type="text/javascript">
    (function(c,l,a,r,i,t,y){
        c[a]=c[a]function(){(c[a].q=c[a].q[]).push(arguments)};
        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
    })(window, document, "clarity", "script", "k91td8m7g5");
</script>
</head>

<body data-w-id="5bcd4d1b9f4e0e4bca6d4334">
  
  <header id="header" class="fixed-top">
  
    <div data-collapse="medium" data-animation="default" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="navbar w-nav">
          <div>
            <div data-w-id="2b31304e-cb3a-a27c-1fe2-2673f77a9774" class="_141-menu-wrapper" id='accordion-nav'>
                <div data-preserve-aspect-ratio="none" data-w-id="d319fda4-28d7-f568-2692-6c623b3cadea" data-is-ix2-target="1" class="lottie-animation" data-animation-type="lottie" data-src="./document/menu-animation.json" data-loop="0" data-direction="1" data-autoplay="0" data-renderer="svg" data-default-duration="1" data-duration="0" data-ix2-initial-state="0">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 200 1000" width="200" height="1000" preserveAspectRatio="none" style="width: 100%; height: 100%; transform: translate3d(0px, 0px, 0px); content-visibility: visible;">
                    <defs>
                      <clipPath id="__lottie_element_2">
                        <rect width="200" height="1000" x="0" y="0"></rect>
                      </clipPath>
                    </defs>
                    <g clip-path="url(#__lottie_element_2)">
                      <g transform="matrix(1,0,0,1,-0.25,-0.25)" opacity="1" style="display: block;">
                        <g opacity="1" transform="matrix(1,0,0,1,100.25,500.25)">
                          <path fill="rgb(22,22,22)" fill-opacity="1" d=" M100,500 C100,500 0,500 0,500 C0,500 0,299.5 0,-0.5 C0,-300.5 0,-500 0,-500 C0,-500 100,-500 100,-500 C100,-500 100,500 100,500z"></path>
                        </g>
                      </g>
                    </g>
                  </svg>
                </div>
                <div class="_141-nav-wrapper" >
                    <a href="./about.php" class="_141-nav-item w-inline-block" target="_blank">
                        <div class="_141-nav-text">About Us</div>
                        <div class="_141-nav-decoration"></div>
                    </a>
                    <a href="./free_rate_estimate.php" class="_141-nav-item w-inline-block" target="_blank">
                        <div class="_141-nav-text">Free Rate Estimate</div>
                        <div class="_141-nav-decoration"></div>
                    </a>
                    <a href="./contact.php" class="_141-nav-item w-inline-block" target="_blank">
                        <div class="_141-nav-text">Contact Us</div>
                        <div class="_141-nav-decoration"></div>
                    </a>
                    <a href="../login.php" class="button-3 w-button" target="_blank">Login</a>
                    <a href="../sign-up.php" class="efi-button first-button w-button" target="_blank">Create An Account</a>
                </div>
                <div data-w-id="2b31304e-cb3a-a27c-1fe2-2673f77a978b" class="_141-close-button-wrapper">
                    <div class="_141-close-button-outer"></div>
                    <div data-w-id="2b31304e-cb3a-a27c-1fe2-2673f77a978d" class="_141-close-button-inner"></div>
                    <div class="_141-close-button-x"></div>
                    <div class="_141-close-button-x _2"></div> 
                </div>
            </div>
        </div>
      <div id="w-node-_2b31304e-cb3a-a27c-1fe2-2673f77a9790-f77a9772" class="div-block-18">
        <div class="div-block-20"><img src="./assets/img/added_imgs/Belllogo-1_1Belllogo-1.png" loading="lazy" alt="" class="image-16"></div>
        <div id="inline-nav" class="nav-inline-ui">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link scrollto" href="./about.php" target="_blank">About Us</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="./free_rate_estimate.php" target="_blank">Free Rate Estimate</a></li>
            <li class="nav-item"><a class="nav-link scrollto" href="./contact.php" target="_blank">Contact Us</a></li>
            <li class="nav-item"><a class="efi-button first-button w-button" id="inline-login-top-right-btn" href="../login.php" target="_blank">Login</a></li>
            <li class="nav-item"><a class="efi-button first-button w-button" id="inline-signup-top-right-btn" href="../sign-up.php" target="_blank">Sign up</a></li>
          </ul> 
        </div>
        <div data-w-id="2b31304e-cb3a-a27c-1fe2-2673f77a9791" id="accordion_btn" class="_141-open-button-wrapper">
          <div class="_141-open-button-outer"></div>
          <div data-w-id="2b31304e-cb3a-a27c-1fe2-2673f77a9793" class="_141-open-button-inner"></div>
          <div class="_141-line-wrapper">
            <div class="_141-open-button-line"></div>
            <div class="_141-open-button-line"></div>
            <div class="_141-open-button-line"></div>
          </div>
        </div>
      </div>
    </div>
  </header>

 