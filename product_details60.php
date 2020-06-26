<?php
		 $dbhost = 'localhost';
         $dbuser = 'us9m35py8xyyk';
         $dbpass = 'comraderie2020';
         $dbname = 'db9qgbyak5r67r';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connectt: ' . mysqli_error());
         }

//check GET request id param
if(isset($_GET['id'])){
	$id = mysqli_real_escape_string($conn, $_GET['id']);
	
// make sql
	
	$sql = "SELECT * FROM Products WHERE id = $id";
	
	//get the query result
	$result = mysqli_query($conn, $sql);
	
	
	
	
	//fetch result in array format
	$product = mysqli_fetch_assoc($result);
	
			 $product_name = $product["product_name"];
			 $price = $product["price"];
			 $description = $product["description"];
			 $category = $product["category"];
			 $dimensions = $product["dimensions"];
			 $materials = $product["materials"];
			 $image_1 = $product["image_1"];
			 $image_2 = $product["image_2"];
			 $image_3 = $product["image_3"];
			 $image_4 = $product["image_4"];
			 $image_5 = $product["image_5"];

	
	
	
	mysqli_free_result($result);
	mysqli_close($conn);
	
	//print_r($product);
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Products</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../style/bootstrap-grid.css">
  <link rel="stylesheet" href="../style/stylejava.css">
  <link rel="stylesheet" href="../style/style.css">
  <link href="https://fonts.googleapis.com/css?family=Alata" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Include the PayPal JavaScript SDK -->
  <script src="https://www.paypal.com/sdk/js?client-id=AbUGxj7xBWgfRO8BP3SzvjmbDABVk_2IvXQ4cfPOjAGIX0vqOu1HSaLi5YWQLTFO_C7ZZ_e5ZQ14HgHa"></script>
	
</head>
<body class="general_shop">
	
<!-- HEADER -->
      <div class="container-fluid header row">
        <div class="col materials dropdown my-auto">
		  <button class="logo-text dropbtn"><span class="logo-text-hover">ABOUT</span></button>
		   <div class="dropdown-content">
    		<a class="nav-link" href="about.php">About</a>
    		<a class="nav-link" href="our_materials.php">Our Materials</a>
			<a class="nav-link" href="full_circle.php">Full Circle Program</a>
		   </div>
        </div>
        <div class="col logo"><a href="index.html"><img src="/Pultina_images/pultinalogo.svg" class="img-responsive" alt="Pultina logo"></a>
		</div>
        <div class="col materials dropdown my-auto">
		  <button class="logo-text dropbtn"><span class="logo-text-hover">SHOP</span></button>
		   <div class="dropdown-content">
    		<a class="nav-link" href="general_shop.php">General</a>
    		<a class="nav-link" href="kids_shop.php">Kids</a>
			<a class="nav-link" href="design_your_own.php">Customize</a>
     	   </div>
        </div>
	   </div>
	
<!-- main image section -->  	
<div class="container-fluid descrip-container"> <!-- container for top row -->
  <div class="row"> <!-- row for main image and product details -->
	<div class="col-md-8">
	  <div class="main-image">
		<img src="<?php echo $image_1;?>" id="mainImage">
	  </div>
	</div> <!-- end main image section -->
	  <!-- product details section -->
	<div class="col-md-4">
	  <div class="product-name"><?php echo $product_name;?></div>
	  <div class="product-price"><?php echo "$", $price;?></div>
	  <div class="product-description"><?php echo $description;?></div>
	  <div class="product-materials"><?php echo $materials;?></div>
	  <div class="product-dimensions"><?php echo $dimensions;?></div>
	  <br>
	  <div> 		<!-- ADD to Cart button -->
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="hosted_button_id" value="ZPZPU7KMDCE38">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
	  </div>
	  <div>		<!-- VIEW CART BUTTON -->
		<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
		<input type="hidden" name="cmd" value="_s-xclick">
		<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
		<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_viewcart_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
		<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
		</form>
	  </div>
    </div> <!-- end product details section -->
  </div> <!-- end row for main image and product details -->
</div> <!-- end container for top row-->
	
<div class="d-flex flex-row sub-image-row"> <!-- container for sub image row-->
  <div class="p-2 sub-image-col sub-images" id="cursor-move" onClick="changeImage(event)">
    <img src="<?php echo $image_1;?>" style="width:100%";>
  </div>
  <div class="p-2 sub-image-col sub-images" id="cursor-move" onClick="changeImage(event)">
    <img src="<?php echo $image_2;?>" style="width:100%";>
  </div>
  <div class="p-2 sub-image-col sub-images" id="cursor-move" onClick="changeImage(event)">
    <img src="<?php echo $image_3;?>" style="width:100%";>
  </div>
  <div class="p-2 sub-image-col sub-images" id="cursor-move" onClick="changeImage(event)">
    <img src="<?php echo $image_4;?>" style="width:100%";>
  </div>
  <div class="p-2 sub-image-col sub-images" id="cursor-move" onClick="changeImage(event)">
    <img src="<?php echo $image_5;?>" style="width:100%";>
  </div>
</div>

<!-- ADD TO CART BUTTON 
<div class="container-fluid">
  <div class="row">
	<form action="cart.php?id=<?php echo $id ?>" method="post">
            <input type="number" name="quantity" value="1" min="1" max="<?=$product['quantity']?>" placeholder="Quantity" required>
            <input type="hidden" name="product_id" value="<?=$id?>">
            <input type="submit" value="Add To Cart">
        </form>
	</div>
</div>	  
	<!-- end --> 
	
	
	
	
<!-- PAYPAL BUTTON 
<div class="container-fluid">
  <div class="row">
    <div class="col-lg-3" id="paypal-button-container"></div>
  </div>
</div>
	<script>
		var price= '<?php echo $price; ?>';
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: price
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>		
<!-- END PAYPAL BUTTON -->
	
	
<!-- Footer -->	
<div class="row footer policy-footer">
   	 <div class="col-md-4 order-md-4 footer-logo">
	   <img src="Pultina_images/pultinalogonew.svg" alt="Pultina logo">
	   <h2 class="zero-text">ZERO WASTE GOODS</h2>
     </div>
	 <div class="col-md-4 order-md-4 footer-container"><a class="footer-text policy-text" href="policy_contact.php">CONTACT</a><a class="footer-text policy-text" href="#">&nbsp; &nbsp; INSTAGRAM</a>
	 </div>
     <div class="col-md-4 footer-container bottom"><a class="footer-text policy-text" href="policy_contact.php#policyanchor">POLICIES & PAYMENTS</a>
	 </div>
   </div>  

<script>
	var images = document.getElementById("cursor-move").getElementsByTagName("img");
	
	for (var i=0; i < images.length; i++){
		images[i].onmouseover = function () {
			this.style.opacity = 1;
		}
		images[i].onmouseout = function () {
			this.style.opacity = .3;
		}
	}
function changeImage(event) {
	event = event || window.event;
	var targetElement = event.target || event.srcElement;
	if (targetElement.tagName == "IMG")
		{
			document.getElementById("mainImage").src = targetElement.getAttribute("src");
		}
}
</script>

</body>
</html>