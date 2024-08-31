
<?php include '../templates/partials/header.php'; ?>

	<main class="page-main">
		<div class="inner-column">
			<header class="page-header">
				<h1 class="top-level xl-type rainbow">Style Guide</h1>
				<h2 class="l-type">A guide...to the styles</h2>
			</header>


		<!-- <section class="jewell-diptych">
			<?php includeFile('templates/modules/jewell-diptych.php'); ?>
			</div>
		</section>
 -->

 	<?php include '../templates/modules/type-specimen.php'; ?>

 	<?php include '../templates/modules/form-specimen.php'; ?>

	</main>


<?php include '../templates/partials/footer.php'; ?>


<style>

	.page-header {
		@media (width < 600px) {
			h1.top-level {
				line-height: 1em;
			}
		}
	}

	.inner-column {
		@media (width < 700px) {
			h2.top-level {
				line-height: 1em;
			}
		}

	form {
		background-color: #eceff6;
		padding: 20px;
	}
</style>
