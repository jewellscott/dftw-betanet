<?php 

	// constraints

	// convert input values to numbers before doing 	math
	// keep inputs and outputs separate from the 		numerical conversions and other processing
	// generate a single output statement with line 	breaks in the appropriate spots

	// challenges
	
	// ensure the inputs entered are numeric 				values. don't allow the user to proceed if 		the value entered is not numeric
	// don't allow the user to enter a negative 			number
	// break the program into functions that do the 	computations
	// automatically update the values when any 			value changes

	$output = null;

	if(isset($_POST["submit"])) {
		$num1 = floatval($_POST["num1"]);
		$num2 = floatval($_POST["num2"]);

		function addNums($num1, $num2) {
			return $num1 + $num2;
		}

		function subtractNums($num1, $num2) {
			return $num1 - $num2;
		}

		function multiplyNums($num1, $num2) {
			return $num1 * $num2;
		}

		function divideNums($num1, $num2) {
			return $num1 / $num2;
		}

		// function calculate($num1, $num2) {
		// 	$added = addNums($num1, $num2) 
		// 	$subtracted = subtractNums($num1, $num2);
		// 	$multiplied = multiplyNums($num1, $num2);
		// 	$divided = divideNums($num1, $num2); 
		// }

		function generateOutput($num1, $num2) {
			$added = addNums($num1, $num2);
			$subtracted = subtractNums($num1, $num2);
			$multiplied = multiplyNums($num1, $num2);
			$divided = divideNums($num1, $num2); 

			return nl2br("$num1 + $num2 = $added" 
					. "\r\n" . 
					"$num1 - $num2 = $subtracted" 
					. "\r\n" . 
					"$num1 * $num2 = $multiplied"
					. "\r\n" . 
					"$num1 / $num2 = $divided");
		}

		$output = generateOutput($num1, $num2);
	}
?>

<form method="POST" class="e4p">
	<input-wrapper>
		<fieldset>
			<label for="num1">
				What is the first number?
			</label>

			<input type="number" name="num1" min="0" step="any" required>
			</fieldset>
		</fieldset>

		<fieldset>
			<label for="num2">
				What is the second number?
			</label>

			<input type="number" name="num2" min="0" step="any" required>
			</fieldset>
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