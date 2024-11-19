import { renderViews } from './render.js';
import { db } from './db.js';

console.log(db);

function init() {
	// if this doesn't exist yet, set it
	if (!localStorage.getItem("savedSims")) {
			localStorage.setItem("savedSims", JSON.stringify(db.savedSims));
	}
}

init();

import { cafConfig } from './caf-config.js';

renderViews();

