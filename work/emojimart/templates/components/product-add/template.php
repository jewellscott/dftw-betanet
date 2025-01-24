
<form action="cart-actions.php" method="POST" class="product-add">
   <input type="hidden" name="product_id" value="<?=$product["id"]?>">

   <?php // echo($product["id"]) ?>

   <button type="submit" name="action" value="increase">+</button>
</form>
