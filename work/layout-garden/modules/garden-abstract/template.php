<?php 

	$json = file_get_contents('modules/garden-abstract/data.json');
	$items = json_decode($json, true);

?>


<garden-abstract>
	<picture class="graphic-header">
		<img src="https://placehold.co/1000x200" alt="">
	</picture>
	<article>
		<div class="abstract">
			<div class="content">
				<h2 class="text-base text-upper weight-700">Abstract</h2>
				<p class="text-xl">The Garden is a living showcase of responsive design and interactive web elements. Like a carefully tended garden, each element grows and adapts.</p>
			</div>
			<div class="links">
				<a href="#" class="rounded-button">Style Guide</a>
			</div>
			
		</div>
		<div class="items">
			<ul>

				<?php foreach($items as $item) { ?>
					<li class="items">
						<h3 class="text-lg"><?=$item["header"]?></h3>
						<p><?=$item["content"]?></p>
					</li>
				<?php } ?>

			</ul>
		</div>
	</article>
</garden-abstract>
