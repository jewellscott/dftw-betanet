<?php include('templates/partials/site-header.php'); ?>

<?php

	$json = file_get_contents('data/products.json');
	$productData = json_decode($json, true); 

	$cart = [];

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

 	<?php if (!empty($cart)) { ?>
 		<!-- display cart -->
 	<?php } else { ?>

		<?php include('templates/modules/empty-cart/template.php');?>

 	<?php } ?>

 </checkout-view>

 </emojimart-app>
