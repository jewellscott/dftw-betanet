<?php

	// expects a $category 

	$title = $category["title"] ?? "Category";

	$exercises = getData('exercises.json');
	// $filtered = [];

	// foreach($exercises as $exercise) {;

	// 	$match = $exercise["category"] == $category["id"];
	// 	if ($match) { 
	// 		$filtered[] = $exercise;
	// 		// array_push($filtered, $exercise);
	// 	}
	// }


	$filtered = array_filter($exercises, function($e) use ($category) {
		return $e["category"] == $category["id"];
	});

	// use category to filter?
	// for each, include the card

?>

<section class="top-level-section">
	<h2 class="l-type"><?=$title?></h2>

	<?php if ($filtered) { ?>
	
	<ul class="card-list horizontal-list">
		<?php foreach ($filtered as $exercise) { ?>
			<li>
				<?php include 'exercise-card.php'; ?>
			</li>
		<?php }; ?>
	</ul>

	<?php } else { ?>
		<p>There are no exercises.</p>
	<?php } ?>
</section>