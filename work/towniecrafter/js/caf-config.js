import { names } from "./../data/data.js";
import { generateSimpleID } from "./helper.js";


function cafConfig() {

	// pull from the actual data module if live

	let lastNames = names.last;

	// import when live

	function getRandomInt(max) {
		// includes numbers from 0 to max
	  return Math.floor(Math.random() * max);
	}

	//

	let form = document.querySelector(".caf-form");
	console.log(form);

	window.addEventListener('click', function(event) {
		   event.preventDefault();

		   // randomize household

		   if (event.target.matches("[data-id='randomize']")) {
		   	family.randomize();
		   	console.log(family);
		   };

		   // reset household

		   if (event.target.matches("[data-id='reset']")) {
		   	family.reset();
		   	console.log(family);
		   };

		   // accept household

		   if (event.target.matches("[data-id='accept']")) {
		   	console.log(family);
		   };

		   // mini forms

		   ages.forEach((age) => {

	   		if (event.target.matches(`[data-id='add-${age}-male']`)) {
					family.addMember(age, 'male');
				}

				if (event.target.matches(`[data-id='remove-${age}-male']`)) {
					family.removeMember(age, 'male');
				}

				if (event.target.matches(`[data-id='add-${age}-female']`)) {
					family.addMember(age, 'female');
				}

				if (event.target.matches(`[data-id='remove-${age}-female']`)) {
					family.removeMember(age, 'female');
				}
		   })
		});


	function renderForm() {

		let formTemplate = "";

		ages.forEach((age) => {
		// create the form
		formTemplate += `
			<age-form>
				<gender-inputs>
					<male-input>
						<button data-id="remove-${age}-male">-</button>
						<button data-id="add-${age}-male">+</button>
						<male-count>${family.members.filter((sim) => sim.age == `${age}` && sim.gender == "male").length}</male-count>
					</male-input>
					<female-input>
						<button data-id="remove-${age}-female">-</button>
						<button data-id="add-${age}-female">+</button>
						<female-count>${family.members.filter((sim) => sim.age == `${age}` && sim.gender == "female").length}</female-count>
					</female-input>
				</gender-inputs>
				<number-output>
					${family.configuration[age]}
				</number-output>
				<sim-age>
					${age}
				</sim-age>
			</age-form>
		`
		});
		form.innerHTML = formTemplate;
	}


	// eventually pull this from the data
	let ages = [
		"baby",
		"toddler",
		"child",
		"teen",
		"adult",
		"elder"
	];

	let genders = [
		"male",
		"female",
	];

	let familyCount = 0;

	// create a family class

	class Family {
		constructor(name) {
			this.id = `family-${generateSimpleID()}`;
			this.name = name;
			this.members = [];

			this.configuration = {
				"baby": 0,
				"toddler": 0,
				"child": 0,
				"teen": 0,
				"adult": 0,
				"elder": 0
			}
		}

		addMember(age, gender) {
			age = age;
			const member = {
				age,
				gender
			}

			// update family
			// add member
			family.members = [...family.members, member];
			// increment the config
			family.configuration[age]++;

			// output to the console
			console.log(`Added a ${gender} ${age}.`)
			console.log(`${family.name}: `, family.members);

			// re-render the form
			this.save();
			renderForm();
		}

		removeMember(age, gender) {
			const member = {
				age,
				gender,
			}

			// update family
			// remove member

			let found = family.members.findIndex((sim) => sim.age == age && sim.gender == gender);

			if (found == -1) {
				console.log("A member of this age and gender doesn't exist.");
			} else {

				family.members.splice(found, 1);

				//decrement the config
				family.configuration[age]--;

				// output to the console
				console.log(`Removed a ${gender} ${age}.`)
				console.log(`${family.name}: `, family.members);

				// re-render the form
				this.save();
				renderForm();

			}
		}

		reset() {
			family = new Family(lastNames[getRandomInt(lastNames.length)]);
			this.save();
			renderForm();
		}

		randomize(max = 8) {
			family = new Family(lastNames[getRandomInt(lastNames.length)]);

			family.members = [];
			let count = getRandomInt(max) + 1;


			// update the members array
			for (let i = 0; i < count; i++) {
				let member = {
					"age": `${ages[getRandomInt(ages.length)]}`,
					"gender": `${genders[getRandomInt(genders.length)]}`,
				}
				family.members.push(member);
			}

			// if none are adults or elders, take the first one and make it an adult or elder

			let ofAge = family.members.findIndex((sim) => sim.age == "adult" || sim.age == "elder");

			
			if (ofAge == -1) {
				// simply make the first sim an adult
				family.members[0]["age"] = "adult";
			}

			// function adultify() {
			// 	// simply make the first sim an adult
			// 	family.members[0]["age"] = "adult";
			// 	// console.log("Adultified ", family.members[0]);
			// }

			// update the configuration object
			family.members.forEach((sim) => {
				Object.keys(family.configuration).forEach((age) => {
					if (sim.age == age) {
						family.configuration[age]++;
					}
				});
			});

			console.log(family.name, family.members);
			family.save();
			renderForm();
		}

		organize() {
			// rearrange the array from oldest to youngest
			let order = [
				"elder",
				"adult",
				"teen",
				"child",
				"toddler",
				"baby"
			];

			let newArray = [];

			order.forEach((age) => {
				family.members.forEach((member) => {
					if (member["age"] == age) {
						newArray = [...newArray, member];
					}
				})
			});

			family.members = newArray;
		}

		save() {
			this.organize();
			localStorage.setItem("familyConfig", JSON.stringify(family));
		}
	}

	let family = new Family(lastNames[getRandomInt(lastNames.length)]);

	console.log(family);

	renderForm();
}


export {
	cafConfig
}










