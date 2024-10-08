
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


// Array.from() - static method on the Array object. returns a new, shallow-copied array 		from an iterable
	// iterables - arrays, strings, etc

	// Array.from(arrayLike, mapFn, thisArg)
		// mapFn (optional) - a function to call on every element of the array. If provided, every value to be added to the array is first passed through this function and mapFn's return value is added to the array instead.
			// mapFn arguments:
				// element: the current element being processed in the array
				// index: the index of the current element being processed in the array
		// thisArg (optional) - a value to use as `this` when executing `mapFn`


	// console.log(Array.from("Jewell"));
	// ["J","e","w", "e", "l", "l"];

	// function addStars(i) {
	// 	return "*" + i + "*";
	// }

	// console.log(Array.from("Jewell", addStars));
	// ['*J*', '*e*', '*w*', '*e*', '*l*', '*l*'];

	// console.log(Array.from([10, 20, 30], (x) => x + x));
	// [20, 40, 60];

	// console.log(Array.from([1.99, 2.99, 3.50], (x) => "$" + (x + (x * .07)).toFixed(2)));
	// ['$2.13', '$3.20', '$3.75'];


// Array.isArray() - static method. Determines whether the passed value is 		an array. returns a boolean.

	console.log(Array.isArray(("Hello World")));
	// false

	console.log(Array.isArray(playables));
	// true

// .length() - returns the number of elements in that array.

	console.log("Jewell Scott".length);
	// 12

	console.log("Jewell Scott".length - 1);
	// 11

	console.log("Jewell Scott"["Jewell Scott".length - 1]);
	// "t"

	console.log(playables.length);
	// 6

	console.log(playables[playables.length - 1].householdName);
	// Pleasant

// .push()

	

// .shift()

// .join()

// .reverse()

// .find()

// .filter()

// .forEach()

// .map()

// .reduce()



















