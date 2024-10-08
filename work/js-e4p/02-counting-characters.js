function run() {
	return countCharacters();
}

// prompt user for string
// count characters in the string
// construct a message with both
// return the message

function countCharacters() {
	var inputString = prompt("What is the input string?");
	var stringLength = inputString.length;
	var message = (stringLength > 1) 
		? `${inputString} has ${stringLength} characters.` 
		: `${inputString} has ${stringLength} character.`;
	if (inputString == "") {
		alert("Please enter a string.");
		countCharacters();
	}
	if (inputString) {
		alert(message);
	}
}