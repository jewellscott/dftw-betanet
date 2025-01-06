<?php 

	// print_r($props);

	$imgSrc = $props["imgSrc"] ?? "assets/img/placeholder/landscape.jpg";
	$flipped = $props["flipped"] ?? false;
	$imgId = $props["imgId"] ?? "";
	$alt = $props["alt"] ?? "";
	$ratio = $props["ratio"] ?? null;

	$isFlipped = "";
	if ($flipped) {
		$isFlipped = "flipped";
	}

	$isRatio = "";

	if ($ratio) {
		switch ($ratio) {
		    case "1:2":
		        $isRatio = "one-two";
		        break;
		    case "1:3":
		        $isRatio = "one-three";
		        break;
		    case "2:1":
		        $isRatio = "two-one";
		        break;
		    case "2:3":
		        $isRatio = "two-three";
		        break;
		    case "3:1":
		        $isRatio = "three-one";
		        break;
		    case "3:2":
		        $isRatio = "three-two";
		        break;
		    default:
		        $isRatio = ""; // default 1:1, do nothing
		        break;
		}
	}
 ?>

<graphic-diptych class="<?=$isFlipped?> <?=$isRatio?>">
	<picture>
		<img src="<?=$imgSrc?>" id="<?=$imgId?>" alt="<?=$alt?>">
	</picture>

	<?php 
		include('templates/modules/generic-text/template.php'); 
	?>
</graphic-diptych>