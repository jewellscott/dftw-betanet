<?php 

	$imgSrc = $props["imgSrc"] ?? "assets/img/placeholder/landscape.jpg";
	$imgAlt = $props["imgAlt"] ?? "";

	$figcaption = $props["figcaption"] ?? "This is a generic figure with a caption.";
	$centered = $props["centered"] ?? null;

	if ($centered) {
		$isCentered = "centered";
	}

 ?>

<generic-figure class="<?=$isCentered?>">
	<figure>
		<picture>
			<img src="<?=$imgSrc?>" alt="<?=$imgAlt?>">
		</picture>
		<figcaption class="callout">
			<p class="display-type">
				<?=$figcaption?>
			</p>
		</figcaption>
	</figure>
</generic-figure>