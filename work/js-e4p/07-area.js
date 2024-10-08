function run() {
	return calculateArea();
}


// prompt for length
// prompt for width
// calculate area
// perform conversions
// construct message
// output message

function calculateArea() {
	lengthPrompt = "What is the length of the room in feet?";
	widthPrompt = "What is the width of the room in feet?";
	errorMessage = "Oops! Let's try that again."

	const fTMConversionFactor = 0.09290304;

	var length = prompt(lengthPrompt);
	if (length === "") {
		alert(errorMessage);
		prompt(lengthPrompt);
	} else {
		length = parseFloat(length);
	}

	var width = prompt(widthPrompt);
	if (width === "") {
		alert(errorMessage);
		prompt(widthPrompt);
	} else {
		width = parseFloat(width);
	}

	var area = length * width;
	var feetToMeters = area * fTMConversionFactor;

	// function roundNumber(num) {
	// 	Math.round(num * 100) / 100;
	// }

	// decided to round to 3 decimal places

	var message = `
	${lengthPrompt} ${length}
	${widthPrompt} ${width}
	You entered the dimensions of ${length} feet by ${width} feet.
	The area is
	${+area.toFixed(3)} square feet.
	${+feetToMeters.toFixed(3)} square meters.

	`

	if (length && width) {
		alert(message);
	}

}