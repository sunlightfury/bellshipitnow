<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
<!-- CSS Import goes here -->
<link href="assets/css/normalize.css" rel="stylesheet" type="text/css">
<link href="assets/css/components.css" rel="stylesheet" type="text/css">
<link href="assets/css/clientbellshipitnow.css" rel="stylesheet" type="text/css">
<!--<link href="assets/css/clientbellshipitnow.css" rel="stylesheet" />-->
<script src="path/to/select2.min.js"></script>
<!--JavaScript Import goes here-->
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
<script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","PT Serif:400,400italic,700,700italic","Varela:400","Roboto:100,300,regular,500,700,900","Work Sans:100,200,300,regular,500,600,700,800,900","DM Sans:regular,500,700"]  }});</script>
<script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
<!--Internal style goes here-->
<style>body,button,input,select,textarea{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale;-webkit-text-size-adjust:100%;-moz-text-size-adjust:100%;-ms-text-size-adjust:100%;text-size-adjust:100%}body{overflow-x:hidden}.demo-btn,.browser-demo{-webkit-backface-visibility:hidden;-moz-backface-visibility:hidden;-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0)}</style>
<style>
    .gumroad-loading-indicator i {
        background: url(https://uploads-ssl.webflow.com/5ef66c40c73a1f23b6a72987/5ef6bed92a2bee63b0334828_webdev-for-you-loading.svg) !important;
    }
</style>

<?php
  include('header.php');
?>
  <style>
    /*Logo carousel*/
    .carousel-products
    {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .carousel-products .products-wrap
    {
      display: block;
      width: 95%;
      margin: 0 auto;
      overflow: hidden;
    }

    .carousel-products .products-wrap ul
    {
      display: block;
      list-style: none;
      position: relative;
      margin-left: auto;
      margin-right: auto;
    }

    .carousel-products .products-wrap ul li
    {
      display: block;
      float: left;
      position: relative;
      width: 350px;
      height: 450px;
      line-height: 100%;
      text-align: center;
      overflow: hidden;
    }
    .carousel-products .products-wrap ul li img
    {
      vertical-align: middle;
    }
    .carousel-products .products-wrap ul li img:hover
    {
      -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
      filter: alpha(opacity=100);
      opacity: 1;
    }

    .products-list li .item
    {
      width: 100%;
      height: 100%;
      background-color: white;
      position: absolute;
      left: 0;
      text-align: center;
    }

    .products-list li .item .prodHover
    {
      width: 100%;
      height: 100%;
      position: absolute;
      left: 0;
      top: 0;
      z-index: -1;
      display: block;
      transition: all ease 0.5s;
      background-color: transparent;
      color: transparent;
      font-size: 22px;
      font-weight: 600;
    }

    /* Product Name */
    .products-list li .item .prodName
    {
      height: 20px;
      margin-top: 5px;
      text-align: center;
      width: 100%;
      color: grey;
      font-size: 16px;
      display: block;
      z-index: 3;
    }

    /* Product Image */
    .products-list li .item .prodImg
    {
      transform: scale(1);
      transition: transform 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94),
        -webkit-transform 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
      -webkit-transition: -webkit-transform 400ms
        cubic-bezier(0.25, 0.46, 0.45, 0.94);
      transition: -webkit-transform 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
      transition: transform 400ms cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    /* Hover */
    .products-list li .item:hover .prodImg
    {
      -webkit-transform: scale(0.95);
      -ms-transform: scale(0.95);
      transform: scale(0.95);
    }

    .products-list li .item:hover .prodHover
    {
      background-color: rgba(0, 0, 0, 0.55);
      color: white;
      z-index: 2;
    }

    /* Bullets */
    .carousel-products .prod-breadcrump
    {
      margin-top: 15px;
      display: block;
      width: 100%;
      text-align: center;
    }

    .carousel-products .prod-breadcrump .bullets
    {
      display: inline-block;
      height: 10px;
      width: 10px;
      border-radius: 10px;
      border: black thin solid;
      background-color: white;
      cursor: pointer;
      margin-right: 5px;
    }
    .carousel-products .prod-breadcrump .bullets.actif
    {
      background-color: black;
    }
    #loading 
    {
      position: fixed;
      display: block;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      text-align: center;
      opacity: 0.7;
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
  
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center mt-5">
<!--    <div class="container-fluid" data-aos="fade-up">-->
<!--      <div class="row justify-content-center">-->
<!--        <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">-->
<!--          <h1>Welcome to BellShipItNow</h1>-->
<!--          <h2>FREE Premium membership + 15% off your first shipment</h2>-->
<!--          <div>-->
<!--            <a href="../sign-up.php" class="btn-get-started scrollto mb-5 text-light">-->
<!--              Sign Up-->
<!--            </a>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="col-xl-6 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">-->
<!--          <img src="assets/img/BellshipitnowBanner.png" class="img-fluid animated">-->
<!--          <style>-->
<!--            .embed-container -->
<!--            { -->
<!--              position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; -->
<!--            } -->
<!--            .embed-container iframe, .embed-container object, .embed-container embed -->
<!--            { -->
<!--              position: absolute; top: 0; left: 0; width: 100%; height: 100%; -->
<!--            }-->
<!--          </style>-->
<!--          <div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </div>-->
      <div class="_156-section">
          <div class="hero-heading-right"></div>
          <div class="content">
              <div class="hero_heading_text">Competitive International Shipping Rates</div>
              <div class="hero_subheading_text">Deliver any US product worldwide</div>
              <div class="demo-wrapper-2">
                  <div class="browser-demo-2">
                      <div class="browser-top-2">
                          <div class="browser-dot"></div>
                          <div class="browser-dot yellow"></div>
                          <div class="browser-dot green"></div>
                      </div>
                  </div>
                  <a href="#" data-w-id="2c8f426c-105e-1462-ef35-d5abe1b76311" class="_160-button-wrapper w-inline-block w-lightbox">
                      <div class="_160-button-bg"></div>
                      <div class="_160-text-wrapper">
                          <div class="_160-first-text">Check<br>Rates</div>
                          <div style="-webkit-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 100%, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="_160-second-text">Check<br>Rates</div>
                      </div>
                      <script type="application/json" class="w-json">{
                          "items": [],
                          "group": ""
                      }</script>
                  </a>
              </div>
          </div>
      </div>
  </section>
<!-- End Hero -->


<!--Second section goes here-->
<section class="m-3 mb-5 pb-5">
    <div class="efi-hr-01">
        <div class="efi-hr-01-container">
            <div class="w-layout-grid efi-hr-01-grid">
                <div id="w-node-_4849726b-710c-fecd-cc71-f3645bb3838f-2d71bfda" class="efi-hr-01-right-content"></div>
            </div>
            <div class="efi-hr-01-logos">
                <div class="headinglabel big _2">Shop From any us store</div>
                <div class="efi-hr-01-container">
                    <div class="w-layout-grid efi-hr-01-logos-grid">
                        <div id="w-node-_4849726b-710c-fecd-cc71-f3645bb38395-2d71bfda" data-w-id="4849726b-710c-fecd-cc71-f3645bb38395" class="efi-hr-01-logo-cell"><img src="./assets/img/added_imgs/2514356.png" loading="lazy" width="70" sizes="(max-width: 479px) 72vw, (max-width: 1279px) 70px, (max-width: 1439px) 5vw, 70px" alt="amazon.com" srcset="./assets/img/added_imgs/2514356-p-500.png 500w, ./assets/img/added_imgs/2514356.png 512w" class="image-5"></div>
                        <div id="w-node-_4849726b-710c-fecd-cc71-f3645bb38397-2d71bfda" data-w-id="4849726b-710c-fecd-cc71-f3645bb38397" class="efi-hr-01-logo-cell"><img src="./assets/img/added_imgs/image-1.png" loading="lazy" width="70" alt="walmart.com" class="image-6"></div>
                        <div id="w-node-_4849726b-710c-fecd-cc71-f3645bb38399-2d71bfda" data-w-id="4849726b-710c-fecd-cc71-f3645bb38399" class="efi-hr-01-logo-cell"><img src="./assets/img/added_imgs/image-3.png" loading="lazy" width="70" alt="BestBuy.com" class="image-7"></div>
                        <div id="w-node-_4849726b-710c-fecd-cc71-f3645bb3839b-2d71bfda" data-w-id="4849726b-710c-fecd-cc71-f3645bb3839b" class="efi-hr-01-logo-cell"><img src="./assets/img/added_imgs/macy-s--600.png" loading="lazy" width="70" alt="macys.com" class="image-4"></div>
                        <div id="w-node-_4849726b-710c-fecd-cc71-f3645bb3839d-2d71bfda" data-w-id="4849726b-710c-fecd-cc71-f3645bb3839d" class="efi-hr-01-logo-cell"><img src="./assets/img/added_imgs/image-4.png" loading="lazy" width="70" alt="ebay.com" class="image-8"></div>
                        <div id="w-node-_4849726b-710c-fecd-cc71-f3645bb3839f-2d71bfda" data-w-id="4849726b-710c-fecd-cc71-f3645bb3839f" class="efi-hr-01-logo-cell"><img src="./assets/img/added_imgs/Target_Corporation_logo_vector.svg.png" loading="lazy" width="70" sizes="(max-width: 479px) 72vw, (max-width: 1279px) 70px, (max-width: 1439px) 5vw, 70px" alt="target.com" srcset="./assets/img/added_imgs/Target_Corporation_logo_vector.svg-p-500.png 500w, ./assets/img/added_imgs/Target_Corporation_logo_vector.svg-p-800.png 800w, ./assets/img/added_imgs/Target_Corporation_logo_vector.svg-p-1080.png 1080w, ./assets/img/added_imgs/Target_Corporation_logo_vector.svg.png 1200w" class="image-10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!--  <section class="m-3 mb-5 pb-5">-->
<!--    <h1 class="text-center mb-3 pb-3" style="font-weight: 600;-->
<!--    font-size: 32px;-->
<!--    color: #2c4964; margin-bottom:35px !important;">-->
<!--      Shop from popular stores across USA-->
<!--    </h1>-->
<!--    <script>-->
<!--      var rotate = {};-->
<!--      var prog = {};-->
<!--      // custom plugin-->
<!--      (function (global, $) -->
<!--      {-->
<!--        $.fn.slizz = function (options) -->
<!--        {-->
<!--          // Default options-->
<!--          var settings = $.extend(-->
<!--            {-->
<!--              width: "512",-->
<!--              speed: "4000",-->
<!--              height: "512",-->
<!--              space: "20",-->
<!--              max: "850",-->
<!--              bullets: false,-->
<!--              products: []-->
<!--            },-->
<!--            options-->
<!--          );-->
<!---->
<!--          var $length = settings.products.length;-->
<!--          var $elem = $(this); // cache the elem-->
<!--          var $id = $elem.attr("id");-->
<!--          global.rotate[$id] = false; // for the animation-->
<!--          global.prog[$id] = 0; // unique variable to track the progression-->
<!---->
<!--          // function to add each product-->
<!--          var addProducts = function (wrap)-->
<!--          {-->
<!--            for (i = 0; i < 4; i++)-->
<!--            {-->
<!--              var that = settings.products[i];-->
<!--              if(i == 0 )-->
<!--              {-->
<!--                var res = prodTemplate(that, i, 'img/rsz_amazon.png','https://amazon.com','Amazon USA'); // call the template for product-->
<!--              }-->
<!--              else if( i == 1 )-->
<!--              {-->
<!--                var res = prodTemplate(that, i, 'img/rsz_bestbuy.png','https://www.bestbuy.com/','Best Buy USA');-->
<!--              }-->
<!--              else if( i == 2 )-->
<!--              {-->
<!--                var res = prodTemplate(that, i, 'img/rsz_ebay.png','https://ebay.com','eBay USA');-->
<!--              }-->
<!--              else if( i == 3 )-->
<!--              {-->
<!--                var res = prodTemplate(that, i, 'img/rsz_1wal-mart.png','https://www.walmart.com/','Walmart USA');-->
<!--              }-->
<!--              // else if( i == 4 )-->
<!--              // {-->
<!--              //   var res = prodTemplate(that, i, 'img/rsz_kroger.png','https://www.kroger.com/','Kroger USA');-->
<!--              // }-->
<!--              $(wrap).append(res);-->
<!--            }-->
<!--          };-->
<!---->
<!--          var addBullets = function ($div)-->
<!--          {-->
<!--            for (i = 0; i < $length; i++)-->
<!--            {-->
<!--              $div.append(-->
<!--                "<div class='bullets' onclick='goToSlides(" + i + ", this)'></div>"-->
<!--              );-->
<!--            }-->
<!--          };-->
<!---->
<!--          // template for each products-->
<!--          var prodTemplate = function (product, i, img,url,title)-->
<!--          {-->
<!--            var cta = "SHOP NOW";-->
<!--            if (settings.lang == "en")-->
<!--            {-->
<!--              cta = "SHOP NOW";-->
<!--            }-->
<!--            var image =-->
<!--              "img/amazon.png" +-->
<!--              product.sku +-->
<!--              "_" +-->
<!--              product.color +-->
<!--              "_1_469x587.jpg?fit=constrain,1&wid=" +-->
<!--              settings.width +-->
<!--              "&hei=" +-->
<!--              settings.height +-->
<!--              "&fmt=jpg";-->
<!--            var image = img;-->
<!--            //   var image = "https://via.placeholder.com/310x400/"+product.color+"/FFFFFF.png?text="+ title;-->
<!---->
<!--            var txt = "";-->
<!--            txt += "\n<li data-order='" + i + "'>";-->
<!--            txt += "\n  <div class='item'>";-->
<!--            txt +=-->
<!--              "\n    <a href='" + url + "' title='" + title + "'>";-->
<!--            txt +=-->
<!--              "\n      <img class='prodImg' src='" +-->
<!--              image +-->
<!--              "' alt='" +-->
<!--              title +-->
<!--              "'>";-->
<!--            txt += "\n      <div class='prodHover'>" + cta + "</div>";-->
<!--            txt += "\n    </a>";-->
<!--            if (settings.title == true) {-->
<!--              txt += "\n    <span class='prodName'>"+title+"</span>";-->
<!--            }-->
<!--            txt += "\n  </div>";-->
<!--            txt += "\n</li>\n";-->
<!--            return txt;-->
<!--          };-->
<!---->
<!--          // modify the css for this carousel-->
<!--          var cssThis = function ()-->
<!--          {-->
<!--            $elem.css({ "max-width": settings.max + "px" });-->
<!--            var h = settings.height + "px";-->
<!---->
<!--            if (settings.title == true)-->
<!--            {-->
<!--              var y = Number(settings.height) + 25 + "px"; // add the title span at the bottom-->
<!--            }-->
<!--            else-->
<!--            {-->
<!--              var y = Number(settings.height) + "px"; // set the height-->
<!--            }-->
<!--            var z = Number(settings.width) + Number(settings.space) + "px";-->
<!--            var w = settings.width + "px";-->
<!--            $elem.find(".products-wrap ul li").css({ width: '250px', height:'250px' });-->
<!--            $elem.find(".products-wrap ul li .item").css({ width: w });-->
<!--            $elem.find(".products-list li .item .prodHover").css({ "line-height": h }); // line-height for the hover div-->
<!--          };-->
<!---->
<!--          // build the entire html-->
<!--          var buildTemplate = function ()-->
<!--          {-->
<!--            $elem.append(-->
<!--              "<div class='products-wrap'><ul class='products-list'></ul></div>"-->
<!--            );-->
<!--            // settings-->
<!--            if (settings.bullets == true)-->
<!--            {-->
<!--              $elem.append("<div class='prod-breadcrump'></div>");-->
<!--              var $div = $elem.find(".prod-breadcrump");-->
<!--              addBullets($div);-->
<!--              $elem.find(".prod-breadcrump .bullets").eq(prog[$id]).addClass("actif");-->
<!--            }-->
<!--            var $wrap = $elem.find(".products-list");-->
<!--            addProducts($wrap);-->
<!--          };-->
<!---->
<!--          var init = function ()-->
<!--          {-->
<!--            if ($length > 0)-->
<!--            {-->
<!--              buildTemplate(); // build the html elements-->
<!--              carousel($elem, $id, settings); // start the carousel with the selected id-->
<!--              cssThis();-->
<!--            }-->
<!--          };-->
<!--          init(); // initialize the function-->
<!--        }; // @ end-->
<!--      })(window, jQuery);-->
<!---->
<!--      // animate the carousel-->
<!--      function carousel(wrap, $id, settings)-->
<!--      {-->
<!--        var $productscarousel = wrap.find(".products-list");-->
<!--        var products = $productscarousel.children().length;-->
<!--        var nb = products - 1;-->
<!--        var productswidth =-->
<!--          products * (Number(settings.width) + Number(settings.space)); // calculate the width of the carousel-->
<!--        $productscarousel.css("width", productswidth);-->
<!--        rotate[$id] = true;-->
<!--        var productspeed = 1;-->
<!--        var seeproduct = setInterval(rotateprods, productspeed);-->
<!---->
<!--        var m = "-" + (Number(settings.width) + Number(settings.space)) + "px"; // margin-left in pixels (width + space between items)-->
<!---->
<!--        // animation to rotate the products-->
<!--        function rotateprods()-->
<!--        {-->
<!--          if (rotate[$id] != false)-->
<!--          {-->
<!--            var $first = wrap.find(".products-list li:first");-->
<!--            var speed = Number(settings.speed);-->
<!--            $first.animate({ "margin-left": m }, speed, "linear", function ()-->
<!--            {-->
<!--              // margin-left must be the same as width-->
<!--              $first.remove().css({ "margin-left": "0px" });-->
<!--              wrap.find(".products-list li:last").after($first);-->
<!---->
<!--              // move the bullets-->
<!--              if (settings.bullets == true)-->
<!--              {-->
<!--                wrap.find(".prod-breadcrump .bullets").removeClass("actif");-->
<!--                if (prog[$id] == nb)-->
<!--                {-->
<!--                  prog[$id] = 0;-->
<!--                }-->
<!--                else-->
<!--                {-->
<!--                  prog[$id] += 1;-->
<!--                }-->
<!--                wrap-->
<!--                  .find(".prod-breadcrump .bullets")-->
<!--                  .eq(prog[$id])-->
<!--                  .addClass("actif");-->
<!--              }-->
<!--            });-->
<!--          }-->
<!--        }-->
<!---->
<!--        // stop the carousel on mouse over-->
<!--        wrap.find(".products-wrap").on({-->
<!--          mouseenter: function ()-->
<!--          {-->
<!--            rotate[$id] = false; // turn off rotation when hovering-->
<!--            wrap.find(".products-list li").clearQueue().stop().dequeue();-->
<!--          },-->
<!---->
<!--          mouseleave: function ()-->
<!--          {-->
<!--            var $first = wrap.find(".products-list li:first");-->
<!--            var ml = $first.css("margin-left");-->
<!--            ml = parseInt(ml, 10); // convert to number-->
<!--            var speed = Number(settings.speed);-->
<!--            var max = Number(settings.width) + Number(settings.space);-->
<!--            var whatleft = 1 - (ml * -1) / max;-->
<!--            var time = whatleft * speed;-->
<!--            $first.animate({ "margin-left": m }, time, "linear", function () {-->
<!--              // Animation complete-->
<!--              $first.remove().css({ "margin-left": "0px" });-->
<!--              wrap.find(".products-list li:last").after($first);-->
<!---->
<!--              // move the bullets-->
<!--              if (settings.bullets == true)-->
<!--              {-->
<!--                wrap.find(".prod-breadcrump .bullets").removeClass("actif");-->
<!--                if (prog[$id] == nb)-->
<!--                {-->
<!--                  prog[$id] = 0;-->
<!--                }-->
<!--                else-->
<!--                {-->
<!--                  prog[$id] += 1;-->
<!--                }-->
<!--                wrap-->
<!--                  .find(".prod-breadcrump .bullets")-->
<!--                  .eq(prog[$id])-->
<!--                  .addClass("actif");-->
<!--              }-->
<!---->
<!--              rotate[$id] = true; // restart the carousel-->
<!--            });-->
<!--          }-->
<!--        });-->
<!--      } // @end-->
<!---->
<!--      function goToSlides(i, elem)-->
<!--      {-->
<!--        var wrap = $(elem).parents(".carousel-products"); // find the parent div-->
<!--        var $productscarousel = wrap.find(".products-list");-->
<!--        var products = $productscarousel.children().length; // number of products-->
<!--        var $id = wrap.attr("id");-->
<!--        var current = prog[$id]; // get the current-->
<!---->
<!--        // if you click elsewhere than the current progression-->
<!--        if (i != current)-->
<!--        {-->
<!--          // stop the carousel-->
<!--          rotate[$id] = false; // turn off rotation when hovering-->
<!--          wrap-->
<!--            .find(".products-list li")-->
<!--            .clearQueue()-->
<!--            .stop()-->
<!--            .css({ "margin-left": "0px" });-->
<!--          var $first = wrap.find(".products-list li:first");-->
<!--          $first.remove().css({ "margin-left": "0px" });-->
<!--          wrap.find(".products-list li:last").after($first);-->
<!--          wrap.find(".prod-breadcrump .bullets").removeClass("actif"); // remove the actif bullets-->
<!---->
<!--          var interval = function (func, wait, times)-->
<!--          {-->
<!--            var interv = (function (w, t)-->
<!--            {-->
<!--              return function () {-->
<!--                if (typeof t === "undefined" || t-- > 0)-->
<!--                {-->
<!--                  setTimeout(interv, w);-->
<!--                  try-->
<!--                  {-->
<!--                    func.call(null);-->
<!--                  }-->
<!--                  catch (e)-->
<!--                  {-->
<!--                    t = 0;-->
<!--                    throw e.toString();-->
<!--                  }-->
<!--                }-->
<!--              };-->
<!--            })(wait, times);-->
<!---->
<!--            setTimeout(interv, wait);-->
<!--          };-->
<!---->
<!--          // check how many slides we have to scroll until the target-->
<!--          if (i > current)-->
<!--          {-->
<!--            var avance = i - current - 1; // since we already move the first slide-->
<!--          }-->
<!--          else-->
<!--          {-->
<!--            var avance = products - current + i;-->
<!--          }-->
<!---->
<!--          interval(-->
<!--            function ()-->
<!--            {-->
<!--              // Code block goes here-->
<!--              moveSlides(wrap);-->
<!--            },-->
<!--            50,-->
<!--            avance-->
<!--          );-->
<!---->
<!--          prog[$id] = i; // set the actif bullet-->
<!--          wrap.find(".prod-breadcrump .bullets").eq(prog[$id]).addClass("actif"); // set up the right bullet-->
<!---->
<!--          // restart the carousel-->
<!--          rotate[$id] = true; // restart the carousel-->
<!--        }-->
<!--      }-->
<!---->
<!--      // function to move a number of slides-->
<!--      function moveSlides(wrap)-->
<!--      {-->
<!--        wrap-->
<!--          .find(".products-list li")-->
<!--          .clearQueue()-->
<!--          .stop()-->
<!--          .css({ "margin-left": "0px" });-->
<!--        var $first = wrap.find(".products-list li:first");-->
<!--        $first.remove().css({ "margin-left": "0px" });-->
<!--        wrap.find(".products-list li:last").after($first);-->
<!--      }-->
<!--    </script>-->
<!--    <div id="slide" class="carousel-products"></div>-->
<!---->
<!--    <div class="row">-->
<!--      --><?php //include('shop-assistant/index.php'); ?>
<!--      <section class="h-100 h-custom shop-assistant-checkout d-none">-->
<!--        <div class="container py-5 h-100">-->
<!--          <div class="row d-flex justify-content-center align-items-center h-100">-->
<!--            <div class="col">-->
<!--              <div class="card">-->
<!--                <div class="card-body p-4">-->
<!--                  <div class="row">-->
<!--                    <div class="col-lg-12 item_list" id="item_list">-->
<!--                      <h1 class="text-center mb-3 pb-3" style="font-weight: 600;-->
<!--                        font-size: 32px; color: #2c4964; margin-bottom:35px !important;">-->
<!--                          Shop Assistant Checkout-->
<!--                      </h1>-->
<!--                      <hr>-->
<!--                      <div class="d-flex justify-content-between align-items-center mb-4">-->
<!--                        <div>-->
<!--                          <p class="mb-1">Shopping cart</p>-->
<!--                          <p class="mb-0">You have <span id="total_items_in_cart">4</span> items in your cart</p>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                        </div>-->
<!--                        <div>-->
<!--                          QTY-->
<!--                        </div>-->
<!--                        <div>-->
<!--                          Price-->
<!--                        </div>-->
<!--                      </div>-->
<!--                    </div>-->
<!--                    <div class="col-md-4 mx-auto">-->
<!--                      <button type="button" class="btn btn-success btn-block btn-lg text-center" id="send_shopping_list">-->
<!--                        Submit-->
<!--                      </button>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </div>-->
<!--              </div>-->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </section>-->
<!--      <script>-->
<!--        // initialize-->
<!--        $(document).ready(function() {-->
<!--          $("#slide").slizz({-->
<!--            width: '300',-->
<!--            height: '400',-->
<!--            space: '10',-->
<!--            max: '1050',-->
<!--            title: true,-->
<!--            bullets: false,-->
<!--            lang: 'en',-->
<!--            products: [{-->
<!--                sku: '341782',-->
<!--                color: '086',-->
<!--                link: '#',-->
<!--                seo: 'Buy Me'-->
<!--              },-->
<!--              {-->
<!--                sku: '346578',-->
<!--                color: '653',-->
<!--                link: '#',-->
<!--                seo: 'Buy Me More'-->
<!--              },-->
<!--              {-->
<!--                sku: '350953',-->
<!--                color: '182',-->
<!--                link: '#',-->
<!--                seo: 'Buy Me'-->
<!--              },-->
<!--              {-->
<!--                sku: '353794',-->
<!--                color: '182',-->
<!--                link: '#',-->
<!--                seo: 'Buy Me More'-->
<!--              },-->
<!--              {-->
<!--                sku: '354002',-->
<!--                color: '703',-->
<!--                link: '#',-->
<!--                seo: 'Buy Me'-->
<!--              },-->
<!--              {-->
<!--                sku: '356124',-->
<!--                color: '703',-->
<!--                link: '#',-->
<!--                seo: 'Buy Me More'-->
<!--              },-->
<!--              {-->
<!--                sku: '356125',-->
<!--                color: '209',-->
<!--                link: '#',-->
<!--                seo: 'Buy Me'-->
<!--              },-->
<!--              {-->
<!--                sku: '356126',-->
<!--                color: '703',-->
<!--                link: '#',-->
<!--                seo: 'Buy Me More'-->
<!--              },-->
<!--              {-->
<!--                sku: '356986',-->
<!--                color: '779',-->
<!--                link: '#',-->
<!--                seo: 'Buy Me More'-->
<!--              },-->
<!--            ]-->
<!--            //	products:  products-->
<!--          });-->
<!--        });-->
<!--      </script>-->
<!--    </div>-->
<!--  </section>-->

<!-- ======= Third (About) Section ======= -->
<main id="main">
<!--    <section class="section-5">-->
    <section id="about" class="about">
        <div id="3partners" class="container-4 flex-vertical">
            <div class="flex-horizontal flip-svp">
                <div class="col small">
                    <h2 class="header-quaternary grey-text uppercase"><strong class="bold-text-3 _1">Easy Package Forwarding at 0% sales tax</strong></h2>
                    <div class="spacer-15"></div>
                    <div class="header-secondary centered-svp"><strong class="bold-text-3">Serving over 200,000 people in 220 countries</strong></div>
                    <div class="spacer-30"></div>
                    <p class="paragraph-large centered-svp">Our automated warehouse allows our customers to forward their packages to their selected countries at no additional servicing fees.</p>
                    <div class="spacer-60 firstbutton">
                        <a href="#" class="efi-button first-button w-button">Get Started!</a>
                    </div>
                </div>
                <div class="spacer-60 _60-width"></div>
                <div class="flex-horizontal">
                    <div class="marquee">
                        <div class="marquee-vertical-css w-embed">
                            <style>
                                .track-vertical {
                                    position: absolute;
                                    white-space: nowrap;
                                    will-change: transform;
                                    animation: marquee-vertical 20s linear infinite;
                                }
                                @keyframes marquee-vertical {
                                    from { transform: translateY(0); }
                                    to { transform: translateY(-50%); }
                                }
                                .track-vertical-alt{
                                    position: absolute;
                                    white-space: nowrap;
                                    will-change: transform;
                                    animation: marquee-vertical-alt 20s linear infinite;
                                }
                                @keyframes marquee-vertical-alt {
                                    from { transform: translateY(-50%); }
                                    to { transform: translateY(0%); }
                                }
                            </style>
                        </div>
                        <div class="marquee-cover"></div>
                        <div class="track-vertical-alt">
                            <div class="flex-vertical marquee-fix">
                                <div class="icon-container"><img src="./assets/img/added_imgs/au.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/de.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/ca.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/au.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/de.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/ca.svg" alt="" class="icon-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="marquee">
                        <div class="marquee-cover"></div>
                        <div class="marquee-cover"></div>
                        <div class="track-vertical">
                            <div class="flex-vertical marquee-fix">
                                <div class="icon-container"><img src="./assets/img/added_imgs/af.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/jp.svg" alt="Japan" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/um.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/af.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/jp.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/jp.svg" alt="" class="icon-2"></div>
                            </div>
                        </div>
                    </div>
                    <div class="marquee">
                        <div class="marquee-cover"></div>
                        <div class="track-vertical-alt">
                            <div class="flex-vertical marquee-fix">
                                <div class="icon-container"><img src="./assets/img/added_imgs/cn.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/vn.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/zw.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/cn.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/vn.svg" alt="" class="icon-2"></div>
                                <div class="spacer-30 _15-xsvp"></div>
                                <div class="icon-container"><img src="./assets/img/added_imgs/zw.svg" alt="" class="icon-2"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!--    <section id="about" class="about">-->
<!--      <div class="container">-->
<!--        <div class="row">-->
<!--          <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">-->
<!--            <video width="500" height="500" controls class="hero_video">-->
<!--              <source src="assets/video/BellShipItNow_hero_2.mp4" type="video/mp4">-->
<!--            </video>-->
<!--          </div>-->
<!--          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">-->
<!--            <h3>Here's how our BellShipItNow works:</h3>-->
<!--            <p class="fst-italic">-->
<!--              BellShipItNow, you can now shop from famous stores and online websites in the USA, including Amazon USA, and have your orders delivered right to your doorstep.-->
<!--            </p>-->
<!--            <ul>-->
<!--              <li><i class="bi bi-check-circle"></i> Shop from Your Favorite Stores: Browse the vast selection of products offered by various stores and online websites in the USA, including Amazon USA. Choose the items you wish to purchase and add them to your cart.</li>-->
<!--              <li><i class="bi bi-check-circle"></i> Ship to Our USA Warehouse: During the checkout process, use our USA warehouse address-->
<!--              <i class="text-success">228 Park Ave A # 698760</i><br>-->
<!--              <i class="text-success">New York, New York 10003</i>-->
<!--              <i class="text-success">United States</i>-->
<!--              as the shipping destination. Once your orders arrive at our warehouse, we will handle the rest of the shipping process.</li>-->
<!--            </ul>-->
<!--          </div>-->
<!--        </div>-->
<!--        <div class="row">-->
<!--          <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right">-->
<!--            <ul>-->
<!--              <li><i class="bi bi-check-circle"></i> Consolidation and Package Optimization: If you have multiple orders from different stores, our team will consolidate them into a single shipment whenever possible. BellShipitnow will help you save on shipping costs and make the process more efficient.</li>-->
<!--              <li><i class="bi bi-check-circle"></i> Flexible Shipping Options: We offer a range of shipping options to suit your needs. Whether you want your package delivered quickly or a more budget-friendly choice, we have you covered.</li>-->
<!--              <li><i class="bi bi-check-circle"></i> Customs and Duties Assistance: Our team will assist you in navigating the customs and duties process to ensure a smooth delivery to your country. We aim to make your international shopping experience as seamless as possible.</li>-->
<!--              <li><i class="bi bi-check-circle"></i> Package Tracking: Stay updated on the status of your order with our real-time package tracking system. You can easily monitor your shipment's journey from the USA to your doorstep.</li>-->
<!--              <li><i class="bi bi-check-circle"></i>-->
<!--                Reliable Customer Support: Our friendly customer support team is ready to help if you have any questions or need assistance. Feel free to contact us through various communication channels; we'll gladly assist you.</li>-->
<!--            </ul>-->
<!--          </div>-->
<!--        </div>-->
<!--    </section>-->
    <!-- End About Section -->



<!-- Fourth Section -->
<section id="cost-estimator-section" class="cost-estimator-section">
    <div class="efi-hr-04">
        <div class="efi-hr-04-container">
            <div class="w-layout-grid efi-hr-04-grid">
                <div id="w-node-_2863f890-280e-cd92-d1d0-11ffd2548c2c-2d71bfda" class="efi-hr-04-left-content"><img src="images/warehouse-worker-checking-stock-with-tablet-pc-2023-11-27-05-12-39-utc-min.jpg" loading="lazy" width="592" sizes="(max-width: 767px) 90vw, 591.9921875px" alt="" srcset="images/warehouse-worker-checking-stock-with-tablet-pc-2023-11-27-05-12-39-utc-min.jpg 500w, images/warehouse-worker-checking-stock-with-tablet-pc-2023-11-27-05-12-39-utc-min.jpg 800w, images/warehouse-worker-checking-stock-with-tablet-pc-2023-11-27-05-12-39-utc-min.jpg 1080w, images/warehouse-worker-checking-stock-with-tablet-pc-2023-11-27-05-12-39-utc-min.jpg 1600w, images/warehouse-worker-checking-stock-with-tablet-pc-2023-11-27-05-12-39-utc-min.jpg 2000w, images/warehouse-worker-checking-stock-with-tablet-pc-2023-11-27-05-12-39-utc-min.jpg 2600w, images/warehouse-worker-checking-stock-with-tablet-pc-2023-11-27-05-12-39-utc-min.jpg 3200w, images/warehouse-worker-checking-stock-with-tablet-pc-2023-11-27-05-12-39-utc-min.jpg 8256w" class="image-11"></div>
                <div id="w-node-_2863f890-280e-cd92-d1d0-11ffd2548c2e-2d71bfda" class="efi-hr-04-right-content">
                    <div class="efi-hr-04-title-wrapper">
                        <div class="headinglabel big _1">Free storage and Package Consolidation</div>
                        <h1 class="heading-7">180 Day storage</h1>
                        <p class="efi-big-paragraph _4">Customers can store each package that arrives at their suites for <strong>FREE</strong> at a period of 180 days from the date of delivery of each package. This helps our customers by enabling them to order multiple products and to combine all of them in one large shipment to save on shipping cost.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--    <section id="cost-estimator-section" class="cost-estimator-section">-->
<!--      <div id="cost-estimator" class="section mt-5">-->
<!--        <div class="section-center">-->
<!--          <div class="container">-->
<!--            <div class="row mx-auto">-->
<!--              <h3 style="font-weight: 600;font-size: 32px;color: #2c4964;">-->
<!--                Check the cost now for free-->
<!--              </h3>-->
<!--              <div class="booking-form">-->
<!--                <form class="shipping_form" id="ReceiptKind" action="--><?php //echo '../shipping_cost_calculator.php'; ?><!--" method="POST" accept-charset="utf-8">-->
<!--                -->
<!--                  <div class="col-md-2">-->
<!--                    <div class="form-group">-->
<!--                      <select class="form-control add-listing_form input-field" id="ReceiptKind" --><?php //if(!empty($_SESSION['type'])) echo $_SESSION['type']; ?><!-- name="type" required="required">-->
<!--                        <option value="Parcel">Parcel</option>-->
<!--                          <option value="Document">Document</option>-->
<!--                          <option value="Cosmetic">Cosmetic</option>-->
<!--                          <option value="Food">Food</option>-->
<!--                          <option value="Home Goods">Home Goods</option>-->
<!--                      </select>-->
<!--                      <span class="select-arrow"></span>-->
<!--                      <span class="form-label">Type</span>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                      <select class="form-control input-field"  name="r_dest" id="ReceiptCountryId" placeholder="Select Country" list="browsers" value="--><?php //if(!empty($_SESSION['dest'])) echo $_SESSION['dest'];?><!--" autocomplete="off" required="required">-->
<!--                        <option value="0">Search your country</option>-->
<!--                        --><?php
//                          foreach($countryList as $countrykey => $country)
//                          {
//                        ?>
<!--                            <option value="--><?php //= $country; ?><!--">--><?php //= $country; ?><!--</option>-->
<!--                        --><?php
//                          }
//                        ?>
<!--                      </select>-->
<!--                      <span class="select-arrow"></span>-->
<!--                      <span class="form-label">Destination Country</span>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="col-md-3">-->
<!--                    <div class="form-group">-->
<!--                      <input class="form-control input-field"  name="zipcode" id="zipcode" placeholder="Zip/post code" value="--><?php //if(!empty($_SESSION['zipcode'])) echo $_SESSION['zipcode'];?><!--" required="required">-->
<!--                      <span class="form-label">Zipcode</span>-->
<!--                    </div>-->
<!--                  </div>-->
<!---->
<!--                  <div class="col-md-3">-->
<!--                    <div class="form-group">-->
<!--                      <input class="form-control" type="number" placeholder="Enter in lbs" onblur="if(this.value == ''){this.value='0'}" onKeyUp="suma();"  id="sum2" name="weight" value="--><?php //if(!empty($_SESSION['weight'])) echo $_SESSION['weight'];?><!--" required>-->
<!--                      <span class="select-arrow"></span>-->
<!--                      <span class="form-label">Weight</span>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                      <input class="form-control" type="number" onKeyUp="suma();" id="l1" name="length" step="any" value="--><?php //if(!empty($_SESSION['length'])) echo $_SESSION['length'];?><!--" required>-->
<!--                      <span class="form-label">Length</span>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                      <input class="form-control" type="number" onKeyUp="suma();" id="w2" name="width" step="any" value="--><?php //if(!empty($_SESSION['width'])) echo $_SESSION['width'];?><!--" required>-->
<!--                      <span class="form-label">Width</span>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                    <div class="col-md-4">-->
<!--                    <div class="form-group">-->
<!--                      <input class="form-control" type="number" onKeyUp="suma();" id="h3" name="height" step="any" value="--><?php //if(!empty($_SESSION['height'])) echo $_SESSION['height'];?><!--" required>-->
<!--                      <input type="text" class="d-none"  id="total_result" name="total_res">-->
<!--                      <span class="form-label">Height</span>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                  <div class="col-md-4">-->
<!--                    <div class="form-btn">-->
<!--                      <button class="submit-btn">Find the best price</button>-->
<!--                    </div>-->
<!--                  </div>-->
<!--                </form>-->
<!--              </div>-->
<!--              <div class="row rate-disclaimer --><?php //= isset($_SESSION['rates']) && !empty($_SESSION['rates'])?'':'d-none';?><!--">-->
<!--                <h4 class="text-success"><i>Please note:</i>-->
<!--                  Shipping rates above were sampled from the following countries: Poland, Malaysia, New Zealand, Canada, Colombia, South Africa, Qarta & the Bahamas.-->
<!--                  <br>Prices are subject to change at any time without notice. These rates are valid until 22 December. The package example is 24x12x6". Prices are shown in USD.-->
<!--                </h4>-->
<!--              </div>-->
<!--              <div id="shipping_rate" class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12">-->
<!--                <div class="p-3 box2 --><?php //if(empty($_SESSION['rates'])){ echo 'd-none'; } ?><!-- boxes shadow-md mb-2 bg-light rounded">-->
<!--                  <div class="main-info d-flex justify-content-between mb-4 p-2">-->
<!--                    <h3 class="padd-set">Shipping To: <span>--><?php //echo $_SESSION['dest'];?><!--</span></h3>-->
<!--                    <h3>Billable Weight: <span>--><?php //echo $_SESSION['weight'];?><!-- Lbs</span></h3>-->
<!--                  </div>-->
<!---->
<!--                  --><?php
//                    /*<div class="main-info d-flex mb-4">
/*                        <h2>Billable Weight: <span><?php echo $_SESSION['weight'];?> Lbs</span></h2>*/
//                    </div>
//                  */
//                  ?>
<!---->
<!--                  --><?php //foreach($_SESSION['rates'] as $Key => $value)
//                  {
//                    echo '<h3>'.$value->amount.' ( '.$value->duration_terms.' )<img src="'.$value->provider_image_75.'" alt="bellshipitnow_shpping_partner" style="float:right"></h3>';
//                    echo '<dl>
//                        <dt> Shipping cost :</dt>
//                        <dd>$'.$value->amount.'</dd>
//                      </dl>';
//                    }
//                  ?>
<!--                </div>-->
<!--						  </div>-->
<!--              <div class="row align-items-center">-->
<!--                <div class="col-lg-12 my-4 order-2 order-lg-1">-->
<!--                  --><?php //if(!$ratesrow):?>
<!--                    <tr>-->
<!--                      <td colspan="4">-->
<!--                        --><?php //echo "<i align='center' class='display-3 text-warning d-block'><img src='img/network.png' width='350' alt='Shop from USA stores' /></i>
//                        ",false;?>
<!--                      </td>-->
<!--                    </tr>-->
<!--                    --><?php //else:?>
<!---->
<!--                      <table class="table shopping-cart-wrap">-->
<!--                        <thead class="text-muted">-->
<!--                          <tr>-->
<!--                            <th scope="col"></th>-->
<!--                            <th scope="col" width="250">Delivery Time</th>-->
<!--                            <th scope="col" width="200">Services</th>-->
<!--                            <th scope="col" width="200" class="text-center">Shipping Cost-->
<!--                              <img src="uploads/tooltip.svg" data-toggle="tooltip" data-html="true" data-placement="top" title="Please note that the final price may vary depending on: - Parcel size - Delivery/pickup loctions - Taxes &amp; duties  S"></th>-->
<!--                            </tr>-->
<!--                          </thead>-->
<!--                          <tbody>-->
<!--                            --><?php //foreach ($ratesrow  as $row):?>
<!--                              <tr>-->
<!--                                <td class="align-middle">-->
<!--                                  <div class="price-wrap">-->
<!--                                    <img src="thumbmaker.php?src=--><?php //echo UPLOADURL;?><!----><?php //echo ($row->brand) ? $row->brand : "no_photo.png";?><!--&amp;w=120&amp;h=60&amp;s=1&amp;a=t1" alt="" title="--><?php //echo $row->n_courier;?><!--">	 --><?php //echo $row->services;?>
<!--                                  </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                  <div class="price-wrap">-->
<!--                                    <span>--><?php //echo $row->deli_time;?><!--</span>-->
<!--                                  </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                  <div class="price-wrap">-->
<!--                                    <dl class="param param-inline small">-->
<!--                                      --><?php //if($row->free_ship == 'Free Pickup'){ ?><!--<span><img src="uploads/free.svg" alt="bellshipitnow-unbox the possibilities" class="img-fluid"> --><?php //echo $row->free_ship;?><!--</span>--><?php //}else{ ?><!-- --><?php //} ?><!--</br>-->
<!--                                      --><?php //if($row->drop_off == 'Drop-off'){ ?><!--<span><img src="uploads/drop_off.svg" alt="think global expert for import and export" class="img-fluid"> --><?php //echo $row->drop_off;?><!--</span>--><?php //}else{ ?><!-- --><?php //} ?>
<!--                                    </dl>-->
<!--                                  </div>-->
<!--                                </td>-->
<!--                                <td class="align-middle">-->
<!--                                  <div class="price-wrap">-->
<!--                                    <b>--><?php //echo $core->currency;?><!-- <span>--><?php //echo $row->rate;?><!--</span></b>-->
<!--                                    <a href="booking.php?do=booking&amp;action=ship&amp;id=--><?php //echo $row->id;?><!--&amp;length=--><?php //if(isset($_POST['length'])){echo $_POST['length'];}else{ echo 0; }?><!--&amp;width=--><?php //if(isset($_POST['width'])){echo $_POST['width'];}else{ echo 0;}?><!--&amp;height=--><?php //if(isset($_POST['height'])){echo $_POST['height'];}else{echo 0;}?><!--&amp;weight=--><?php //if(isset($_POST['weight'])){echo $_POST['weight'];}else{echo $_POST['r_weight'];}?><!--&amp;type=--><?php //if(isset($_POST['type'])){echo $_POST['type'];}else{ echo " "; }?><!--&amp;scountry=--><?php //if(isset($_POST['scountry'])){echo $_POST['scountry'];}else{ echo " "; }?><!--"><button class="btn btn-sm btn-rounded btn-outline-green px-md-3 m-3">Ship</button></a>-->
<!--                                  </div>-->
<!--                                </td>-->
<!--                              </tr>-->
<!--                            --><?php //endforeach;?>
<!--                            --><?php //unset($row);?>
<!--                          --><?php //endif;?>
<!--                        </tbody>-->
<!--                      </table>-->
<!--                    </div> -->
<!--                  </div> -->
<!--            </div>-->
<!--          </div>-->
<!--        </div>-->
<!--      </div>-->
<!--    </section>-->
<!-- End Fourth Section -->






    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">
        <div class="row counters">
          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
            <p>Happy Customers</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
            <p>Orders Shipped</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hours Of Support</p>
          </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
            <p>Hard Workers</p>
          </div>
        </div>
      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Benefits of using BellShipItNow:</h2>
          <p>Join thousands of satisfied customers who have already experienced the joy of shopping from USA stores and websites using BellShipItNow. Start shopping today and let us take care of the shipping process for you! Happy shopping!</p>
        </div>

        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174"></path>
                </svg>
                <i class="bx bxl-dribbble"></i>
              </div>
              <h4><a href="#">Access to a Wide Range of Products:</a></h4>
              <p>With our service, you can explore an extensive array of products available in the USA market. Shop for the latest gadgets, trendy fashion, home goods, and much more!</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-orange ">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,582.0697525312426C382.5290701553225,586.8405444964366,449.9789794690241,525.3245884688669,502.5850820975895,461.55621195738473C556.606425686781,396.0723002908107,615.8543463187945,314.28637112970534,586.6730223649479,234.56875336149918C558.9533121215079,158.8439757836574,454.9685369536778,164.00468322053177,381.49747125262974,130.76875717737553C312.15926192815925,99.40240125094834,248.97055460311594,18.661163978235184,179.8680185752513,50.54337015887873C110.5421016452524,82.52863877960104,119.82277516462835,180.83849132639028,109.12597500060166,256.43424936330496C100.08760227029461,320.3096726198365,92.17705696193138,384.0621239912766,124.79988738764834,439.7174275375508C164.83382741302287,508.01625554203684,220.96474134820875,577.5009287672846,300,582.0697525312426"></path>
                </svg>
                <i class="bx bx-file"></i>
              </div>
              <h4><a href="#">Cost-Effective Shipping Solutions:</a></h4>
              <p>We understand the importance of cost-effective shipping options, and we strive to offer competitive rates for international shipping.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-pink">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,541.5067337569781C382.14930387511276,545.0595476570109,479.8736841581634,548.3450877840088,526.4010558755058,480.5488172755941C571.5218469581645,414.80211281144784,517.5187510058486,332.0715597781072,496.52539010469104,255.14436215662573C477.37192572678356,184.95920475031193,473.57363656557914,105.61284051026155,413.0603344069578,65.22779650032875C343.27470386102294,18.654635553484475,251.2091493199835,5.337323636656869,175.0934190732945,40.62881213300186C97.87086631185822,76.43348514350839,51.98124368387456,156.15599469081315,36.44837278890362,239.84606092416172C21.716077023791087,319.22268207091537,43.775223500013084,401.1760424656574,96.891909868211,461.97329694683043C147.22146801428983,519.5804099606455,223.5754009179313,538.201503339737,300,541.5067337569781"></path>
                </svg>
                <i class="bx bx-tachometer"></i>
              </div>
              <h4><a href="#">Convenience and Ease:</a></h4>
              <p>Enjoy a hassle-free shopping experience with the convenience of shipping directly to your country.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box iconbox-yellow">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,503.46388370962813C374.79870501325706,506.71871716319447,464.8034551963731,527.1746412648533,510.4981551193396,467.86667711651364C555.9287308511215,408.9015244558933,512.6030010748507,327.5744911775523,490.211057578863,256.5855673507754C471.097692560561,195.9906835881958,447.69079081568157,138.11976852964426,395.19560036434837,102.3242989838813C329.3053358748298,57.3949838291264,248.02791733380457,8.279543830951368,175.87071277845988,42.242879143198664C103.41431057327972,76.34704239035025,93.79494320519305,170.9812938413882,81.28167332365135,250.07896920659033C70.17666984294237,320.27484674793965,64.84698225790005,396.69656628748305,111.28512138212992,450.4950937839243C156.20124167950087,502.5303643271138,231.32542653798444,500.4755392045468,300,503.46388370962813"></path>
                </svg>
                <i class="bx bx-layer"></i>
              </div>
              <h4><a href="#">Secure Packaging:</a></h4>
              <p>We take extra care in packaging your items to ensure they arrive at your doorstep in pristine condition.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box iconbox-red">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,532.3542879108572C369.38199826031484,532.3153073249985,429.10787420159085,491.63046689027357,474.5244479745417,439.17860296908856C522.8885846962883,383.3225815378663,569.1668002868075,314.3205725914397,550.7432151929288,242.7694973846089C532.6665558377875,172.5657663291529,456.2379748765914,142.6223662098291,390.3689995646985,112.34683881706744C326.66090330228417,83.06452184765237,258.84405631176094,53.51806209861945,193.32584062364296,78.48882559362697C121.61183558270385,105.82097193414197,62.805066853699245,167.19869350419734,48.57481801355237,242.6138429142374C34.843463184063346,315.3850353017275,76.69343916112496,383.4422959591041,125.22947124332185,439.3748458443577C170.7312796277747,491.8107796887764,230.57421082200815,532.3932930995766,300,532.3542879108572"></path>
                </svg>
                <i class="bx bx-slideshow"></i>
              </div>
              <h4><a href="#">Package Tracking:</a></h4>
              <p>We provide real-time tracking for all your shipments, giving you peace of mind as you watch your orders move from the USA to your doorstep.</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box iconbox-teal">
              <div class="icon">
                <svg width="100" height="100" viewBox="0 0 600 600" xmlns="http://www.w3.org/2000/svg">
                  <path stroke="none" stroke-width="0" fill="#f5f5f5" d="M300,566.797414625762C385.7384707136149,576.1784315230908,478.7894351017131,552.8928747891023,531.9192734346935,484.94944893311C584.6109503024035,417.5663521118492,582.489472248146,322.67544863468447,553.9536738515405,242.03673114598146C529.1557734026468,171.96086150256528,465.24506316201064,127.66468636344209,395.9583748389544,100.7403814666027C334.2173773831606,76.7482773500951,269.4350130405921,84.62216499799875,207.1952322260088,107.2889140133804C132.92018162631612,134.33871894543012,41.79353780512637,160.00259165414826,22.644507872594943,236.69541883565114C3.319112789854554,314.0945973066697,72.72355303640163,379.243833228382,124.04198916343866,440.3218312028393C172.9286146004772,498.5055451809895,224.45579914871206,558.5317968840102,300,566.797414625762"></path>
                </svg>
                <i class="bx bx-arch"></i>
              </div>
              <h4><a href="#">Excellent Customer Support:</a></h4>
              <p>Our dedicated customer support team is always available to assist you with any questions or concerns you may have. We're committed to providing you with a world-class shopping experience.</p>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Why Choose BellShipItNow?</h2>
          <p>Experience the joy of shopping from USA-based stores like never before with BellShipItNow. Say goodbye to limitations and embrace a world of endless possibilities. Join us today and unlock the door to a new level of cross-border shopping convenience!</p>
        </div>

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column align-items-lg-center">
            <div class="icon-box mt-5 mt-lg-0" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-receipt"></i>
              <h4>Vast Selection:</h4>
              <p>With BellShipItNow, you can access an extensive range of products from popular USA-based retailers, including Amazon USA, eBay, Walmart, Best Buy, and more. No more feeling left out regarding exclusive deals and products only available in the USA.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-cube-alt"></i>
              <h4>Affordable Shipping Rates:</h4>
              <p>We understand that international shipping costs can be excessive. That's why BellShipItNow negotiates discounted shipping rates with trusted carriers, passing the savings on to you. Say goodbye to hidden fees and unexpected costs.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-images"></i>
              <h4>Easy Order Placement:</h4>
              <p>Our user-friendly platform ensures a seamless shopping experience. Browse your favorite stores and add items to your BellShipItNow cart. We handle the rest, from package consolidation to customs documentation, ensuring your orders reach your doorstep hassle-free.</p>
            </div>
            <div class="icon-box mt-5" data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-shield"></i>
              <h4>Customizable Delivery Options:</h4>
              <p>You're in control of how and when your packages are delivered. Choose from various shipping methods, including standard, expedited, or economy, to fit your budget and timeline.</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2 " data-aos="zoom-in" data-aos-delay="100">
            <img src="assets/img/features.svg" class="img-fluid">
          </div>
        </div>
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Testimonials</h2>
          <p>See what our happy customers say about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Wow, I can't believe I didn't discover BellShipItNow sooner! As an avid online shopper, I always found it frustrating when my favorite USA-based stores didn't ship to my country. But thanks to BellShipItNow, I can now shop from Amazon USA and other US stores with ease
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Their platform is incredibly user-friendly, making it a breeze to browse and select products. I was amazed by the vast selection they offer, and I can now access exclusive deals and products that were previously out of reach for me.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The best part is the affordable shipping rates. I used to worry about high shipping costs, but BellShipItNow negotiated discounted rates, saving me a significant amount of money on each order.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  The package tracking feature is also a game-changer. I always know where my orders are in real-time, which brings me peace of mind during the shipping process.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  <!-- BellShipItNow's customer support team is outstanding. They promptly addressed any queries I had and were super helpful throughout the whole process.
                  <br> -->
                  I highly recommend BellShipItNow to anyone looking to shop from the USA and have their orders delivered internationally. It's a fantastic service that has made my online shopping experience so much more enjoyable. Thank you, BellShipItNow, for making my shopping dreams come true!"

                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </section><!-- End Testimonials Section -->
    <?php
    /*
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Portfolio</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
              </div>
              <div class="portfolio-links">
                <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->
    */
    ?>
    <!-- ======= Pricing Section ======= -->

    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
          <p>Here are few queries our customers frequently ask</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1"> What is BellShipItNow? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  BellShipItNow is a cutting-edge shipping and logistics platform that streamlines the process of shipping goods, packages, and freight domestically and internationally. It offers a range of services to ensure efficient and hassle-free shipping for businesses and individuals alike.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">What services does BellShipItNow provide? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  BellShipItNow offers a comprehensive suite of shipping services, including parcel shipping, freight shipping, international shipping, package tracking, warehousing, customs clearance, and more. We cater to various shipping needs to meet our customers' diverse requirements.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">How can I create an account with BellShipItNow? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Creating an account with BellShipItNow is easy. Simply visit our website at www.bellshipitnow.com and click on the "Sign Up" or "Register" button. Follow the prompts to provide the necessary information, and your account will be created.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">How do I schedule a shipment pickup? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  To schedule a shipment pickup, log in to your BellShipItNow account and navigate to the "Schedule Pickup" section. Enter the details of your shipment, including pickup location, date, and time. Our system will then arrange for a pickup based on your preferences.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">What shipping carriers does BellShipItNow work with? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  BellShipItNow collaborates with a wide range of reputable shipping carriers, both domestic and international. Some of our partners include FedEx, UPS, DHL, USPS, and more. The carrier options available may vary depending on the type of shipment and destination.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-6" class="collapsed">How can I track my package or shipment? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Tracking your package or shipment is simple with BellShipItNow. Log in to your account and go to the "Track Shipment" section. Enter the tracking number provided to you, and you'll receive real-time updates on the status and location of your package.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-7" class="collapsed">Can I get a quote for shipping services before sending my package? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-7" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Absolutely! BellShipItNow provides a convenient "Get a Quote" feature on our website. Enter the details of your shipment, such as dimensions, weight, origin, and destination, and our system will provide you with an accurate quote for the shipping cost.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-8" class="collapsed">How does BellShipItNow ensure the safety of my packages? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-8" class="collapse" data-bs-parent=".faq-list">
                <p>
                  We prioritize the safety and security of your packages. BellShipItNow employs advanced tracking technologies, secure packaging guidelines, and partners with reputable carriers to minimize the risk of damage or loss during transit. Additionally, insurance options are available for added protection.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-9" class="collapsed">Can I use BellShipItNow for personal shipping, or is it only for businesses? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-9" class="collapse" data-bs-parent=".faq-list">
                <p>
                BellShipItNow caters to both individual and business shipping needs. Whether you're sending a single package or managing complex freight logistics, our platform is designed to accommodate various types of shipments.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-10" class="collapsed">How can I contact BellShipItNow's customer support?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-10" class="collapse" data-bs-parent=".faq-list">
                <p>
                  For any inquiries, assistance, or support, you can reach out to BellShipItNow's customer service team through the "Contact Us" section on our website. We also provide a dedicated helpline and email support for prompt assistance.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-11" class="collapsed"> Does BellShipItNow offer bulk shipping discounts for businesses?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-11" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Yes, BellShipItNow offers competitive bulk shipping discounts for businesses with high shipping volumes. These discounts are designed to help businesses optimize their shipping costs while enjoying the convenience of our platform.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-12" class="collapsed"> Can I schedule a shipment for a future date?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-12" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Absolutely. BellShipItNow allows you to schedule shipments for future dates. During the shipment scheduling process, you can specify the desired pickup and delivery dates to accommodate your timeline.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-13" class="collapsed"> Are there any restrictions on items I can ship through BellShipItNow?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-13" class="collapse" data-bs-parent=".faq-list">
                <p>
                  While BellShipItNow accommodates a wide range of shipments, there are certain restrictions on hazardous materials, prohibited items, and items with specific shipping regulations. It's important to review our shipping guidelines and terms to ensure compliance.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-14" class="collapsed"> What payment methods are accepted by BellShipItNow?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-14" class="collapse" data-bs-parent=".faq-list">
                <p>
                  We accept various payment methods, including major credit cards, debit cards, and electronic funds transfers. The available payment options will be presented to you during the checkout process.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-15" class="collapsed"> How do I change or modify a shipment that I've already scheduled?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-15" class="collapse" data-bs-parent=".faq-list">
                <p>
                  If you need to make changes to a scheduled shipment, log in to your BellShipItNow account and navigate to the "Manage Shipments" section. Find the relevant shipment and follow the prompts to make necessary modifications.

                  For any additional questions or specific inquiries, feel free to contact BellShipItNow's customer support. We're here to ensure your shipping experience is seamless and efficient!
                </p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <!-- End Frequently Asked Questions Section -->
    <!-- ======= Video Section ======= -->
    <section id="video-section" class="video p-3">
      <div class="container" data-aos="fade-up"> 
        <div class="row">
          <div class="col-lg-6 p-3">
            <video width="500" height="500" controls class="hero_video">
              <source src="assets/video/BellShipItNow_hero_2.mp4" type="video/mp4">
            </video>
          </div>
          <div class="col-xl-6 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
            <h1 class="text-light h1 p-2 bg-dark text-center" >BellShipItNow</h1>
            <h2 class="text-dark text-center">Is a professional shipping solution for all your needs</h2>
            <div class="mx-auto">
              <a href="../sign-up.php" class="btn-get-started scrollto mb-5 text-light">
                Sign Up
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>                         
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Contact</h2>
          <p>Feel free to contact us. We will be happy to assist you.</p>
        </div>

        <div class="row">
          <!-- <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p> 228 Park Ave A # 698760
              New York, New York 10003<br></p>
            </div>
          </div> -->

          <div class="col-lg-6 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>support@bellshipitnow.com</p>
            </div>
          </div>

          <div class="col-lg-6 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p>1-844-227-4641</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.350013593107!2d-73.97620860717791!3d40.75432582432606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258fdf71d54cd%3A0xc7b7e1ae5bc080ef!2s228%20Park%20Ave%20a%2C%20New%20York%2C%20NY%2010017%2C%20USA!5e0!3m2!1sen!2sin!4v1690998752097!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form id="process-contact" name="process-contact" action="process-contact.php" method="POST" role="form" >
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" id="message" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!-- <script src="https://www.google.com/recaptcha/api.js"></script> -->
              <script src="https://www.google.com/recaptcha/api.js?render=6LdTxBcpAAAAAHrF_Zo0HQANYspIL634_V4SmecV"></script>
            
              <script>
                function onSubmit(token) 
                {
                  if(token)
                  {
                    toastr.success('Captcha verified!');
                  }
                  else
                  {
                    toastr.error('Captcha could not be verified!');
                  }
                  name = $("#name").val();
                  email = $("#email").val();
                  subject = $("#subject").val();
                  message = $("#message").val();
                  if(name.length<1)
                  {
                    toastr.error('Name is required!');
                  }
                  if(email.length<1)
                  {
                    toastr.error('Email is required!');
                  }
                  if(subject.length<1)
                  {
                    toastr.error('Subject is required!');
                  }
                  if(message.length<1)
                  {
                    toastr.error('Message is required!');
                  }
                  else
                  {
                    document.getElementById("process-contact").submit();
                  }
                }

                function onClick(e) 
                {
                  e.preventDefault();
                  grecaptcha.ready(function() 
                  {
                    grecaptcha.execute('6LdTxBcpAAAAAHrF_Zo0HQANYspIL634_V4SmecV', {action: 'submit'}).then(function(token) 
                    {
                      // alert("verify captcha");
                      // Add your logic to submit to your backend server here.
                    });
                  });
                }
              </script>
              <div class="text-center">
                <button class="btn btn-success g-recaptcha" data-sitekey="6LdTxBcpAAAAAHrF_Zo0HQANYspIL634_V4SmecV" data-callback='onSubmit' data-action='submit' type="submit">Send Message</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
  </main><!-- End #main -->
  <script>
	$( document ).ready(function() 
  {
		// $('form.shipping_form').submit(function(){
		// 	$('.box2').addClass('d-block');
		// });

		//Validate postal-code
		$('#zipcode').on('keyup, input',function()
    {
      zip = $(this).val();
      zip_len = zip.length;
      $.ajax({
        url  : 'https://maps.googleapis.com/maps/api/geocode/json?address='+zip+'&sensor=true&key=AIzaSyD6zLsfMk3jv6bydjtXy5hXxk7nD-y-rzg',
        success : function( data, textStatus ) 
        {
          try
          {
            console.log(data.results[0]['address_components']);
            // if(zip_len<6){
            // 	long_name = data.results[0]['address_components'][5].long_name;
            // }
            // else{
            // 	long_name = data.results[0]['address_components'][2].long_name;
            // }
            // if(typeof long_name !== "undefined" || long_name != ''){
              $(".validate_zip").remove();
            // 	// $("#ReceiptCountryId").val(long_name);
            // 	// $("#ReceiptCountryId").prop("disabled", true);
            // }
            }
            catch(e)
            {
              var warn = '<p id="validate_zip" class="validate_zip" style="font-size:12px; color:red;">Invalid postal code!</p>';
              $(".validate_zip").remove();
              $("#zipcode").after(warn);
              // $("#ReceiptCountryId").val('');
            }
          }
        }
      );
    });
	});
  </script>
  <script type="text/javascript">
    function suma()
    {
      // <!--General sale formula-->
      var num2 = "5.56789";
      var sum2 = document.getElementById("sum2");

      // <!--VOLUMETRIC WEIGHT-->
      var l1 = document.getElementById("l1");
      var w2 = document.getElementById("w2");

      var input = document.getElementById("total_result");
      // <!--Formula Values-->
      var volumetric = <?= !empty($core->meter)?$core->meter:1; ?>;

      var total_metric = l1.value * w2.value * h3.value/volumetric;
      //<!--Volumetric weight result-->
      var total_weight = sum2.value;
      //<!--Shipping weight value-->

      var calculate_weight;
      if (total_weight > total_metric)
      {
        calculate_weight = total_weight;
      }
      else
      {
        calculate_weight = total_metric;
      }

      total_result = parseFloat(parseFloat(calculate_weight)) .toFixed(2);  
      //<!--Total result formula-->
      input.value = total_result;
    }

    function kindCheck()
    {
      if ($('#ReceiptKind').val() != 'Document')
      {
        $('.nondoc').show();
        $('.doconly').hide();
        document.getElementById('sum2').required = true;
        $('.input-group input').prop('disabled',false);
      }
      else
      {
        $('.nondoc').hide();
        $('.doconly').show();
        document.getElementById('sum2').required = false;
        $('.input-group input').prop('disabled',true);
      }
    }
    //]]>
  </script>
<?php
include('footer.php');
?>
