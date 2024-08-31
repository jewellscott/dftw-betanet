<?php include '../../../../templates/partials/header.php'; ?>



<?php 

	$currentAge = 0;
	$retirementAge = 0;

	if (isset($_POST["submit"])) {

		if (isset($_POST["currentAge"])) {
			$currentAge = intval($_POST["currentAge"]);
		}

		if (isset($_POST["retirementAge"])) {
			$retirementAge = intval($_POST["retirementAge"]);
		}

		$difference = $retirementAge - $currentAge;
		$currentYear = date("Y");
		$retirementYear = $currentYear + $difference;
		$output = "";

		if ($difference <= 0) {
			$output = "<p>You can already retire!</p>";
		} else {
			$output = "<p>You have " . $difference . " years left until you can retire.</p><p>It's " . $currentYear . ", so you can retire in " . $retirementYear . ".</p>";
		}
	}

?>

<main class="page-main">
	<div class="inner-column">
		<!-- Add some breadcumbs back to E4P... --> 

		<h1 class="xl-type rainbow">Retirement Calculator</h1>

		<form method="POST" class="e4p">

			<div class="input-wrapper">
				<fieldset>
					<label><h2>What is your current age?</h2></label>
					<input type="number" name="currentAge" min="0" value="<?=$currentAge?>">
			
					<label><h2>At what age would you like to retire?</h2></label>
					<input type="number" min="0" name="retirementAge" value="<?=$retirementAge?>">
				</fieldset>

				<fieldset>
					<button class="tech-type" type="submit" name="submit">
					Submit
					</button>
				</fieldset>
			</div>

			<div class="output-wrapper">
				  <output name="result" for="currentAge retirementAge">
				  		<?php
							if (isset($_POST["submit"])) {
								echo "<p>$output</p>";
							}
						?>
				  </output>
			</div>
		</form>
	</div>
</main>

<?php include '../../../../templates/partials/footer.php'; ?>

	</div>
	</body>
</html>


<!-- 
<style>

	body {
		font-family: sans-serif;
	}



	button[type="submit"] {
		margin-block: 1em;
		padding: 1em 2em;
	}

	.output {
		font-style: italic;
	}

</style> -->

