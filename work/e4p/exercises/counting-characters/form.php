<?php 

	$name = $_POST["name"] ?? "";
	$output = "Please enter your name.";

	

	// x prompt for an input string
	// x display the output 
		// x input string
		// x number of chars the string contains

	
	// constraints
		// x output contains og string
		// x single output statement to construct the output
		// x use built-in function to determine length of the string

	// challenges
		// if the user enters nothing, state that the user must enter something into the program
		// update the character count every time a key is presed 


	function generateMessage($name) { 
		if (strlen($name) > 1) {
			$num = " characters.";
		} else {
			$num = " character.";
		}

		return ucfirst($name) . " has " . strlen($name) . $num;
	}

	if(isset($_POST["submit"])) {

		if (!empty($_POST["name"])) {
			$name = $_POST["name"];
			$output = generateMessage($name);
		}
	}

?>

<form method="POST" class="e4p">
	<input-wrapper>
		<fieldset>
			<label for="name">What's your name?</label>

			<input 
				id="name" type="text" 
				name="name" value="<?=$name?>"
			>
		</fieldset>

		<fieldset>
			<button class="tech-type" type="submit" name="submit">
			Submit
			</button>
			<a class="tech-type-invert" href="work/e4p/?exercise=<?=$id?>">Reset</a>
			</input>
		</fieldset>
	</input-wrapper>

	<output-wrapper>
		  <output name="result">
		  		<p><?=$output?></p>
		  </output>
	</output-wrapper>
</form>