<?php 

	$albums = file_get_contents('data/albums.json');
	$albums = json_decode($albums, true);

?>

<h1>Albums</h1>

<ul class="album-list">

	<?php

	foreach (array_reverse($albums) as $album) { ?>

		<li class="album">

			<?php include('modules/album-card/template.php'); ?>
		</li>

	<?php } ?>

</ul>