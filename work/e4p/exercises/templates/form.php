<?php 

	$output = null;

	if(isset($_POST["submit"])) {
		
		$output;
	}

?>

<form method="POST" class="e4p">
	<input-wrapper">
		<fieldset>
		
		</fieldset>

		<fieldset>
			<button class="tech-type-invert" type="submit" name="submit">
			Submit
			</button>
			<button class="tech-type" type="reset" name="reset">
			<a href="work/e4p/exercises/saying-hello">Reset</a>
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