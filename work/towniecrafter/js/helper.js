function getRandomInt(max) {
	// includes numbers from 0 to max
  return Math.floor(Math.random() * max);
}

function randomItem(array) {
	return array[getRandomInt(array.length)];
}

function generateSimpleID() {
	// if (crypto) return crypto.randomUUID(); // only https
   return `${Date.now()}-${Math.floor(Math.random() * 10000)}`;
}

export {
	getRandomInt,
	randomItem,
	generateSimpleID
}