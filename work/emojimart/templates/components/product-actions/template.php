
	<form action="cart-actions.php" method="POST" class="product-actions">
	   <input type="hidden" name="product_id" value="<?=$product["id"]?>">

	   <?php // echo($product["id"]) ?>
	   
	   <button type="submit" name="action" value="decrease">-</button>
	   
	   <span class="count"><?= $_SESSION['cart'][$product["id"]] ?? 0 ?></span>

	   <button type="submit" name="action" value="increase">+</button>
	</form>
