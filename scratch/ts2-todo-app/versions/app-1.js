const households = [
	{
		id: 1,
		name: "Lothario",
		round: 2,
		subhood: "Pleasantview",
		members: [
			"Don Lothario",
		],
		notes: "",
	},
	{
		id: 2,
		name: "Goth",
		round: 2,
		subhood: "Pleasantview",
		members: [
			"Mortimer Goth",
			"Cassandra Goth",
			"Alexander Goth"
		],
		notes: "Move Morty and Alex in with Dina?",
	},
	{
		id: 3,
		name: "Caliente",
		round: 2,
		subhood: "Pleasantview",
		members: [
			"Nina Caliente",
			"Dina Caliente",
		],
		notes: "If Mortimer moves in, move Nina to the Pleasant Vista Apts",
	},
	{
		id: 4,
		name: "Broke",
		round: 2,
		subhood: "Pleasantview",
		members: [
			"Brandi Broke",
			"Dustin Broke",
			"Beau Broke",
			"Bobby Broke"
		],
		notes: "Brandi just had Bobby Broke and is into Darren",
	},
	{
		id: 5,
		name: "Dreamer",
		round: 1,
		subhood: "Pleasantview",
		members: [
			"Darren Dreamer",
			"Dirk Dreamer",
		],
		notes: "",
	},
	{
		id: 6,
		name: "Pleasant",
		round: 1,
		subhood: "Pleasantview",
		members: [
			"Daniel Pleasant",
			"Mary-Sue Pleasant",
			"Angela Pleasant",
			"Lilith Pleasant"
		],
		notes: "",
	},
];

const original = [...households];

var count = 6;
var currentRound = 1;

// returns the whole object
function getHouseholdById(id) {
  return households.find((h) => h.id === id);
}

// returns the index
function getIndexById(id) {
	return households.findIndex((h) => h.id === id);
}

// just tells me what i did - crud, etc
function printFeedback(note = "") {
	console.log("*** ", note);
	console.log(households);
}


function printStats() {

	function printRoundStats() {
		// count the number of played households in the round
		let playedHouseholds = households.filter((h) => h.round != currentRound).length;
		let message = "";

		console.log("*** ", `${playedHouseholds}/${households.length} households played in round ${currentRound}.`);

	 if (playedHouseholds == households.length) {
			currentRound++;
			console.log("***", `Starting round: ${currentRound}`)
		}
	}

	printRoundStats();
}

function addRound(id, notes = "") {
	// increment the round
	getHouseholdById(id).round++;
	// add notes
	getHouseholdById(id).notes = notes;
	//output the feedback
	printFeedback(`Played round ${currentRound} of the ${getHouseholdById(id).name} household.`);
	printStats();
}

// new households start at the current round number
function createHousehold(name, subhood, notes = "", ...members) {
	var household = {
		id: ++count,
		name: name,
		round: currentRound,
		subhood: subhood,
		members: members,
		notes: notes,
	}
	households.push(household);
	printFeedback(`Created the ${name} household.`);
}

function updateHousehold(id, key, ...val) {
	// make a copy so i can ref it if the household ends up deleted
	let householdCopy = getHouseholdById(id);

	getHouseholdById(id)[key] = val;
	// using dot notation would create a "key" key instead of passing in the argument. COOL!

	printFeedback(`Updated the ${getHouseholdById(id).name} household.`);
	console.log(getHouseholdById(id));

	// if members ends up being 0 (last member dies or moves into a new household), delete the household

	if (getHouseholdById(id).members.length == 0) {
		printFeedback(`There are no members of the ${getHouseholdById(id).name} household.`);
		deleteHousehold(id);
	}
}


// deletes the household entirely (if someone moves into a new house, etc);
function deleteHousehold(id) {
	let name = getHouseholdById(id).name;
	let index = getIndexById(id);
	households.splice(index, 1);

	printFeedback(`Deleted the ${name} household.`);
}


console.log("Original Households (6)", original);

createHousehold("Langerak", "Pleasantview", "Move in with Daniel (if he moves out?)", "Kaylynn Langerak");
deleteHousehold(7);
addRound(5, "Send Dirk to college next round");
addRound(6, "Mary-Sue caught Daniel cheating. Breakup?");
updateHousehold(2, "members", "Mortimer Goth", "Cassandra Goth", "Alexander Goth", "Don Lothario");
updateHousehold(1, "members");
createHousehold("Burb", "Pleasantview", "Move into town", "John Burb", "Jennifer Burb", "Lucy Burb");
createHousehold("Oldie", "Pleasantview", "Move into town", "Herb Oldie", "Coral Oldie");
