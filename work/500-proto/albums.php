<?php include('data/album-data.php'); ?>

<h1>Albums</h1>

<ul class="album-list">

	<?php

	foreach (array_reverse($album_data) as $album) { ?>

		<li class="album">
	
			<album-card>

				<?php 
					$rank = str_pad($album["rank"], 3, '0', STR_PAD_LEFT);
				?>

				<a href='?page=album&album=<?=$album["rank"]?>'>

					<h2 class="rank"><?=$rank?></h2>

					<picture>
						<img 
						src="<?=$album["coverUrl"]?>" 
						alt="<?=$album["title"]?>, <?=$album["artist"]?>">
					</picture>

					<h2 class="title"><?=$album["title"]?></h2>
					<h3 class="artist"><?=$album["artist"]?></h3>
					<h4 class="year"><?=$album["year"]?></h4>
				</a>

			</album-card>
		</li>

	<?php } ?>

</ul>