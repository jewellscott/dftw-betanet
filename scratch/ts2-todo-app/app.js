const households = [
	{
		id: 0,
		name: "Lothario",
		round: 2,
		subhood: "Pleasantview",
		members: [
			"Don Lothario",
		],
		notes: "",
	},
	{
		id: 1,
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
		id: 2,
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
		id: 3,
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
		id: 4,
		name: "Dreamer",
		round: 2,
		subhood: "Pleasantview",
		members: [
			"Darren Dreamer",
			"Dirk Dreamer",
		],
		notes: "",
	},
	{
		id: 5,
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

var count = 5;
var currentRound = 1;

// just tells me what i did - crud, etc
function printFeedback(note = "") {
	console.log("*** ", note);
	console.log(households);
}


function printStats() {

	function printRoundStats() {
		// count the number of played households in the round
		let playedHouseholds = households.filter((h) => h.round == currentRound).length;
		let message = "";

		if (playedHouseholds > 0) {
			// if there are more households in the round
			console.log("*** ", `${playedHouseholds}/${households.length} households left in round ${currentRound}.`);

		} else if (playedHouseholds == 0) {
			currentRound++;
			console.log("***", `Starting round: ${currentRound}`)
		}
	}

	printRoundStats();
}

function addRound(id, notes = "") {
	// increment the round
	households[id].round++;
	// add notes
	households[id].notes = notes;
	//output the feedback
	printFeedback(`Played round ${currentRound} of the ${households[id].name} household.`);
	printStats();
}

// new households start at the current round number
function createHousehold(name, subhood, notes, ...members) {
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
	let householdCopy = households[id];

	households[id][key] = val;
	// using dot notation would create a "key" key instead of passing in the argument. COOL!

	printFeedback(`Updated the ${households[id].name} household.`);
	console.log(households[id]);

	// if members ends up being 0 (last member dies or moves into a new household), delete the household

	if (households[id].members.length == 0) {
		printFeedback(`There are no members of the ${households[id].name} household.`);
		deleteHousehold(id);
	}
}


// deletes the household entirely (if someone moves into a new house, etc);
function deleteHousehold(id) {
	let name = households[id].name;
	households.splice(id, 1);
	printFeedback(`Deleted the ${name} household.`);
}


console.log("Original Households (6)", original);

createHousehold("Burb", "Pleasantview", "Move into town", "John Burb", "Jennifer Burb", "Lucy Burb");
deleteHousehold(6);
addRound(5, "Mary-Sue caught Daniel cheating. Breakup?");
updateHousehold(3, "members", "Brandi Broke", "Dustin Broke", "Beau Broke", "Bobbi Broke");
updateHousehold(0, "members");
