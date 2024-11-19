import { gameData, names } from "./../data/data.js";

import { getRandomInt, randomItem, generateSimpleID } from "./helper.js";

class Sim {
	constructor(gender, lastName) {
		this.lastName = lastName;
		this.gender = gender;
		this.id = generateSimpleID();
		
		this.firstName = randomItem(names[gender]);
		this.zodiac = randomItem(gameData["zodiacs"]);

		this.hairColor = randomItem(gameData["hairColors"]);
		this.eyeColor = randomItem(gameData["eyeColors"]);
		this.skinTone = randomItem(gameData["skinTones"]);
	}
}


class Baby extends Sim {
	constructor(gender, lastName) {
		super(gender, lastName);

		this.stage = "Baby";
		this.aspiration = "Grow Up";
		this.hobby = randomItem(gameData["hobbies"]);
		this.interests = [randomItem(gameData["interests"]), randomItem(gameData["interests"]), randomItem(gameData["interests"])];
	}
}

class Toddler extends Sim {
	constructor(gender, lastName) {
		super(gender, lastName);

		this.stage = "Toddler";
		this.aspiration = "Grow Up";
		this.hobby = randomItem(gameData["hobbies"]);
		this.interests = [randomItem(gameData["interests"]), randomItem(gameData["interests"]), randomItem(gameData["interests"])
		]
	}
}

class Child extends Sim {
	constructor(gender, lastName) {
		super(gender, lastName);

		this.stage = "Child";
		this.aspiration = "Grow Up";
		this.hobby = randomItem(gameData["hobbies"]);
		this.interests = [randomItem(gameData["interests"]), randomItem(gameData["interests"]), randomItem(gameData["interests"])
		]
	}
}


class Teen extends Sim {
	constructor(gender, lastName) {
		super(gender, lastName);

		this.stage = "Teen";
		this.fitness = randomItem(gameData["fitness"]);
		this.aspiration = randomItem(gameData["aspirations"]);
		this.hobby = randomItem(gameData["hobbies"]);
		this.interests = [randomItem(gameData["interests"]), randomItem(gameData["interests"]), randomItem(gameData["interests"])
		];
		this.turnOns = [randomItem(gameData["chemistry"]), randomItem(gameData["chemistry"])];
		this.turnOff = randomItem(gameData["chemistry"]);
		this.career = randomItem(gameData["careers"]);
		this.lifetimeWant = randomItem(gameData["lifetimeWants"]);
	}
}

class Adult extends Sim {
	constructor(gender, lastName) {
		super(gender, lastName);

		this.stage = "Adult";

		this.fitness = randomItem(gameData["fitness"]);
		this.aspiration = randomItem(gameData["aspirations"]);
		this.hobby = randomItem(gameData["hobbies"]);
		this.interests = [randomItem(gameData["interests"]), randomItem(gameData["interests"]), randomItem(gameData["interests"])
		];
		this.turnOns = [randomItem(gameData["chemistry"]), randomItem(gameData["chemistry"])];
		this.turnOff = randomItem(gameData["chemistry"]);
		this.career = randomItem(gameData["careers"]);
		this.lifetimeWant = randomItem(gameData["lifetimeWants"]);
		this.degree = randomItem(gameData["degrees"]);
	}
}

class Elder extends Sim {
	constructor(gender, lastName) {
		super(gender, lastName);

		this.stage = "Elder";
		this.hairColor = "Gray";

		this.fitness = randomItem(gameData["fitness"]);
		this.aspiration = randomItem(gameData["aspirations"]);
		this.hobby = randomItem(gameData["hobbies"]);
		this.interests = [randomItem(gameData["interests"]), randomItem(gameData["interests"]), randomItem(gameData["interests"])
		];
		this.turnOns = [randomItem(gameData["chemistry"]), randomItem(gameData["chemistry"])];
		this.turnOff = randomItem(gameData["chemistry"]);
		this.career = randomItem(gameData["careers"]);
		this.lifetimeWant = randomItem(gameData["lifetimeWants"]);
		this.degree = randomItem(gameData["degrees"]);
	}
}

export {
	Sim,
	Baby,
	Toddler,
	Child,
	Teen,
	Adult,
	Elder
}