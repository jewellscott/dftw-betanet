function run() {
	return calculatePaint();
}

// prompt for length
// prompt for width
// calculate area
// calculate gallons needed and round up
// construct output
// alert output

function calculatePaint() {
	const gallonsPerSF = 350;
	var errorMessage = "Oops! Let's try that again. Please enter a numerical value."

	var length = prompt("What is the length?");
	if(isNaN(parseInt(length))) {
		alert(errorMessage);
		length = prompt("What is the length?");
	} else {
		length = parseInt(length);
	}

	var width = prompt("What is the width?");
	if(isNaN(parseInt(width))) {
		alert(errorMessage);
		width = prompt("What is the width?");
	} else {
		width = parseInt(width);
	}

	var area = length * width;
	var gallonsNeeded = Math.ceil(area / gallonsPerSF);

	var output = `You will need to purchase ${gallonsNeeded} ${gallonsNeeded == 1 ? "gallon" : "gallons"} of paint to cover ${area} square feet.`;

	if (length && width) {
		alert(output);
	}
}