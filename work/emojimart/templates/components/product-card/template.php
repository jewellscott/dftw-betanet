<product-card data-id="<?=$product["id"]?>">
	<picture>
		<img 
			src="<?=$product["thumb"]?>" 
			alt="<?=$product["name"]?>"
		>
	</picture>
	<p class="name"><?=$product["name"]?></p>
	<p><span class="price">$<?=$product["price"]?></span> <span class="unit">/<?=$product["unit"]?></span></p>

	<?php include('templates/components/product-actions/template.php');?>
</product-card>
