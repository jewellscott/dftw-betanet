<?php 

	$title = $project["title"];
	$img = $project["img"] ?? "assets/img/placeholder/landscape.jpg";
	$teaser = $project["teaser"];
	$description = $project["description"];
	$slug = $project["slug"];
	$slug = $project["slug"];
	$github = $project["links"][1];

 ?>

<project-card>
	<figure>
		<img src="<?=$img?>" alt="<?=$title?>">
	</figure>
	<card-content>
		<h3 class="lg-type strong-type colored-type"><?=$title?></h3>
		<p class="display-type"><?=$teaser?></p>
		<p class="display-type"><?=$description?></p>

		<!-- <a href="<?="?page=" . $url?>" class="tech-type">View <?=$title?> live</a> -->
		<a href="?page=project&slug=<?=$slug?>" class="tech-type">Read Case Study</a>
		<!-- <a href="<?=$github?>" class="tech-type">Browse on Github</a> -->
	</card-content>
</project-card>