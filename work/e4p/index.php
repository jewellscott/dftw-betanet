<?php include '../../templates/partials/header.php'; ?>

<?php 
	
	$categories = getData('categories.json');

?>


	<main class="page-main">
		<div class="inner-column">


				<h1 class="xl-type rainbow">Exercises for Programmers</h1>

				<?php foreach ($categories as $category) { ?>

					<?php include 'components/exercise-list.php'; ?>

				<?php }; ?>
				
		</div>
	</main>

	<?php include '../../templates/partials/footer.php'; ?>
</div>
</body>
</html>

