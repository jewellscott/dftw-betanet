function run() {
	return generateMadLib();
}

// prompt for noun, verb, adverb, adjective
// if any one of them is blank, prompt again
// construct a story
// output story


function generateMadLib() {
	var noun = prompt("Please enter a noun.");
	if (noun === "") {
		alert("Oops! You didn't enter a noun. Let's try that again, from the top.");
		generateMadLib();
	}

	var verb = prompt("Please enter a verb.");
	if (verb === "") {
		alert("Oops! You didn't enter a verb. Let's try that again, from the top.");
		generateMadLib();
	}

	var adjective = prompt("Please enter an adjective.");
	if (adjective === "") {
		alert("Oops! You didn't enter an adjective. Let's try that again, from the top.");
		generateMadLib();
	}

	var adverb = prompt("Please enter an adverb.")
	if (adverb === "") {
		alert("Oops! You didn't enter an adverb. Let's try that again, from the top.");
		generateMadLib();
	}

	var message = `The ${noun} ${adverb} ${verb} through the ${adjective} forest, hoping for an adventure.`;

	if (noun && verb && adjective && adverb) {
		alert(message);
	}
}