<?php 

	require('router.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>M2C: <?=$pageData["id"]?></title>
	<meta name='description' content='Mockup to Code Challenge'>

	<link rel='stylesheet' href='styles/site.css'>
</head>

<body class="<?=$pageData["id"]?>">

	<header class="site-header">
		<inner-column>
			<?php include('modules/site-header/template.php'); ?>
		</inner-column>
	</header>

	<main>

		<!-- <h1><?=$pageData["id"]?></h1> -->

		<?php 

			function buildPage($page) {

				foreach ($page["sections"] as $section) {

					include("modules/$section[id]/template.php");

				}
			}

			buildPage($pageData);

		?>

		<!-- <section class="student-welcome">
			<inner-column>
				<?php include('modules/student-welcome/template.php'); ?>
			</inner-column>
		</section> -->

		<!-- <section class="student-welcome">
			<inner-column>
				<?php include('modules/student-welcome/template.php'); ?>
			</inner-column>
		</section>
 -->
		<!-- <section class="updates">
			<inner-column>
				<?php include('modules/updates/template.php'); ?>
			</inner-column>
		</section>

		<section class="services">
			<inner-column>
				<?php include('modules/services/template.php'); ?>
			</inner-column>
		</section>

		<section class="reviews">
			<inner-column>
				<?php include('modules/reviews/template.php'); ?>
			</inner-column>
		</section>

		<section class="cta">
			<inner-column>
				<?php include('modules/cta/template.php'); ?>
			</inner-column>
		</section>

		<section class="faq">
			<inner-column>
				<?php include('modules/faq/template.php'); ?>
			</inner-column>
		</section>
 -->
	</main>

</body>
</html>