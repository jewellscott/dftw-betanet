function run() {
	return generateQuotation(); 
}

// prompt for quote
// prompt for author
// construct quotation
// alert quotation

function generateQuotation() {
	var quote = prompt("What is the quote?");
	if (quote === "") {
		alert("Please enter a quote.");
		generateQuotation();
	}

	var author = prompt("Who said it?"); 
	if (author === "") {
		alert("Please enter an author.");
		generateQuotation();
	}

	var message = author + " says, \"" + quote + "\"";

	alert(message);
}