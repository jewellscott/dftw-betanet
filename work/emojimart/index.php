<?php include('templates/partials/site-header.php'); ?>

<?php

	$json = file_get_contents('data/products.json');
	$productData = json_decode($json, true); 

 ?>

 <emojimart-app>

 <product-view>
 	<inner-column>

 	 <?php foreach ($productData["categories"] as $category) { ?>

	 	<product-showcase class="<?=$category["id"]?>">

	 	<h1><?=$category["name"]?></h1>

	 	<ul class="<?=$category["id"]?>-list">

	 		<?php foreach ($category["products"] as $product) { ?>

	 			<li class="<?=$product["id"]?>">
	 				<product-card>
	 					<picture>
	 						<img 
	 							src="<?=$product["thumb"]?>" 
	 							alt="<?=$product["name"]?>"
	 						>
	 					</picture>
	 					<p class="name"><?=$product["name"]?></p>
	 					<p><span class="price">$<?=$product["price"]?></span> <span class="unit">/<?=$product["unit"]?></span></p>

	 					<button>+</button>
	 				</product-card>
	 			</li>

		 	 <?php } ?>

	 	</ul>

	 	</product-showcase>
	 	
	 <?php } ?>	

	</inner-column>
 	
 </product-view>

 <checkout-view>

 	<empty-cart>

 		<p>Your cart is empty.<br> Please enjoy a landscape.</p>

	 	<picture>
	 		<img src="https://s3.amazonaws.com/pix.iemoji.com/images/emoji/apple/ios-12/256/national-park.png" alt="National Park Emoji">
	 	</picture>
 		
 	</empty-cart>

 </checkout-view>

 </emojimart-app>
