<?php 

	// keep input, string concatenation, and output separate

	$name = "";
	$greeting = "";

	function generateGreeting($name) {
		switch (ucfirst($name)) {
			case "Derek":
				$greeting = "Ahoy, $name!";
				break;
			case "Andy":
				$greeting = "What's up, $name?";
				break;
			case "Anna":
				$greeting = "Howdy, $name!";
				break;
			case "Peter":
				$greeting = "Salutations, $name!";
				break;
			case "Stephanie":
				$greeting = "Greetings, $name!";
				break;
			default:
				$greeting = "Hello, $name!";
		}
		return $greeting;
		echo $greeting;
	}

	if(isset($_POST["submit"])) {
		$name = $_POST["name"];

		$output = generateGreeting($name);
	}

	// use no variables? maybe later
	// display different greetings for different people

?>

<form method="POST" class="e4p">
	<div class="input-wrapper">
		<fieldset>

			<label for="name">What's your name?</label>

			<input type="text" name="name" required>
		</fieldset>

		<fieldset>
			<button class="tech-type" type="submit" name="submit">
			Submit
			</button>
			<button class="tech-type" type="reset" name="reset">
			<a href="work/e4p/?exercise=saying-hello">Reset</a>
			</button>
		</fieldset>
	</div>

	<div class="output-wrapper">
		  <output name="result" for="name">
		  		<?php
					if (isset($_POST["submit"])) {
						echo $output;
					}
				?>
		  </output>
	</div>
</form>