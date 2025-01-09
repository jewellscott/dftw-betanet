<?php 

	// $url = $props["url"] ?? null;
	$centered = $props["centered"] ?? null;
	$height = $props["height"] ?? 600;
	$tabs = $props["tabs"] ?? null;
	$slugHash = $props["slugHash"] ?? "ZYzryjg";
	$token = $props["token"] ?? "901da947180e128359621b2c6f7c6342";

	if ($centered) {
		$isCentered = "centered";
	}

 ?>

 <?php if ($slugHash && $token) {?>

<generic-codepen class="<?=$isCentered?>">

	<p class="codepen" data-height="<?=$height?>" data-default-tab="<?=$tabs?>" data-slug-hash="<?=$slugHash?>" data-token="<?=$token?>">

<script async src="https://public.codepenassets.com/embed/index.js"></script>

</generic-codepen>

<?php } ?>