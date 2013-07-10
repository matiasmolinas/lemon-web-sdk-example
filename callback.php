
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
        <div class="hide-for-small panel">
            <h3>Success!</h3>
              

<?php
  require_once("LemonWebSDK.php");
  
  $access_token = "fh89327ifhds9879823hjkf7";
  $developer_secret = "e(8W>51mUT7473Q";
  $hash = $_REQUEST["callback"];
  
  // START OF PAYMENT CONFIG
  // If you setup a payment processor at Lemon Network, the information below will be required. 
  $tx_data = array(
  				   "currency"    => "usd", // Charge Currency ISO-3
  				   "amount"      => 400, // Enter here the amount to charge
				   "description" => "Charge for test@example.com" // A description for the transaction
				  );
  // END OF PAYMENT CONFIG
  
  
  $LemonWebSDK = LemonWebSDK::getInstance();
  $result = $LemonWebSDK->getCardData($access_token, $developer_secret, $hash, $tx_data);
  
  //HERE IS THE RETURNING DATA
  
  if(isset($result->success)){ // If you are using a payment processor pre-configured with Lemon Network.
  	if($result->success){
	  	echo "<h1>Payment done.</h1>"; // Payment done
		echo "<h3>Data retrieved from processor.</h3><br>".json_encode($result->data); // Transaction result and information
  	}else{
	  	echo "<h1>Error.</h1><h3>".$result->error."</h3>"; // Error while processing the payment
  	}
  }else{ // If you want to retrieve the card data and did not configured a payment processor with Lemon Network.
	  echo "<strong>Shipping Address</strong><br><br>";
	
	  if(isset($result->ch)){
	  	echo "".$result->ch."<br>";
	  }
	  if(isset($result->ad)){
	  	echo "".$result->ad."<br>";
	  }
	  
	  if(isset($result->ci)){
	  	echo "".$result->ci."<br>";
	  }
	  if(isset($result->st)){
	  	echo "".$result->st." ";
	  }
	  if(isset($result->z)){
	  	echo "(".$result->z.")<br>";
	  }
	  if(isset($result->cc)){
	  	echo "Country Code ISO-2 : ".$result->cc."<br>";
	  }
	  
	  if(isset($result->cn)){
	  	echo "<br><strong>Credit Card information</strong><br><br>";
	  }
	  
	  if(isset($result->cn)){
	  	echo "Card Number : <span style='-webkit-text-security: disc;'>".$result->cn."</span><br>";
	  }  
	  if(isset($result->ed)){
	  	echo "Expiration Date : ".$result->ed."<br>";
	  }
	  if(isset($result->sc)){
	  	echo "CVV : ".$result->sc."<br>";
	  }

  }

  
?>
		</div>
		
		<a href="./">
          <div class="panel callout radius">
            <h6>Continue shopping</h6>
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