<?php include '../templates/partials/header.php';

echo "<main>";

// Get the directory of inspo images


function getInspo() {

	$colorInspo = scandir('inspo/colors');
	array_splice($colorInspo, 0, 3);

	// Loop through the contents

	echo "<ul class='inspo-pics'>";

	foreach($colorInspo as $image) {

		$imgSrc = BASE_URL . "inspo/inspo/colors/" . $image;

			echo "<li><picture><img src='$imgSrc'></picture></li>";

	};

	echo "</ul>";

	// Create a picture element for each image
	// Display elements on the page

}

getInspo();

echo "</main>";
includeFile('templates/partials/footer.php');

