<?php include '../../templates/partials/header.php'; ?>

<?php 

	$categories = getData('categories.json');
	$exercises = getData('exercises.json');
	$foundExercise = null;

	if (isset($_GET["exercise"])) {
		$id = $_GET["exercise"];

		foreach($exercises as $exercise) {
			if ($exercise["id"] === $id) {
				$foundExercise = $exercise;
			}
		}
	};

	
	$pageTitle = $foundExercise["title"] ?? "Exercises for Programmers";

?>


	<main class="page-main">
		<div class="inner-column">

				<!-- change dynamically into exercise title -->
				<h1 class="xl-type rainbow"><?=$pageTitle?></h1>

				<section>

					<?php 
						if (isset($_GET["exercise"])) {
						include "exercises/$id/form.php";
					};
					?>

				</section>

				<?php foreach ($categories as $category) { ?>

					<?php include 'components/exercise-list.php'; ?>

				<?php }; ?>
				
		</div>
	</main>

	<?php include '../../templates/partials/footer.php'; ?>
</div>
</body>
</html>

