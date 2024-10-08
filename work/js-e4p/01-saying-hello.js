// the function that runs with the button
function run() {
	return sayHello();
}
// prompt user for name
	// if empty, prompt user for name
	// if cancel, cancel the function
// construct message
// output message

function sayHello() {
	var name = prompt("What is your name?");
	if (name) {
		var message = "Nice to meet you, " + name + "!";
		alert(message);
	} 
	if (name == "") {
		alert("Please enter your name.");
		sayHello();
	}
};