import { renderView } from './router.js';
import { cafConfig } from './caf-config.js';
import { cafEdit } from './caf-edit.js';
import { casEdit } from './cas-edit.js';
import { simDetail } from './views/sim-detail.js';
import { savedSims } from './views/saved-sims.js';

function renderViews() {

	let outlet = document.querySelector('#outlet');

	renderView('home');
	// quick way to get to sim detail page in dev env
	// simDetail("1730505023663-2511");

	window.addEventListener('click', function(event) {
		// Home
		if (event.target.matches("[data-id='home']")) {
			renderView('home');
		}
		// Main Menu
		if (event.target.matches("[data-id='main-menu']")) {
			renderView('main-menu');
		}
		// User Preferences
		if (event.target.matches("[data-id='user-pref']")) {
			renderView('user-pref');		
		}
		// CAS - sim detail page
		if (event.target.matches("[data-sim-id]")) {
			console.log("Target: ", event.target);
			console.log("Dataset: ", event.target.dataset);
			console.log("simID: ", event.target.dataset.simId);
			simDetail(event.target.dataset.simId);
		}
		// Create-A-Family (Configure)
		if (event.target.matches("[data-id='caf-config']")) {
			renderView('caf-config');	
			cafConfig();	
		}
		// Create-A-Family (Edit)
		if (event.target.matches("[data-id='caf-edit']")) {
			renderView('caf-edit');	
			cafEdit();		
		}
		// Saved Sims
		if (event.target.matches("[data-id='saved-sims']")) {
			renderView('saved-sims');	
			savedSims();	
		}
	});
}


// update this with all of the form rendering things
function renderForms() {
	window.addEventListener('click', function(event) {
		// Home
		if (event.target.matches("[data-id='caf-config']")) {
			renderForm('caf-config');
		}

		if (event.target.matches("[data-id='caf-edit']")) {
			renderForm('caf-edit');		
		}

		if (event.target.matches("[data-id='cas-edit']")) {
			renderForm('cas-edit');		
		}
	});
}


export {
	renderViews,
	renderForms
}