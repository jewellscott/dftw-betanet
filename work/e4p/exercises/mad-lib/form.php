<?php 

	// use a single output statement
	// use string interpolation

	$output = null;

	function generateMadLib($noun, $verb, $adjective, $adverb) {

		return "The $noun tried to $verb $adverb, but the $adjective server threw an unexpected error.";
	}

	if(isset($_POST["submit"])) {
		$noun = $_POST["noun"];
		$verb = $_POST["verb"];
		$adjective = $_POST["adjective"];
		$adverb = $_POST["adverb"];

		$output = generateMadlib($noun, $verb, $adjective, $adverb);
	}
?>

<form method="POST" class="e4p">
	<input-wrapper>
		<fieldset>
			<label for="noun">Enter a noun:</label>
			<input type="text" name="noun" required>
		</fieldset>

		<fieldset>
			<label for="verb">Enter a verb:</label>
			<input type="text" name="verb" required>
		</fieldset>

		<fieldset>
			<label for="adjective">Enter an adjective:</label>
			<input type="text" name="adjective" required>
		</fieldset>

		<fieldset>
			<label for="adverb">Enter an adverb:</label>
			<input type="text" name="adverb" required>
		</fieldset>

		<fieldset>
			<button class="tech-type-invert" type="submit" name="submit">
			Submit
			</button>
			<button class="tech-type" type="reset" name="reset">
			<a href="work/e4p/?exercise=<?=$id?>">Reset</a>
			</button>
		</fieldset>
	</input-wrapper>

	<output-wrapper>
		  <output name="result" for="">
		  		<?php
					echo "<p>$output</p>";
				?>
		  </output>
	</output-wrapper>
</form>