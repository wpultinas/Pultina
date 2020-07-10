<?php

		 $dbhost = 'localhost';
         $dbuser = 'us9m35py8xyyk';
         $dbpass = 'comraderie2020';
         $dbname = 'db9qgbyak5r67r';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connectt: ' . mysqli_error());
         }
	// write query for all products
	$sql = 'SELECT * FROM Products';

	// get the result set (set of rows)
	$result = mysqli_query($conn, $sql);

	// fetch the resulting rows as an array
	$products = mysqli_fetch_all($result, MYSQLI_ASSOC);

	// free the $result from memory (good practise)
	mysqli_free_result($result);

	// close connection
	mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en"><head>
  <title>Products</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/bootstrap-grid.css">
  <link rel="stylesheet" href="../style/style.css">
 <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body class="shop">
<div class="main-container">
	
	
 <!-- Include MENU -->
<div class="menu">
<?php include 'menu.php';?>
</div>
	
	
	<!-- start gallery -->
<div id="design-container">
  <div class="row"> <!-- start first row -->
    <div class="col-12">
      <div class="card-deck"> 
        <div class="card" style="width: 100%;"><a class="product-text" href="/product_details150.php?id=1"<?php echo $link_name; ?>">
			<img src="Pultina_images\WBfrontnew.png" class="card-img-top" alt="Front view of backpack">
          <div class="card-body">
            <p class="card-text">Backpack | Bluejay</p>
		  </div></a>
		</div>
		<div class="card placeholder" style="width: 100%;"><a class="product-text" href="/product_details.php?id=2"<?php echo $link_name; ?>">
          <img src="Pultina_images\hipbag_frontangleshop.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text">Hip bag | Candy hearts</p>
          </div></a>
        </div>
        <div class="card placeholder" style="width: 100%;">
          <img src="Pultina_images\WBfrontnew.png" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"></p>
          </div>
        </div>
      </div> <!-- end card deck -->
    </div> <!-- end col -->
  </div> <!-- end row -->
  <div class="row"> <!-- start second row -->
    <div class="col-12">
      <div class="card-deck">
        <div class="card placeholder" style="width: 100%;">
          <img src="Pultina_images\WBfront.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"></p>
        </div>
        </div>
        <div class="card placeholder" style="width: 100%;">
          <img src="Pultina_images\WBfront.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"></p>
        </div>
        </div>
        <div class="card placeholder" style="width: 100%;">
          <img src="Pultina_images\WBfront.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <p class="card-text"></p>
          </div>
        </div>
      </div> <!-- end card deck -->
    </div> <!-- end col -->
  </div> <!-- end row --> 	
</div> <!-- end gallery -->
	<br>
	<br>
<div class="row footer policy-footer">
  <div class="col-md-4 order-md-4 footer-logo">
	<img src="Pultina_images/pultinalogonew.svg" alt="Pultina logo">
	<h2 class="zero-text">ZERO WASTE GOODS</h2>
  </div>
  <div class="col-md-4 order-md-4 footer-container"><a class="footer-text policy-text" href="policy_contact.php">CONTACT</a><a class="footer-text" href="#">&nbsp; &nbsp; INSTAGRAM</a>
  </div>
  <div class="col-md-4 footer-container bottom"><a class="footer-text policy-text" href="policy_contact.php#policyanchor">POLICIES & PAYMENTS</a>
  </div>
</div>  

</div> <!-- end main-container-->
</body>
</html>