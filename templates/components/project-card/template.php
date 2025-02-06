<?php 

	$title = $project["title"];
	$img = $project["img"] ?? "../../../assets/img/placeholder/landscape.jpg";
	$teaser = $project["teaser"];
	$description = $project["description"];
	$slug = $project["slug"];

 ?>

<project-card>
	<figure>
		<img src="<?=$img?>" alt="<?=$title?>">
	</figure>
	<card-content>
		<h3 class="lg-type strong-type colored-type"><?=$title?></h3>
		<p class="display-type"><?=$teaser?></p>
		<!-- <a href="<?="?page=" . $url?>" class="tech-type">View <?=$title?> live</a> -->
		<a href="?page=project&slug=<?=$slug?>" class="tech-type">Case Study</a>
	</card-content>
</project-card>