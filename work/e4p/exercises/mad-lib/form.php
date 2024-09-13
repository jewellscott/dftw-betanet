<?php 

	// use a single output statement
	// use string interpolation

	$output = "";
	$errors = [];

	$noun = $_POST["noun"] ?? "";
	$verb = $_POST["verb"] ?? "";
	$adverb = $_POST["adverb"] ?? "";
	$adjective = $_POST["adjective"] ?? "";

	$fields = [
		[
			"id" => "noun",
			"label" => "Enter a noun:",
			"type" => "text",
			"helper" => "A noun is...",
			"errorMessage" => "Please enter a noun."
		],
		[
			"id" => "verb",
			"label" => "Enter a verb:",
			"type" => "text",
			"helper" => "A verb is...",
			"errorMessage" => "Please enter a verb."
		],
		[
			"id" => "adjective",
			"label" => "Enter a adjective:",
			"type" => "text",
			"helper" => "An adjective is...",
			"errorMessage" => "Please enter an adjective."
		],
		[
			"id" => "adverb",
			"label" => "Enter an adverb:",
			"type" => "text",
			"helper" => "An adverb is...",
			"errorMessage" => "Please enter an adverb."
		],
	];


	function generateMadLib($noun, $verb, $adjective, $adverb) {

		return "The $noun tried to $verb $adverb, but the $adjective server threw an unexpected error.";
	}

	if (isset($_POST["submit"])) {
		// if noun is empty, then an error needs to be displayed 

		if (empty($_POST["noun"])) {
			$errors["noun"] = true;
		} 
		if (empty($_POST["verb"])) {
			$errors["verb"] = true;
		}

		if (empty($_POST["adverb"])) {
			$errors["adverb"] = true;
		}

		if (empty($_POST["adjective"])) {
			$errors["adjective"] = true;
		} 

		if (!empty($_POST["noun"]) 
			&& !empty($_POST["verb"]) 
			&& !empty($_POST["adjective"]) 
			&& !empty($_POST["adverb"])) {
				$output = generateMadlib($noun, $verb, $adjective, $adverb);
			};
	}
?>

<form method="POST" class="e4p">
	<input-wrapper>
		<fieldset>
			<?php foreach($fields as $field) { 
				$id = $field["id"];
				$type = $field["type"];
				$label = $field["label"];
				$helper = $field["helper"];
				$errorMessage = $field["errorMessage"];
				$hasError = $errors[$id] ?? false;
				$value = $_POST[$id] ?? "";
			?>

				<input-field>
					<label for="<?=$id?>">
						<?=$label?>
					</label>

					<input 
						type="<?=$type?>"
						id="<?=$id?>"
						name="<?=$id?>"
						value="<?=$value?>"
					>

					<?php if ($hasError) { ?>
						<error-message>
							<?=$field["errorMessage"];?>
						</error-message>
					<?php } ?>
				</input-field>
			<?php } ?>
		</fieldset>

		<actions-wrapper>
			<button class="tech-type" type="submit" name="submit">
			Submit
			</button>
			<button class="tech-type-invert" type="reset" name="reset">
			<a href="work/e4p/?exercise=<?=$id?>">Reset</a>
			</button>
		</actions-wrapper>
	</input-wrapper>

	<output-wrapper>
		  <output name="result" for="">
		  		<?php
					echo "<p>$output</p>";
				?>
		  </output>
	</output-wrapper>
</form>