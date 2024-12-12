function createPassphrase() {

	// get a modifier

	let modifier = getRandomArrayItem(phraseParts.modifiers);

	// get a subject

	let subject = getRandomArrayItem(phraseParts.subjects);

	// smash em together

	let passphrase = modifier + subject;

	render();

	return passphrase;
}

export {
	craetP
}