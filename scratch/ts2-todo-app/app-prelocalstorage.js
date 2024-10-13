const todoApp = {
	households: [
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
		],
	idCount: 6,
	currentRound: 1,

	getHouseholdById: function(id) {
	// returns the whole object
		  return this.households.find((h) => h.id === id);
	},
	getIndexById: function(id) {
		// returns the index
		return this.households.findIndex((h) => h.id === id);
	},
	printFeedback: function(note = ""){
			console.log("*** ", note);
			console.log(this.households);
	},
	printStats: function() {
		function printRoundStats() {
			// count the number of played this.households in the round
			let playedHouseholds = todoApp.households.filter((h) => h.round != todoApp.currentRound).length;

			console.log("*** ", `${playedHouseholds}/${todoApp.households.length} households played in round ${todoApp.currentRound}.`);

			if (playedHouseholds == todoApp.households.length) {
				todoApp.currentRound++;
				console.log("***", `Starting round: ${todoApp.currentRound}`);
			}
		}
			printRoundStats();
	},
	playRound: function(id, notes = "") {
		// increment the round
		this.getHouseholdById(id).round++;
		// add notes
		this.getHouseholdById(id).notes = notes;
		//output the feedback

		if (this.getHouseholdById(id).notes != "") {
			this.printFeedback(`Played round ${this.currentRound} of the ${this.getHouseholdById(id).name} household: ${notes}`);
		} else {
			this.printFeedback(`Played round ${this.currentRound} of the ${this.getHouseholdById(id).name} household.`);
		}
		// print the stats
		this.printStats();
	},
	createHousehold: function(name, subhood, notes = "", ...members) {
		// new this.households start at the current round number
		let household = {
				id: ++this.idCount,
				name: name,
				round: this.currentRound,
				subhood: subhood,
				members: members,
				notes: notes,
			}
			this.households.push(household);
			this.printFeedback(`Created the ${name} household.`);
	},
	updateHousehold: function(id, key, ...val) {
		this.getHouseholdById(id)[key] = val;
		this.printFeedback(`Updated the ${this.getHouseholdById(id).name} household.`);
		console.log(this.getHouseholdById(id));
		// if members ends up being 0
		if (this.getHouseholdById(id).members.length == 0) {
			// tell the user
			this.printFeedback(`There are no members of the ${this.getHouseholdById(id).name} household.`);
			// delete the household
			this.deleteHousehold(id);
		}
	},
	deleteHousehold: function(id) {
		let name = this.getHouseholdById(id).name;
		let index = this.getIndexById(id);
		this.households.splice(index, 1);

		this.printFeedback(`Deleted the ${name} household.`);
	},
};





console.log("Original households (6)", ...todoApp.households);

todoApp.createHousehold("Langerak", "Pleasantview", "Move in with Daniel (if he moves out?)", "Kaylynn Langerak");
todoApp.deleteHousehold(7);
todoApp.playRound(5, "Send Dirk to college next round");
todoApp.playRound(6, "Mary-Sue caught Daniel cheating. Breakup?");
todoApp.updateHousehold(2, "members", "Mortimer Goth", "Cassandra Goth", "Alexander Goth", "Don Lothario");
todoApp.updateHousehold(1, "members");
todoApp.createHousehold("Burb", "Pleasantview", "Move into town", "John Burb", "Jennifer Burb", "Lucy Burb");
todoApp.createHousehold("Oldie", "Pleasantview", "Move into town", "Herb Oldie", "Coral Oldie");
