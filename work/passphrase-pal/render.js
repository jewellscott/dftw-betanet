import { createPassphrase } from './functions.js';

function render() {

	let output = document.querySelector('main');

	output.innerHTML += `

	<div class="passphrase"></div>

	<button class="randomize" id="randomize">Randomize</button>`;

	let passphrase = document.querySelector('.passphrase');
	passphrase.innerHTML = createPassphrase();

}


export {
	render
}