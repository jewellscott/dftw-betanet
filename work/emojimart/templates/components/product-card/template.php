<product-card data-id="<?=$product["id"]?>">
	<picture>
		<img 
			src="<?=$product["thumb"]?>" 
			alt="<?=$product["name"]?>"
		>
	</picture>
	<p class="name"><?=$product["name"]?></p>
	<p><span class="price">$<?=$product["price"]?></span> <span class="unit">/<?=$product["unit"]?></span></p>

	<?php

	 if ($cart[$product["id"]] == 0) {
	 	include('templates/components/product-add/template.php');
	 } else {
	 	include('templates/components/product-actions/template.php');
	 }
	?>

</product-card>
