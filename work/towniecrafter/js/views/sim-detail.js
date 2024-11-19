import { babyForm, toddlerForm, childForm, teenForm, adultForm, elderForm } from "./../../data/forms.js";

export function simDetail(simId) {
	// console.log(simId);
	let family = JSON.parse(localStorage.getItem("familyConfig"));
	// console.log(family);
	let sim = family.members.find((sim) => sim.id == simId);
	// console.log(sim);

	function selectForm (sim) {
		let ageForm;
		// change to switch statement?
		if (sim.stage == "Baby") {
			ageForm = babyForm;
		}

		if (sim.stage == "Toddler") {
			ageForm = toddlerForm;
		}

		if (sim.stage == "Child") {
			ageForm = childForm;
		}

		if (sim.stage == "Teen") {
			ageForm = teenForm;
		}

		if (sim.stage == "Adult") {
			ageForm = adultForm;
		}

		if (sim.stage == "Elder") {
			ageForm = elderForm;
		}

		return ageForm;
	}


	let pageTemplate = `
		<cas-edit>
			<h1>Create-A-Sim</h1>

			<form id="cas-form" class="cas-form" action="">
				
			</form>

			<button data-id="randomize" class="main-menu-button">
				Randomize All
			</button>
			<button data-id="caf-edit" class="main-menu-button">
				Save
			</button>
		</cas-edit>
	`;

	let simTemplate = ``;

	simTemplate += `
		<sim-name>
			<first-name>
				<input class="first-name-input" type="text" value="${sim.firstName}"></input>
			</first-name>
			<last-name>
				<input class="last-name-input" type="text" value="${sim.lastName}"></input>
			</last-name>
		</sim-name>
	`;

	selectForm(sim).forEach((category) => {
		simTemplate += `
			<detail-category>
				<detail-header>
					<h3>${category.title}</h3>
					<button>
						<img class="dice-svg" src="../../assets/dice.svg">
					</button>
				</detail-header>
		`;

		category.details.forEach((detail) => {

			if (!Array.isArray(sim[detail.id])) {
				simTemplate += `
					<detail-option>
						<h4>${detail.title}</h4>
						<select>`

					detail.options.forEach((option) => {
						// console.log(sim[detail.id]);
						if (sim[detail.id] == option) {
							simTemplate += `
								<option value="${option}" selected>${option}</option>
							`;
						} else {
							simTemplate += `
								<option value="${option}">${option}</option>
							`;
						}
					})
				simTemplate += 
					`</select>
					</detail-option>
				`;
			} else {

				simTemplate += `
					<detail-option>
						<h4>${detail.title}</h4>
				`;

				sim[detail.id].forEach((value) => {
					simTemplate += `
						<select class="multi-option">
					`
						detail.options.forEach((option) => {
							// console.log(sim[detail.id]);
							if (value == option) {
								simTemplate += `
									<option value="${option}" selected>${option}</option>
								`;
							} else {
								simTemplate += `
									<option value="${option}">${option}</option>
								`;
							}
						})

					simTemplate += 
						`</select>`;
				})
				simTemplate += 
						`</detail-option>`;
			}
		})

		simTemplate += `
			</detail-category>
		`;
	})



	let outlet = document.querySelector("#outlet");
	outlet.innerHTML = pageTemplate;

	let form = document.querySelector("#cas-form");
	form.innerHTML = simTemplate;
}
