const localLib = {
	init(name, object, message) {
		if (localStorage.getItem(name)) {
			// nothing.
		} else {
			localStorage.setItem(name, JSON.stringify(object));
			console.log(message);
		}
	},
	retrieve(key) {
		return JSON.parse(localStorage.getItem(key));
	},
	save(key, val) {
		localStorage.setItem(key, JSON.stringify(val));
	},
	delete(key) {
		localStorage.removeItem(key);
	},
};

const app = localLib.retrieve('app');

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
	// lastUpdated:  

	render() {
		const form = document.querySelector('form');

		const name = form.querySelector('input[id=name]');
		const subhood = form.querySelector('input[id=subhood]');
		const members = form.querySelector('input[id=members]');
		const notes = form.querySelector('input[id=notes]');

		const output = document.querySelector('output');

		function renderHousehold(household) {
			return `

				<li data-id='${household.id}'>
					<hh-card>
						<h2>${household.name}</h2>
						<p>${household.subhood}</p>
						<p>${household.members}</p>
						<p>${household.notes}</p>

						<card-actions>
							<button>Play</button>
							<button>Delete</button>
						</card-actions>
					</hh-card>
				</li>
			`;
		}

		function renderHouseholds(households) {
			var template = "<ul class='hh-cards'>";
			households.forEach(function(household) {
				template += renderHousehold(household);
			})
			template += "</ul>";
			output.innerHTML = template;
		}

		renderHouseholds(this.households);
	},

	// core save functions

	start: function() {
		if (localStorage.app) {
			// load existing save
			this.loadSave();
		} else  { // start a new save
			this.initSave();
		}
	},

	initSave: function() {
		localLib.init('app', todoApp, "Starting new save!");
		console.log("Starting Households", todoApp.households);
		this.render();
	},

	loadSave: function() {
		let app = localLib.retrieve('app');

		// I don't know of a better way to just do this...
		// see playRound() for more thoughts
		todoApp.households = app.households;
		todoApp.idCount = app.idCount;
		todoApp.currentRound = app.currentRound;

	 	
		console.log("***", "Loading Save", "***")
		console.log("Households", app.households);

		this.render();
	},

	save: function() {
		localLib.save('app', todoApp);
		this.render();
	},

	deleteSave: function() {
		locaLib.delete('app');
		this.render();
	},

	// helper functions


	getHouseholdById: function(id) {
	// returns the whole object
		  return this.households.find((h) => h.id === id);
	},
	getIndexById: function(id) {
		// returns the index
		return this.households.findIndex((h) => h.id === id);
	},

	// printing functions 


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

		// save changes in localStorage
		this.save();
		// localLib.save(app, todoApp);
	},

	// game mechanics

	playRound: function(id, notes = "") {
		// increment the round
		this.getHouseholdById(id).round++;
		// add notes
		this.getHouseholdById(id).notes = notes;

		// create a new main app object and spread the old info, overwrite with what we just changed
		
		
		// save changes in localStorage
		this.save();
		// localLib.save(app, todoApp);

		// ideally, you wouldn't overwrite the whole object. But you can't update nested stuff in local storage. I read up on it and you can use the spread operator to make copying same info easier, but a lot of information is changed in most of these functions - the whole households array, and the id count... Idk. Part of me wants to write a more sophisticated function that only tracks the changes, but it's beyond my scope right now. So, I will write over the whole object. 

		// I'm also not retrieving (getItem) anything at the moment.


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

		// save changes in localStorage
		this.save();
		// localLib.save(app, todoApp);
	},
	updateHousehold: function(id, key, ...val) {
		this.getHouseholdById(id)[key] = val;
		console.log(this.getHouseholdById(id));
		this.printFeedback(`Updated the ${this.getHouseholdById(id).name} household.`);
		// if members ends up being 0
		if (this.getHouseholdById(id).members.length == 0) {
			// tell the user
			this.printFeedback(`There are no members of the ${this.getHouseholdById(id).name} household.`);
			// delete the household
			this.deleteHousehold(id);
		}

		// save changes in localStorage
		this.save();
		// localLib.save(app, todoApp);
	},
	deleteHousehold: function(id) {
		let name = this.getHouseholdById(id).name;
		let index = this.getIndexById(id);
		this.households.splice(index, 1);

		this.printFeedback(`Deleted the ${name} household.`);

		// save changes in localStorage
		this.save();
		// localLib.save(app, todoApp);
	},
};

todoApp.start();

// fun additions to think about!
// turn the notes into an array of objects with timestamps so we have a timeline of sorts
// add a feature that shows you what happened in your game (notes) the last time you played



// console.log("Original households (6)", todoApp.households);
// console.log("Original households (6)", todoApp.households);
// todoApp.createHousehold("Langerak", "Pleasantview", "Move in with Daniel (if he moves out?)", "Kaylynn Langerak");
// todoApp.deleteHousehold(7);
// todoApp.playRound(5, "Send Dirk to college next round");
// todoApp.playRound(6, "Mary-Sue caught Daniel cheating. Breakup?");
// todoApp.updateHousehold(2, "members", "Mortimer Goth", "Cassandra Goth", "Alexander Goth", "Don Lothario");
// todoApp.updateHousehold(1, "members");
// todoApp.createHousehold("Burb", "Pleasantview", "Move into town", "John Burb", "Jennifer Burb", "Lucy Burb");
// todoApp.createHousehold("Oldie", "Pleasantview", "Move into town", "Herb Oldie", "Coral Oldie");
