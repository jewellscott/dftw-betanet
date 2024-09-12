<?php 

	$currentAge = 0;
	$retirementAge = 0;
	$output = null;

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

<form method="POST" class="e4p">
	<input-wrapper>
		<fieldset>
			<label><h2>What is your current age?</h2></label>
			<input type="number" name="currentAge" min="0" value="<?=$currentAge?>">
			 <!-- <error-message>
				Please enter a number.
			</error-message>
 -->
			<label><h2>At what age would you like to retire?</h2></label>
			<input type="number" min="0" name="retirementAge" value="<?=$retirementAge?>">
			<!-- <error-message>
				Please enter a number.
			</error-message> -->
		</fieldset>

		<fieldset>
			<button class="tech-type" type="submit" name="submit">
			Submit
			</button>
			<button class="tech-type-invert" type="reset" name="reset">
			<a href="work/e4p/?exercise=<?=$id?>">Reset</a>
			</button>
		</fieldset>
	</input-wrapper>

	<output-wrapper>
		  <output name="result" for="currentAge retirementAge">
		  		<?php
					echo "<p>$output</p>";
				?>
		  </output>
	</output-wrapper>
</form>