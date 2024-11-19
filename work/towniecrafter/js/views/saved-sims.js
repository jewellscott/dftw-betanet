
export function savedSims() {	
	let saved = JSON.parse(localStorage.getItem("savedSims"));

	let form = document.querySelector(".saved-sims-form");

	function renderForm() {
		let saved = JSON.parse(localStorage.getItem("savedSims"));

		let formTemplate = "";

		// RENDER THESE NEWEST TO OLDEST

		if (saved != []) {
			saved.slice().reverse().forEach((family) => {
				formTemplate += `
					<family-card>
						<h2>${family.name} (${family.members.length})</h2>
						<family-actions>
							<button data-action="editFamily" data-id=${family.id}>Edit</button>
							<button data-action="deleteFamily" data-id=${family.id}>Delete</button>
						</family-actions>
					</family-card>
				`
			})
		}

		form.innerHTML = formTemplate;
	} 

	function addEventListeners() {

		window.addEventListener('click', function(event) {
			event.preventDefault();

			if (event.target.matches("[data-action='editFamily']")) {
				// editFamily(event.target.dataset.id)
				// console.log("brb, gonnna edit the family");
			}

			if (event.target.matches("[data-action='deleteFamily']")) {
				// console.log(event.target.dataset);
				deleteFamily(event.target.dataset.id);
				// console.log(`The ${saved[family].name} family is deleted.`);
				// console.log("brb, gonna delete the family");
			}
		})
	}

	function deleteFamily(id) {
		let saved = JSON.parse(localStorage.getItem("savedSims"));
		// console.log(event.target.dataset.id);
		let familyIndex = saved.findIndex((family) => family.id == id);

		if (familyIndex !== -1) {
			console.log(`Removing the ${saved[familyIndex].name} family.`);
			saved.splice(familyIndex, 1);
			localStorage.setItem("savedSims", JSON.stringify(saved));
			renderForm();
		}

		// reload saved data
    	// saved = JSON.parse(localStorage.getItem("savedSims"));

		// reload form
		renderForm();
	}

	renderForm();
	addEventListeners();
}