import { gameData, names } from "./../data/data.js";
import { getRandomInt, randomItem } from "./helper.js";

import { Sim, Baby, Toddler, Child, Teen, Adult, Elder } from "./sim.js";

function cafEdit() {

	let saved = JSON.parse(localStorage.getItem("savedSims"));

	let family = JSON.parse(localStorage.getItem("familyConfig"));

	let form = document.querySelector(".caf-edit-form");

	function renderForm() {

		let formTemplate = "";

		formTemplate += `
			<family-name>
				<input class="family-input" type="text" value="${family.name}"></input>
			</family-name>
		`;

		family.members.forEach((member) => {
		// create the form
		formTemplate += `
			<member-card>
				<sim-icons>
					<picture class="stage" data-stage="${member["stage"]}">
						<img class="stage-icon" src="../assets/${member.stage}.webp" alt="${member.stage} title=${member.stage}">
					</picture>

					<picture class="gender" data-gender="${member["gender"]}">
						<img class="gender-icon" src="../assets/${member.gender}.webp" alt="${member.gender}" title="${member.gender}">
					</picture>
				</sim-icons>

				<sim-stats>
					<p class="name"><h3 class="sim-name">${member["firstName"]}</h3></p>
					<p class="name">${member["aspiration"]}</p>
					<p class="name">${member["zodiac"]}</p>
				</sim-stats>

				<sim-actions>
					<button data-randomize="${member.id}">Randomize</button>
					<button data-sim-id="${member.id}">Edit</button>
					<button data-delete="${member.id}">Delete</button>
				</sim-actions>
			</member-card>
		`
		});
		form.innerHTML = formTemplate;
	}

	function addEventListeners() {

		window.addEventListener('click', function(event) {

			if (event.target.matches("[data-delete]")) {
				deleteSim(event.target.dataset.delete);
			}

			if (event.target.matches("[data-randomize]")) {
				console.log(event.target.dataset);
				randomizeSim(event.target.dataset.randomize);
			}

			if (event.target.matches("[data-action='addSim']")) {
				console.log(event.target.dataset);
				addSim();
			}

			if (event.target.matches("[data-action='randomizeFamily']")) {
				console.log(event.target.dataset);
				randomizeFamily();
			}

			if (event.target.matches("[data-action='saveFamily']")) {
				// console.log(event.target.dataset);
				saveFamily();
			}
		})

	}

	function organize() {
		// rearrange the array from oldest to youngest
		let order = [
			"Elder",
			"Adult",
			"Teen",
			"Child",
			"Toddler",
			"Baby"
		];

		let newArray = [];

		order.forEach((stage) => {
			family.members.forEach((member) => {
				if (member["stage"] == stage) {
					newArray = [...newArray, member];
				}
			})
		});

		family.members = newArray;
	}

	function save() {
		// organize();
		localStorage.setItem("familyConfig", JSON.stringify(family));
	}

	function transformMembers() {
		family.members = family.members.map((member) => {
			switch(member.age) {
				case "baby": 
					member = new Baby(member.gender, family.name);
					break;
				case "toddler": 
					 member = new Toddler(member.gender, family.name);
					break;
				case "child": 
					 member = new Child(member.gender, family.name);
					break;
				case "teen": 
					 member = new Teen(member.gender, family.name);
					break;
				case "adult": 
					 member = new Adult(member.gender, family.name);
					break;
				case "elder": 
					 member = new Elder(member.gender, family.name);
					break;
				default:
					// idk what the default should be
			}
			return member;
		});
		save();
	}

	function deleteSim(simId) {
		let sim = family.members.findIndex((sim) => sim.id == simId);
		console.log(sim);
		console.log(`boop! ${family.members[sim].firstName} is deleted.`);

		family.members.splice(sim, 1);
		save();
		renderForm();

		// should I even bother updating the configuration? idk...
	}

	function randomizeSim(simId) {
		let simIndex = family.members.findIndex((sim) => sim.id == simId);
		let sim = family.members[simIndex];
		let newMember;

		switch(sim.stage) {
			case "Baby": 
				newMember = new Baby(sim.gender, family.name);
				break;
			case "Toddler": 
				 newMember = new Toddler(sim.gender, family.name);
				break;
			case "Child": 
				 newMember = new Child(sim.gender, family.name);
				break;
			case "Teen": 
				newMember = new Teen(sim.gender, family.name);
				break;
			case "Adult": 
				 newMember = new Adult(sim.gender, family.name);
				break;
			case "Elder": 
				 newMember = new Elder(sim.gender, family.name);
				break;
			default:
				// idk what the default should be
		}

		// remplace member
		family.members.splice(simIndex, 1, newMember);

		save();
		console.log(`boop! ${sim.firstName} has been Randomized.`);

		renderForm();
	}

	function addSim() {
		console.log("Adding a sim...");
		let sim = {
			stage: randomItem(gameData.ages),
			gender: randomItem(gameData.genders)
		}

		let newSim;

		switch(sim.stage) {
			case "Baby": 
				newSim = new Baby(sim.gender, family.name);
				break;
			case "Toddler": 
				 newSim = new Toddler(sim.gender, family.name);
				break;
			case "Child": 
				 newSim = new Child(sim.gender, family.name);
				break;
			case "Teen": 
				newSim = new Teen(sim.gender, family.name);
				break;
			case "Adult": 
				 newSim = new Adult(sim.gender, family.name);
				break;
			case "Elder": 
				 newSim = new Elder(sim.gender, family.name);
				break;
			default:
				// idk what the default should be
		}

		// add member
		family.members.push(newSim);

		save();
		console.log(`boop! ${newSim.firstName} has been Added.`);

		renderForm();
	}

	function randomizeFamily() {
		// change surname
		family.name = randomItem(names.last);
		let newMembers = [];
		let membersCount = (getRandomInt(8) + 1);

		for (let i = 0; i < membersCount; i++) {
			let sim = {
				stage: randomItem(gameData.ages),
				gender: randomItem(gameData.genders)
			}

			let newSim;

			switch(sim.stage) {
				case "Baby": 
					newSim = new Baby(sim.gender, family.name);
					break;
				case "Toddler": 
					 newSim = new Toddler(sim.gender, family.name);
					break;
				case "Child": 
					 newSim = new Child(sim.gender, family.name);
					break;
				case "Teen": 
					newSim = new Teen(sim.gender, family.name);
					break;
				case "Adult": 
					 newSim = new Adult(sim.gender, family.name);
					break;
				case "Elder": 
					 newSim = new Elder(sim.gender, family.name);
					break;
				default:
					// idk what the default should be
			}
			// add member
			newMembers.push(newSim);
		}

		// if family doesn't have one

		let ofAge = family.members.findIndex((sim) => sim.stage == "Adult" || sim.stage == "Elder");
			
		if (ofAge == -1) {
		// add at least one adult or elder
			let ofAge = [
				"Elder",
				"Adult"
			]

			let simOfAge = {
				stage: randomItem(ofAge),
				gender: randomItem(gameData.genders)
			}

			let newSimOfAge;

			if (simOfAge.stage == "Elder") {
				newSimOfAge = new Elder(simOfAge.gender, family.name);
			} 

			if (simOfAge.stage == "Adult") {
				newSimOfAge = new Adult(simOfAge.gender, family.name);
			}

			newMembers.push(newSimOfAge);
		}

		family.members = [...newMembers];

		organize();
		save();
		renderForm();
	}

	function saveFamily() {
		// console.log("raw:", typeof(localStorage.getItem("savedSims")));
		// console.log("parsed:", typeof(JSON.parse(localStorage.getItem("savedSims"))));
		let saved = JSON.parse(localStorage.getItem("savedSims"));

		let thisFamilyIndex = saved.findIndex((savedFam) => savedFam.id == family.id);

		if (thisFamilyIndex !== -1) {  // if it already exists, write over it 
			// saved.splice(thisFamilyIndex, 1, family);
			saved[thisFamilyIndex] = family;
		} else {	// otherwise save it anew
			// console.log("This doesn't exist. Gonna save it anew");
			// saved = [...saved, family];
			saved.push(family);
		}

		localStorage.setItem("savedSims", JSON.stringify([...saved]));
	}

	transformMembers();
	renderForm();
	addEventListeners();
}

export {
	cafEdit,
}