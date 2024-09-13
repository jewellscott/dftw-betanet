<?php 

	// keep input, string concatenation, and output separate

	// initalize values 

	$name = "";
	$greeting = "";
	$errors = [];
	$output = "";

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
	}

	// handle user input

	if(isset($_POST["submit"])) {


		if ($_POST["name"] != "") {
			$name = $_POST["name"];
			$output = generateGreeting($name);

		} else {
			$errors[] = "Please enter your name.";
		}
	}

	// update the ui 

?>

<form method="POST" class="e4p">
	<input-wrapper>
		<fieldset>

			<label for="name">What's your name?</label>

			<input id="name" type="text" name="name">
		</fieldset>

		<?php if ( isset($errors) ) { ?>
			<ul>
				
				<?php foreach($errors as $error) {?>

				<li>
					<error-message>
						<?=$error?>
					</error-message>
				</li>

				<?php } ?>

			</ul>
		<?php } ?>


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
		  <output name="result" for="name">
		  		<?php
					if (isset($_POST["submit"])) {
						echo $output;
					}
				?>
		  </output>
	</output-wrapper>
</form>