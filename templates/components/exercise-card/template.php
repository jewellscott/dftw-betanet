<?php 

	$title = $exercise["title"];
	$teaser = $exercise["teaser"];
	$slug = $exercise["slug"];

 ?>

<exercise-card>
	<h3 class="lg-type strong-type colored-type"><?=$title?></h3>
	<p class="display-type"><?=$teaser?></p>
	<a href="?page=exercise&slug=<?=$slug?>" class="tech-type">Case Study</a>
</exercise-card>