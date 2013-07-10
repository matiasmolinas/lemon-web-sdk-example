
<!DOCTYPE html>
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />
  
  <meta name="apple-mobile-web-app-capable" content="no" />
  <meta name="apple-mobile-web-app-status-bar-style" content="black" />
  <link rel="apple-touch-icon-precomposed" href="lemonstore114.png" />

  <title>Lemon Store</title>

  <link rel="stylesheet" href="css/foundation.css">  
  <!--script src="js/custom.modernizr.js"></script-->

</head>
    
<body>
	<?php // Lemon SDK	  
      $SDK = new stdClass();
	  $SDK->access_token = "fh89327ifhds9879823hjkf7"; // Developer access token
      $SDK->developer_secret = "e(8W>51mUT7473Q"; // Developer sdk secret key
      $SDK->optional_fields = array('oneClickPayment','billingAddress','cardHolder'); // Optional required fields: ['zipCode','addressLine']
      
      $SDK->callback = "http://bo1.lemon.com/sdk/v1/web/lemonstore/callback.php"; // Callback url. If using js_callback leave this in blank
      //$SDK->js_callback = "alert"; // Callback javascript function. Card hash will be received as param

      $SDK->screenMode = "modal"; //Screen Mode choose between: ['modal','fullscreen']
      $SDK->width = 420; //If screenMode is 'fullscreen' this property will do nothing
	  $SDK->height = 500;//If screenMode is 'fullscreen' this property will do nothing
      
	  $SDK->email = "getlemons1@gmail.com";

      require_once("../client/LemonWebSDK.php");
      $LemonWebSDK = LemonWebSDK::getInstance();	              
	  $LemonWebSDK->show($SDK);
	  
    ?>
<div class="row">
    <div class="large-12 columns">

    <!-- Navigation -->

      <div class="row">
        <div class="large-12 columns">

          <nav class="top-bar">
            <ul class="title-area">
              <!-- Title Area -->
              <li class="name">
                <h1>
                  <a href="#">
                    Lemon Store
                  </a>
                </h1>
              </li>
              <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
            </ul>
         
            <section class="top-bar-section">
              <!-- Right Nav Section -->
              <ul class="right">
                <li class="divider"></li>
                <li><a href="https://lemon.com/">Lemon Wallet</a>
                <li class="divider"></li>
                <li><a href="https://lemon.com/network/">Lemon Network</a></li>
                <li class="divider"></li>
                <li><a href="https://lemon.com/developers/">Lemon Developers</a></li>
              </ul>
            </section>
          </nav>
          <!-- End Top Bar -->
        </div>
      </div>

    <!-- End Navigation -->

      <div class="row">

  <!-- Side Bar -->

        <div class="large-4 columns">

          <img src="img/bigimage.jpg">

          <div class="hide-for-small panel">
            <h3>Your Chart</h3>
            <h5 class="subheader">1 medium Lemon Charcoal t-shirt. Total <strong>$20.00</strong>.
            </h5>
          </div>

          <a style="cursor:pointer" onclick="showLemon();">
          <div class="panel callout radius">
            <h6>Pay with Lemon Wallet</h6>
          </div>
          </a>

        </div>

    <!-- End Side Bar -->


    <!-- Thumbnails -->

        <div class="large-8 columns">
          <div class="row">

            <div class="large-4 small-6 columns">
              <img src="img/charcoal.jpg">

              <div class="panel">
                <h5>Lemon Charcoal t-shirt (small)</h5>
                <h6 class="subheader">$20.00</h6>
              </div>
            </div>
            
            <div class="large-4 small-6 columns">
              <img src="img/charcoal.jpg">

              <div class="panel">
                <h5>Lemon Charcoal t-shirt (medium)</h5>
                <h6 class="subheader">$20.00</h6>
              </div>
            </div>
            
            <div class="large-4 small-6 columns">
              <img src="img/charcoal.jpg">

              <div class="panel">
                <h5>Lemon Charcoal t-shirt (large)</h5>
                <h6 class="subheader">$20.00</h6>
              </div>
            </div>

            <div class="large-4 small-6 columns">
              <img src="img/gold.jpg">

              <div class="panel">
                <h5>Lemon Gold t-shirt (small)</h5>
                <h6 class="subheader">$20.00</h6>
              </div>
            </div>
            
            <div class="large-4 small-6 columns">
              <img src="img/gold.jpg">

              <div class="panel">
                <h5>Lemon Gold t-shirt (medium)</h5>
                <h6 class="subheader">$20.00</h6>
              </div>
            </div>
            
            <div class="large-4 small-6 columns">
              <img src="img/gold.jpg">

              <div class="panel">
                <h5>Lemon Gold t-shirt (large)</h5>
                <h6 class="subheader">$20.00</h6>
              </div>
            </div>
          </div>

    <!-- End Thumbnails -->


    
    <!-- End Managed By -->

          </div>
        </div>
      </div>


    <!-- Footer -->

      <footer class="row">
        <div class="large-12 columns"><hr />
          <div class="row">

            <div class="large-6 columns">
              <p>&copy; 2013 Lemon, Inc.</p>
            </div>

            <div class="large-6 columns">
              <ul class="inline-list right">
              	<li><a href="https://www.facebook.com/LemonWallet">Facebook</a></li>
                <li><a href="https://twitter.com/LemonWallet/">Twitter</a></li>
              </ul>
            </div>

          </div>
        </div>
      </footer>

    <!-- End Footer -->

    </div>
  </div>

  <!--script>
  document.write('<script src=js/vendor/' +
  ('__proto__' in {} ? 'zepto' : 'jquery') +
  '.js><\/script>')
  </script>
  <script src="js/foundation.min.js"></script>
  <script>
    $(document).foundation();
  </script>
  <!-- End Footer -->

</body>
</html>
