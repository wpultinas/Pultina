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
<html lang="en">
<head>
  <title>Kid's bags</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <link rel="stylesheet" href="../style/bootstrap-grid.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
</head>
<body class="kids_shop">	
<div class="main-container">
 
	<!-- Include MENU -->
<div class="menu">
<?php include 'menu_rainbow.php';?>
</div>
	
	<!-- start gallery -->
<div class="design-container kids">
  <div class="row"> <!-- start first row -->
    <div class="col-12">
      <div class="card-deck kids"> 
        <div class="card kids" style="width: 100%;"><a class="product-text" href="/product_details60.php?id=3"<?php echo $link_name; ?>">
			<img src="Pultina_images\frontanglemini.jpg" class="card-img-top" alt="...">
          <div class="card-body kids">
            <p class="card-text">Mini-backpack | Lone star</p>
		  </div></a>
		</div>
		<div class="card kids" style="width: 100%;"><a class="product-text" href="/product_details45.php?id=2"<?php echo $link_name; ?>">
          <img src="Pultina_images\hipbag_frontangleshop.jpg" class="card-img-top" alt="...">
        <div class="card-body kids">
            <p class="card-text">Hip bag | Candy hearts</p>
          </div></a>
        </div>
         <div class="card placeholder" style="width: 100%;">
          <!-- <div class="card-body kids">
            <p class="card-text"></p>
          </div>c-->
        </div>
      </div> <!-- end card deck -->
    </div> <!-- end col -->
  </div> <!-- end row -->
  <div class="row"> <!-- start second row -->
    <div class="col-12">
      <div class="card-deck kids">
        <div class="card placeholder" style="width: 100%;">
          <div class="card-body kids">
            <p class="card-text"></p>
        </div>
        </div>
        <div class="card placeholder" style="width: 100%;">
          <div class="card-body kids">
            <p class="card-text"></p>
        </div>
        </div>
        <div class="card kids placeholder" style="width: 100%;">
          <div class="card-body kids">
            <p class="card-text"></p>
          </div>
        </div>
      </div> <!-- end card deck -->
    </div> <!-- end col -->
  </div> <!-- end row -->	
</div> <!-- end gallery -->
	<br>
	<br>
<div class="row footer">
   	 <div class="col-md-4 order-md-4 footer-logo">
	   <img src="Pultina_images/pultinalogonew.svg" alt="Pultina logo">
	   <h2 class="zero-text">ZERO WASTE GOODS</h2>
     </div>
	 <div class="col-md-4 order-md-4 footer-container"><a class="footer-text" href="policy_contact.php">CONTACT</a><a class="footer-text" href="#">&nbsp; &nbsp; INSTAGRAM</a>
	 </div>
     <div class="col-md-4 footer-container bottom"><a class="footer-text" href="policy_contact.php#policyanchor">POLICIES & PAYMENTS</a>
	 </div>
   </div>  

</div> <!-- end main-container-->
</body>
</html>