<?php 

// we run into another problem here because how the data is set up - multiple categories, each with their own products. we either have to flatten it or loop through every category... gonna flatten it

$allProducts = array_merge(...array_map(function($category) {
   return $category['products'];
}, $productData['categories']));

$thisProduct = null;

foreach ($allProducts as $product) {
    if ($product['id'] === $item) {
        $thisProduct = $product;
        break;
    }
}
?>

<checkout-product>
	<?php // var_dump($thisProduct); ?>
	<picture>
		<img src="<?=$thisProduct["thumb"]?>" alt="<?=$thisProduct["name"]?><">
	</picture>

	<product-details>
		<h3><?=$thisProduct["name"]?></h3>
		<h4><?=$qty?> @ <?=$thisProduct["price"]?>/<?=$thisProduct["unit"]?></h4>
		<h4><?php ($qty * $thisProduct["price"]); ?></h4>
	</product-details>

	<?php include('templates/components/product-actions/template.php'); ?>
	
</checkout-product>