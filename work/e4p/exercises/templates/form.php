<?php 

?>

<form method="POST" class="e4p">
	<div class="input-wrapper">
		<fieldset>
		
		</fieldset>

		<fieldset>
			<button class="tech-type" type="submit" name="submit">
			Submit
			</button>
			<button class="tech-type" type="reset" name="reset">
			<a href="work/e4p/exercises/saying-hello">Reset</a>
			</button>
		</fieldset>
	</div>

	<div class="output-wrapper">
		  <output name="result" for="">
		  		<?php
					if (isset($_POST["submit"])) {
						echo "<p>$output</p>";
					}
				?>
		  </output>
	</div>
</form>