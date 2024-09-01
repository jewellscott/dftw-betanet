<?php 

	// prompt for an input string
	// display the output 
		// input string
		// number of chars the string contains

	
	// constraints
		// output contains og string
		// single output statement to construct the output
		// use built-in function to determine length of the string

	// challenges
		// if the user enters nothing, state that the user must enter something into the program
		// update the character count every time a key is presed 

?>

<form method="POST" class="e4p">
	<input-wrapper>
		<fieldset>
			<label for="name">What's your name?</label>

			<input type="text" name="name" required>
		</fieldset>

		<fieldset>
			<button class="tech-type" type="submit" name="submit">
			Submit
			</button>
			<button class="tech-type-invert" type="reset" name="reset">
			<a href="work/e4p/?exercise=counting-characters">Reset</a>
			</button>
		</fieldset>
	</input-wrapper>

	<output-wrapper>
		  <output name="result" for="">
		  		<?php
					if (isset($_POST["submit"])) {
						echo "<p>$output</p>";
					}
				?>
		  </output>
	</output-wrapper>
</form>