<product-showcase class="<?=$category["id"]?>">

 	<h2><?=$category["name"]?></h2>

 	<ul class="<?=$category["id"]?>-list">

 		<?php foreach ($category["products"] as $product) { ?>

 			<li class="<?=$product["id"]?>">

 				<?php include('templates/components/product-card/template.php'); ?>
 				
 			</li>

	 	 <?php } ?>

 	</ul>

</product-showcase>