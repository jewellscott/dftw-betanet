<?php 

	$title = $blog["title"];
	$description = $blog["description"];
	$slug = $blog["slug"];
	$published = $blog["published"];

 ?>

<blog-card>
		<a href="?page=post&slug=<?=$slug?>">
			<h3 class="lg-type strong-type colored-type">
				<?=$title?>
			</h3>
		</a>
	<p class="display-type"><?=$published?></p>
</blog-card>