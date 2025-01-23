<?php 

var_dump($cart);

$total = $total ?? 0;
$totalTax = $totalTax ?? 0;
$taxRate = .067;

?>

<full-cart>

	<product-list>

		<?php foreach ($cart as $item => $qty) { 

		// echo($item);
		// echo($qty);

		include('templates/components/checkout-product/template.php');

		 } ?>
		
	</product-list>

	 <cart-totals>

	 	<!-- VERY MESSY BELOW.. i just wanted to get it on the page, i'll turn it into a module and actually design it later lol -->


		 <span class='emojis'>😋😋😋😋😋😋😋😋😋😋😋</span>
		 <span><?php echo("<span class='title'>Subtotal:</span> $total"); ?></span>
		 <span><?php echo("<span class='title'>Tax:</span> $". number_format($totalTax, 2)); ?></span>
		 <span><?php echo("<span class='title'>Total: </span>$" . number_format(($total + $totalTax), 2)); ?></span>
		 <span class='farewell'>Have a nice day!</span>
		 <span class='emojis'>😋😋😋😋😋😋😋😋😋😋😋</span>

	</cart-totals>

</full-cart>



