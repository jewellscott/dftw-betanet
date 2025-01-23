<?php include('templates/partials/site-header.php'); ?>

<?php

	$json = file_get_contents('data/products.json');
	$productData = json_decode($json, true); 

	$cart = [];

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
	 				<product-card data-id="<?=$product["id"]?>">
	 					<picture>
	 						<img 
	 							src="<?=$product["thumb"]?>" 
	 							alt="<?=$product["name"]?>"
	 						>
	 					</picture>
	 					<p class="name"><?=$product["name"]?></p>
	 					<p><span class="price">$<?=$product["price"]?></span> <span class="unit">/<?=$product["unit"]?></span></p>

	 					<form action="" method="POST" class="product-actions">
							<button type="submit" name="action" value="decrease" class="btn-decrease">-</button>

							<span class="count">
							   0
							</span>

							<button type="submit" name="action" value="increase" class="btn-increase">+</button>
						</form>
	 				</product-card>
	 			</li>

		 	 <?php } ?>

	 	</ul>

	 	</product-showcase>
	 	
	 <?php } ?>	

	</inner-column>
 	
 </product-view>

 <checkout-view>

 	<?php if (!empty($cart)) { ?>
 		<!-- display cart -->
 	<?php } else { ?>

 		<empty-cart>

	 		<p>Your cart is empty.<br> Please enjoy a landscape.</p>

		 	<picture>
		 		<img src="https://s3.amazonaws.com/pix.iemoji.com/images/emoji/apple/ios-12/256/national-park.png" alt="National Park Emoji">
		 	</picture>
 		
 		</empty-cart>

 	<?php } ?>

 </checkout-view>

 </emojimart-app>
