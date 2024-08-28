<h1>My Albums</h1>

<?php 

	$myAlbums = file_get_contents('data/my-albums.json');
	$myAlbums = json_decode($myAlbums, true);

	print_r($myAlbums);
?>

<ul class="album-list">

	<?php

	echo ("Start of list -- ");

	foreach (array_reverse($myAlbums) as $album) { ?>

		<?php echo ("list item:"); ?>

		<li class="album my-album">

			<?php include('modules/album-card/template.php'); ?>
		</li>

	<?php } ?>

</ul>