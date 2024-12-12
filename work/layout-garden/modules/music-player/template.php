<?php 

	$json = file_get_contents('modules/music-player/data.json');
	$songs = json_decode($json, true);

?>

<music-player>
	<player-meta>
		<h1 class="playlist-title text-xl weight-300">
			The Garden
		</h1>
		<p class="playlist-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur, dicta accusamus enim cum asperiores praesentium sed quibusdam in quidem velit adipisci voluptas ipsa consequatur quam exercitationem quis ad harum et?</p>
	</player-meta>
	<player-main>
		<album-art>
			<picture>
				<img id="mp-album-art" src="https://is1-ssl.mzstatic.com/image/thumb/Music118/v4/92/62/09/9262094e-9d5d-bd60-dde7-478a5e5d081a/5054526415447_1.jpg/1200x1200bf-60.jpg" alt="">
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