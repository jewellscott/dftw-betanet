import { phraseParts, characters } from './data.js';
import { getRandomArrayItem } from './helpers.js';

function createPassphrase() {

	// var minChars = parseInt(prompt("What's the minimum length?")) || 8;
	// var minSpecialChars = parseInt(prompt("How many special characters?")) || 1;
	// var minNums = parseInt(prompt("How many numbers?")) || 2;

	var minChars = 8;
	var minSpecialChars = 1;
	var minNums = 2;

	let nums = [];
	let specialChars = [];

	// generate a random string

	let modifier = getRandomArrayItem(phraseParts.modifiers);
	// get a subject
	let subject = getRandomArrayItem(phraseParts.subjects);
	// smash em together
	let basePhrase = modifier + subject;

	// add numbers

	for (let i = 0; i < minNums; i++) {
		nums.push(getRandomArrayItem(characters.numbers));
	}

	for (let i = 0; i < minSpecialChars; i++) {
		specialChars.push(getRandomArrayItem(characters.specialChars));
	}

	let passphrase = modifier + specialChars + subject + nums.join("");

	return passphrase;
}

console.log(createPassphrase());


// console.log(createPassphrase());


// var minChars = parseInt(prompt("What's the minimum length?")) || 8;
// var minSpecialChars = parseInt(prompt("How many special characters?")) || 2;
// var minNums = parseInt(prompt("How many numbers?")) || 2;

// generate a random string
// add numbers
// add special characters

// console.log(`Your password is ${}`);
// console.log(minChars, minSpecialChars, minNums);
