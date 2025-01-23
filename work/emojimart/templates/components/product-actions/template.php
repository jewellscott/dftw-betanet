<!-- <form action="" method="POST" class="product-actions">
		<button type="submit" name="action" value="decrease" class="btn-decrease">-</button>

		<span class="count">
		   0
		</span>

		<button type="submit" name="action" value="increase" class="btn-increase">+</button>
</form> -->

<?php  // session_start(); ?>


<form action="cart-actions.php" method="POST" class="product-actions">
   <input type="hidden" name="product_id" value="<?=$product["id"]?>">

   <?php // echo($product["id"]) ?>
   
   <button type="submit" name="action" value="decrease">-</button>
   
   <span class="count"><?= $_SESSION['cart'][$product["id"]] ?? 0 ?></span>

   <button type="submit" name="action" value="increase">+</button>
</form>
