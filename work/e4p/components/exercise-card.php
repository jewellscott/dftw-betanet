<?php 
	$title = $exercise["title"] ?? "Exercise Title";
	$id = $exercise["id"] ?? 0;
	$description = $exercise["description"] ?? "Description";
?>

<article class="exercise-card">
	<h1 class="card-title">
		<a href="work/e4p/?exercise=<?=$id?>">
			<?=$title?>
		</a>
	</h1>
	<p class="xs-type"><?=$description?></p>

	<a href="work/e4p/?exercise=<?=$id?>" class="m-type tech-type">LINK</a>
</article>

<?php

	unset($title);
	unset($id);
	unset($description);
?>