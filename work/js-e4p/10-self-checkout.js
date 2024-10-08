function run() {
	return selfCheckout(); 
}

// prompt for prices/quantities of three items
	// validate
// calculate subtotal
// calculate tax
// output items with quantity/total 
// output subtotal, tax and total


// each item - object
// all items - array

// 


function getItem(num) {
	var itemNum = num;
	var item = {};
	item.id = num;
	var errorMessage = "Oops! Please enter a numerical value."

	item.name = prompt(`Enter the name of item ${itemNum}`);
	if (item.name === "") {
		alert("Oops! Please enter a name");
		item.name = prompt(`Enter the name of item ${num}`);
	}

	item.price = prompt(`Enter the price of item ${itemNum}`);
	if (isNaN(parseFloat(item.price))) {
		alert(errorMessage);
		item.price = prompt(`Enter the price of item ${num}`);
	} else {
		item.price = parseFloat(item.price);
	}

	item.quantity = prompt(`Enter the quantity of item ${itemNum}`);
	if (isNaN(parseInt(item.quantity))) {
		alert(errorMessage);
		item.quantity = prompt(`Enter the quantity of item ${num}`);
	} else {
		item.quantity = parseInt(item.quantity);
	}

	if (item.name && item.price && item.quantity) {
		item.subTotal = item.price * item.quantity;
	}

	return item;
}


function selfCheckout() {
	var date = new Date();

	var item1 = getItem(1);
	var item2 = getItem(2);
	var item3 = getItem(3);

	var output = [];
	var subTotal = 0;
	var taxRate = .055;
	var taxPercentage = 5.5;
	var total = subTotal + (subTotal * taxRate);

	var items = [item1, item2, item3];

	output.push("*** Receipt ****");
	output.push(date);
	output.push('-----');


	items.forEach((item) => {
		var outputLine = `${item.name}: ${item.quantity} @ $${(item.price).toFixed(2)} ea,  $${(item.subTotal).toFixed(2)}`;
		output.push(outputLine);
		subTotal += item.subTotal;
	})

	output.push('-----');
	output.push(`Subtotal: $${subTotal.toFixed(2)}`);
	output.push(`Tax: $${(subTotal * taxRate).toFixed(2)} (${taxPercentage}%)`);
	output.push(`Total: $${(subTotal + (subTotal * taxRate)).toFixed(2)}`)
	alert(output.join(`\n`));
}