function run() {
	return calculateRetirement();
}

// prompt for age
	// convert to int 
// prompt for retirement age
	// convert to int
// calculate years until retirement
	// if positive
		// calculate retirement year
		// construct an output
	// if negative
		// output message that user can already retire
// alert output



function calculateRetirement() {
	var output = "";
	var date = new Date();
	const CURRENT_YEAR = date.getFullYear();

	var currentAge = prompt("What is your current age?"); 
	if (currentAge == "") {
		alert("Let's try that again.");
		currentAge = prompt("What is your current age?"); 
	} else {
		currentAge = parseInt(currentAge);
	}

	var retirementAge = prompt("At would age would you like to retire?"); 
	if (currentAge == "") {
		alert("Let's try that again.");
		retirementAge = prompt("At would age would you like to retire?"); 
	} else {
		retirementAge = parseInt(retirementAge)
	}

	var yearsUntilRetirement = retirementAge - currentAge;

	if (yearsUntilRetirement < 0) {
		output = "You can already retire!";
	} else {
		output = `
		What is your current age? ${currentAge}
		At would age would you like to retire? ${retirementAge}
		You have ${yearsUntilRetirement} years left until you can retire.
		It's ${CURRENT_YEAR}, so you can retire in ${CURRENT_YEAR + yearsUntilRetirement}.`;
	}

	alert(output);

}