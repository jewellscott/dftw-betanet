<?php include('templates/partials/site-header.php'); ?>

<?php

	$json = file_get_contents('data/products.json');
	$productData = json_decode($json, true); 

	session_start();

	$cart = $_SESSION['cart'] ?? [];

	$emptyCart = true;

	foreach ($cart as $quantity) {
	    if ($quantity > 0) {
	        $emptyCart = false;
	    }
	}

 ?>

 <emojimart-app>

 <product-view>
 	<inner-column>

 	 <?php foreach ($productData["categories"] as $category) { 

 	 		include('templates/modules/product-showcase/template.php');

	  } ?>	

	</inner-column>
 	
 </product-view>

 <checkout-view>

 	<?php if (!$emptyCart) { ?>
 		<?php include('templates/modules/full-cart/template.php');?>

 	<?php } else { ?>

		<?php include('templates/modules/empty-cart/template.php');?>

 	<?php } ?>

 </checkout-view>

 </emojimart-app>
