function run() {
	return slicify();
}

// ask for # of people
// ask for # of pizzas
// ask for # of slices per pizza
// calculate # of slices per person (evenly)
// calculate leftovers
// generate output (with pluralization)
// alert output


function slicify() {
	var peoplePrompt = "How many people?"
	var pizzasPrompt = "How many pizzas do you have?"
	var slicesPrompt = "How many slices per pizza?"
	var errorMessage = "Oops! Let's try that again. Enter a numeric value."
	var output = "";

	var people = prompt(peoplePrompt);
	if (people == "") {
		alert(errorMessage);
		prompt(peoplePrompt);
	} else {
		people = parseInt(people);
	}

	var pizzas = prompt(pizzasPrompt);
	if (pizzas == "") {
		alert(errorMessage);
		prompt(pizzasPrompt);
	} else {
		pizzas = parseInt(pizzas);
	}

	var slices = prompt(slicesPrompt);
	if (slices == "") {
		alert(errorMessage);
		prompt(slicesPrompt);
	} else {
		slices = parseInt(slices);
	}

	// total amount of slices
	var totalSlices = pizzas * slices;
	// calculate (full) slices per person
	var slicesPerPerson = Math.floor(totalSlices / people);
	// calculate leftovers
	var leftovers = (totalSlices % people);

	

	var output = `
		${peoplePrompt} ${people}
		${pizzasPrompt} ${pizzas}

		${people} ${people == 1 ? "person" : "people"} with ${pizzas} ${pizzas == 1 ? "pizza" : "pizzas"} (with ${slices} ${slices == 1 ? "slice" : "slices"} each.)
		Each person gets ${slicesPerPerson} ${slicesPerPerson == 1 ? "slice" : "slices"} of pizza.
		There ${leftovers == 1 ? "is" : "are"} ${leftovers} leftover ${leftovers == 1 ? "piece" : "pieces"}.
	`;


	if (people && pizzas && slices) {
		alert(output);
	}
}