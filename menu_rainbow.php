<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=false;"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/bootstrap-grid.css">
  <link rel="stylesheet" href="../style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<!-- HEADER  -->
	<div class="desktop-menu">
      <div class=" container-fluid header row">
        <div class="col-4 materials-rainbow dropdown  my-auto">
		  <button class="logo-text dropbtn"><span class="logo-text-hover rainbow">ABOUT</span></button>
		   <div class="dropdown-content rainbow">
    		<a class="nav-link rainbow" href="about.php">About</a>
    		<a class="nav-link rainbow" href="our_materials.php">Our Materials</a>
			<a class="nav-link rainbow" href="full_circle.php">Full Circle Program</a>
		   </div>
        </div>
        <div class="col-4 logo-rainbow"><a href="index.html"><img src="/Pultina_images/pultinalogorainbows.svg" alt="Pultina logo"</a></div>
        <div class="col-4 materials-rainbow dropdown">
		  <div class="row">
		   <div class="col-8">
		   <button class="logo-text dropbtn"><span class="logo-text-hover rainbow">SHOP</span></button>
		   <div class="dropdown-content rainbow">
    		<a class="nav-link rainbow" href="general_shop.php">General</a>
    		<a class="nav-link rainbow" href="kids_shop.php">Kids</a>
			<a class="nav-link rainbow" href="design_your_own.php">Customize</a>
     	   </div>
        </div>
		<div class="col-4 cart-button">
		  <form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
			<input type="hidden" name="cmd" value="_s-xclick">
			<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
			<input type="image" src="https://www.pultina.com/Pultina_images/shopping_cart_rainbow.png" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style=" width: 20%; height: auto; padding-top: 3%;">
			<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
			</form> 
		</div>
		</div>
	   </div>
	</div>
   </div>


<!-- MOBILE HEADER -->
<div class="mobile-menu">
	<nav class="navbar navbar-default navbar-fixed-top">
      <div class="container mobile-container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>	
          <a class="navbar-brand mobile-logo" href="index.html">Pultina</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">ABOUT <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="about.php">About</a></li>
                <li><a href="our_materials.php">Our material</a></li>
                <li><a href="full_circle.php">Full circle program</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
			<li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">SHOP <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="general_shop.php">General</a></li>
                <li><a href="kids_shop.php">Kids</a></li>
                <li><a href="design_your_own.php">Customize</a></li>
                <li role="separator" class="divider"></li>
              </ul>
            </li>
			<li><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_cart&business=GRVC3US4H5BLW&display=1">Shopping cart</a></li>
			<li><a href="policy_contact.php">Policy & Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
</div>
	
</html>

