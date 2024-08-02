<?php

function getInspo() {
	$colorInspo = scandir('inspo/colors');
	array_splice($colorInspo, 0, 3);

	shuffle($colorInspo);

	// Loop through the contents and create a picture element

	echo "<ul class='inspo-pics'>";

	foreach($colorInspo as $image) {
		$imgSrc = BASE_URL . "inspo/inspo/colors/" . $image;
		echo "<li><picture><img src='$imgSrc'></picture></li>";
	};

	echo "</ul>";
}
?>

<?php include '../templates/partials/header.php' ?>

<main class="page-main">
	<div class="inner-column">
		<h1 class="xl-type top-level rainbow">Inspo</h1>
	</div>

	<div class="inspo-container">
		<?php getInspo(); ?>
	</div>
</main>


<?php includeFile('templates/partials/footer.php'); ?>
