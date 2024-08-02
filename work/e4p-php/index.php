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

</style>
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

<h1><a href="?">Retirement Calculator</a></h1>


<form method="POST">

	<div class="field">
		<label><h2>What is your current age?</h2></label>
		<input type="number" name="currentAge" min="0" value="<?=$currentAge?>">
	</div>

	<div class="field">
		<label><h2>At what age would you like to retire?</h2></label>
		<input type="number" min="0" name="retirementAge" value="<?=$retirementAge?>">
	</div>

	<button type="submit" name="submit">
		Submit
	</button>

	<div class="output">
		<?php

			if (isset($_POST["submit"])) {
				echo "<p>$output</p>";
			}
		?>
	</div>

</form>
