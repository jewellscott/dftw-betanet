<?php 

	$json = file_get_contents('modules/music-player/data.json');
	$songs = json_decode($json, true);

?>

<music-player>
	<player-meta>
		<h1 class="playlist-title text-xl weight-700">
			The Garden
		</h1>
		<p class="playlist-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, dicta accusamus enim cum asperiores praesentium sed quibusdam in quidem velit adipisci voluptas ipsa consequatur quam exercitationem quis ad harum et?</p>
	</player-meta>
	<player-main>
		<album-art>
			<picture>
				<img id="mp-album-art" src="https://placehold.co/500x500" alt="">
			</picture>
		</album-art>
		<playlist id="mp-playlist">
			<ul class="songs">
				<?php foreach($songs as $song) { ?>
					<li>
						<song-card>
							<picture>
								<img src="<?=$song["album_art_url"]?>" alt="">
							</picture>
							<song-details>
								<div class="base-info">
									<p><?=$song["title"]?></hp>
									<p class="text-ms"><?=$song["artist"]?></p>
								</div>
								<p class="album"><?=$song["album"]?></p>
								<p class="duration"><?=$song["duration"]?></p>
							</song-details>
						</song-card>
					</li>
				<?php } ?>  
			</ul>
		</playlist>
	</player-main>
	<now-playing>
	</now-playing>
</music-player>