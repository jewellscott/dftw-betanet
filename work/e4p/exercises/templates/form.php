<?php 

	// initialize all important data
	$output = null;
	$name = "";

	// handle form

	if(isset($_POST["submit"])) {
		$arg = $_POST["arg"];

		$output = functionName($arg);
	}

	// update output
?>

<form method="POST" class="e4p">
	<input-wrapper>
		<fieldset>
			<label for="name">
				What's your name?
			</label>

			<input id="name" type="text" name="name" required>
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
		  <output name="result" for="">
		  		<?php
					echo "<p>$output</p>";
				?>
		  </output>
	</output-wrapper>
</form>