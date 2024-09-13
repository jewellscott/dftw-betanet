<?php 

	// use a single output statement to produce			output, using appropriate string-escaping 		techniques
	// use string concatenation, not string 				interpolation or string substitution

	$output = null;
	$quote = "";
	

	function generateQuote($quote, $author) {
		return $author . " says, \"" . $quote . "\"";
	}

	if(isset($_POST["submit"])) {
		$quote = $_POST["quote"];
		$author = $_POST["author"];

		$output = generateQuote($quote, $author);
	}

?>

<form method="POST" class="e4p">
	<input-wrapper>
		<fieldset>
			<label for="quote">What is the quote?</label>
			<textarea name="quote" rows="3" required></textarea>
		</fieldset>

		<fieldset>
			<label for="author">Who said it?</label>
			<input type="text" name="author" required>
		</fieldset>

		<fieldset>
			<button class="tech-type" type="submit" name="submit">
			Submit
			</button>
			<button class="tech-type-invert" type="reset" name="reset">
			<a href="work/e4p/?exercise=saying-hello">Reset</a>
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