<?php // include('data/album-data.php'); ?>


<?php 

		$greatestAlbums = file_get_contents('data/albums.json');
		$greatestAlbums = json_decode($greatestAlbums, true);

		$myAlbums = file_get_contents('data/my-albums.json');
		$myAlbums = json_decode($myAlbums, true);
		
?>


<?php 

	if(isset($_GET["album"])) {
		$this_album_id = $_GET["album"];
		// change to id later
	}

	foreach($greatestAlbums as $album) {
		if ($this_album_id == $album["id"]) {
			$this_album = $album;

			$rank = str_pad($this_album["rank"], 3, '0', STR_PAD_LEFT);
		}
	}

	foreach($myAlbums as $album) {
		if ($this_album_id == $album["id"]) {
			$this_album = $album;
		}
	}
?>

<?php if (isset($this_album)) { ?>

	<album-detail>

		<?php if (isset($this_album["rank"])) {?>
			<span class="rank"><?=$rank?></span>
		<?php } ?>

		<album-content>

				<picture>
					<img src="<?=$this_album["coverUrl"];?>" alt="">
				</picture>

			<div class="right">
				<album-stats>

					<h1 class="title"><?=$this_album["title"];?></h1>
					<h2 class="artist"><?=$this_album["artist"];?></h2>
					<h3 class="year"><?=$this_album["year"];?></h3>
					
				</album-stats>

				<album-description>
					<p><?=$this_album["description"];?></p>
				</album-description>
				
			</div>
			
		</album-content>

	</album-detail>

<?php } else { ?>
	<h1>Sorry! No album found. </h1>
	<p>Go back to the <a href="?page=albums">albums</a>.</p>
<?php } ?>