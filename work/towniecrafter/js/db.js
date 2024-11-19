const db = {
	"familyConfig": JSON.parse(localStorage.getItem("familyConfig")),
	"savedSims": [
		{	
			id: "family-1730578913545-1100",
			name: "Lothario",
			configuration: {
			 baby: 0,
			 toddler: 0,
			 child: 0,
			 teen: 0,
			 adult: 1,
			 elder: 0
			},
			members: [
			 {
			   id: "1730578919771-5179",
			   firstName: "Don",
			   lastName: "Lothario",
			   gender: "male",
			   stage: "Adult",
			   zodiac: "Leo",
			   aspiration: "Romance",
			   career: "Medicine",
			   degree: "Biology",
			   fitness: "Fit",
			   eyeColor: "Green",
			   hairColor: "Black",
			   hobby: "Fitness",
			   interests: ["Health", "Money", "Fashion"],
			   lifetimeWant: "Woohoo with 10 different sims",
			   skinTone: "Medium (2)",
			   turnOns: ["Makeup", "Underwear"],
			   turnOff: "Glasses"
			 }
			]
		}
	],
}

export {
	db
}