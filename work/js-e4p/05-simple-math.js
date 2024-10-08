function run() {
	return generateMath();
}

// prompt for a number
	// convert to a float
// prompt for another number
	// convert to a float
// calculate expressions
// construct a message
// output the message

function generateMath() {
	var num1 = prompt("What is the first number?");
	if (num1 == "") {
		alert("Let's try that again.");
		var num1 = prompt("What is the first number?");
	}

	var num2 = prompt("What is the second number?");
	if (num2 == "") {
		alert("Let's try that again.");
		var num2 = prompt("What is the second number?");
	}

	num1 = parseFloat(num1);
	num2 = parseFloat(num2);

	var add = num1 + num2;
	var subtract = num1 - num2;
	var multiply = num1 * num2;
	var divide = num1 / num2;

	// i have to generate a single output statement, but i would like to use an array and delimit with a line break
	var output = `What is the first number? ${num1} \n What is the second number? ${num2} \n ${num1} + ${num2} = ${add} \n ${num1} - ${num2} = ${subtract} \n ${num1} * ${num2} = ${multiply} \n ${num1} / ${num2} = ${divide}`;

	if (num1 && num2) {
		alert(output);
	}
}