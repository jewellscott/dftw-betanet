// var townies = [
// 	'Marisa Bendett',
// 	'Benjamin Long',
// 	'Brandi LeTourneau',
// 	'Goopy GilsCarbo',
// 	'Christy Stratton',
// 	'Abhijeet Deppiesse',
// 	'Andrea Hogan',
// 	'Joe Carr',
// 	'Sandy Bruty',
// 	'Kennedy Cox'
// ];


// function printItem(item, index, array) {
// 	console.log((index + 1) + " - " + item);
// 	console.log(array);
// }

// townies.forEach(printItem);

// townies.forEach(function(item, index, array) {
// 	console.log((index + 1) + " - " + item);
// 	console.log(array);
// });



var playables = [
	{
		householdName: "Broke",
		householdFunds: 929,
		address: "55 Woodland Drive",
		members: [
			"Brandi Broke",
			"Dustin Broke",
			"Beau Broke",
		],
		description: "Brandi was left to raise two boys alone following her husband's suspicious pool ladder accident. With Dustin acting out, can Brandi teach young Beau to make the right choices in life?",
	},
	{
		householdName: "Caliente",
		householdFunds: 1040,
		address: "170 Main Street",
		members: [
			"Nina Caliente",
			"Dina Caliente",
		],
		description: "Was it just coincidence that the Caliente sisters arrived on the eve of Bella's disappearance? And is their interest in Mortimer physical... or fiscal?",
	},
	{
		householdName: "Dreamer",
		householdFunds: 968,
		address: "195 Main Street",
		members: [
			"Darren Dreamer",
			"Dirk Dreamer",
		],
		description: "Darren is pursuing his dream of being an artist, while his son Dirk hits the books. And Darren may have found his muse, but will his creativity be enough to win Cassandra's affection?",
	},
	{
		householdName: "Goth",
		householdFunds: 511632,
		address: "165 Sim Lane",
		members: [
			"Mortimer Goth",
			"Cassandra Goth",
			"Alexander Goth",
		],
		description: "Cassandra is ready to start a family of her own, but can she tame the town Casanova? And can Mortimer bounce back after the disappearance of his wife Bella?",
	},
	{
		householdName: "Lothario",
		householdFunds: 968,
		address: "150 Main Street",
		members: [
			"Don Lothario",
		],
		description: "Brandi was left to raise two boys alone following her husband's suspicious pool ladder accident. With Dustin acting out, can Brandi teach young Beau to make the right choices in life?",
	},
	{
		householdName: "Pleasant",
		householdFunds: 2250,
		address: "215 Sim Lane",
		members: [
			"Daniel Pleasant",
			"Mary-Sue Pleasant",
			"Angela Pleasant",
			"Lilith Pleasant"
		],
		description: "On the surface, Daniel and Mary-Sue Pleasant seem to have the perfect life, but is their love a flimsy façade? And can Angela and Lilith make the right choices when it comes to love?",
	},
];



// playables.forEach(function(item) {
// 	console.log("The " + item.householdName + " Family");
// 	console.log(item.address + " - " + "§" + item.householdFunds);
// 	console.log(item.members.join(", "));
// 	console.log("");
// });


// playables.forEach(function(item) {
// 	// if hhfunds > 1000, add it to the list
// 	if (item.householdFunds > 10000) {
// 		console.log("The " + item.householdName + " Family");
// 		console.log(item.address + " - " + "§" + item.householdFunds);
// 		console.log(item.members.join(", "));
// 		console.log("");
// 	}
// });

var richFamilies = playables.filter(function(item) {
	return item.householdFunds > 10000;
});

var middleClassFamilies = playables.filter(function(item) {
	return 1000 < item.householdFunds && item.householdFunds < 10000;
});

var poorFamilies = playables.filter(function(item) {
	return item.householdFunds < 1000;
});


// create func that accepts an array and generates markup
// heading, create a list of the items

function generateFamilies(arr, headingText) {
	var heading = document.createElement('h2');
	heading.textContent = headingText;
	document.body.appendChild(heading);	

	var ul = document.createElement('ul');
	document.body.appendChild(ul);	

	arr.forEach(function(item) {
		var listItem = document.createElement('li');
		listItem.textContent = item.householdName;
		ul.appendChild(listItem);
	});
}


// generateFamilies(richFamilies, "Rich Families");
// generateFamilies(middleClassFamilies, "Middle Class Families");
// generateFamilies(poorFamilies, "Poor Families");



const colors = ['Red', 'Orange', 'Yellow', 'Green', 'Blue', 'Indigo', 'Violet'];


// classic forEach method with anonymous function
colors.forEach(function(color) {
	return console.log('1', color);
});

// a regular function
function printColor(color) {
	return console.log('2', color);
}

// array.forEach with named function passed in
colors.forEach(printColor);

// an arrow function as an anonymous callback function
colors.forEach((color) => console.log('3', color));
// implicit return

// you can leave out the (arg) if there's only one
colors.forEach(color => console.log('4', color));

// if there is no argument, you need an empty parentheses 
colors.forEach(() => console.log('no argument'));

// if you open up a codeblock, you need to explicitly return again
colors.forEach((color) => {
	return console.log('5', color);
})