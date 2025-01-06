<?php 
	$json = file_get_contents('data/goals.json');
	$goalsData = json_decode($json, true);
	$lastUpdated = $goalsData["lastUpdated"];
 ?>

<goal-breakdown>
	<?php foreach ($goalsData["content"] as $section) {?>
		<section>
			<h2 class="attention-voice">
				<?=$section["time"]?>
			</h2>
			<ol class="callout">
				<?php foreach ($section["goals"] as $goal) {?>
				<li>
					<p><?=$goal?></p>
				</li>
				<?php } ?>
			</ol>
		</section>
	<?php } ?>
</goal-breakdown>