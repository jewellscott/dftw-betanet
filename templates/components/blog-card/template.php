<?php 

	$title = $blog["title"];
	$img = $blog["img"];
	$description = $blog["description"];
	$slug = $blog["slug"];

 ?>

<blog-card>
	<!-- <figure>
		<img src="<?=$img?>" alt="<?=$title?>">
	</figure> -->
	<h3 class="lg-type strong-type colored-type"><?=$title?></h3>
	<p class="display-type"><?=$teaser?></p>
	<!-- <a href="<?="?page=" . $url?>" class="tech-type">View <?=$title?> live</a> -->
	<a href="?page=blog&slug=<?=$slug?>" class="tech-type">Case Study</a>
</blog-card>