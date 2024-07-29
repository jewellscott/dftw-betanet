<?php 

$monsters = [
	[	
		"id" => 101,
		"name" => "Codey",
		"species" => "Techno-Troll",
		"age" => 3, 
		"size" => "Medium (~4 feet tall)",
		"adopted" => true,
		"portrait" => "https://peprojects.dev/images/square.jpg",
		"favoriteFood" => "Mountain Dew Code Red",
		// I want this to be a nested array...
		"personality" => [
			"Curious and intelligent",
			"Loves solving puzzles",
			"Can become impatient if not engaged"
		]
	],
	[
		"id" => 102,
		"name" => "Fragoo",
		"species" => "Fluffy Goblin",
		"age" => 5,
		"size" => "Small (~2 feet tall)",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/images/square.jpg",
		"favoriteFood" => "Goldfish crackers",
		"personality" => [
			"Playful and mischevious",
			"Loves games and pranks"
		],
		"specialRequirements" => "Needs plenty of playtime and a safe space to explore"
	],
	[
		"id" => 103,
		"name" => "Limabean",
		"species" => "Bean-Sprite",
		"age" => 2,
		"size" => "Tiny (~1 foot tall)",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/images/square.jpg",
		"favoriteFood" => "Marshmallows",
		"personality" => [
			"Gentle and shy",
			 "Loves to hide and snuggle"
			],
		"specialRequirements" => "Best suited for a quiet home without aggressive pets"
	],
	[
		"id" => 104,
		"name" => "Miss Reads-a-Lot",
		"species" => "Bookworm Beast",
		"age" => 7,
		"size" => "Medium (~3 feet tall)",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/images/square.jpg",
		"favoriteFood" => "Dried figs",
		"personality" => [
			"Intellectual and reserved",
			"Enjoys reading and learning",
			"Perfect for solitary or low-energy companions"
		],
		"specialRequirements" => "Prefers snacks that can be nibbled slowly"
	],
	[
		"id" => 105,
		"name" => "Mr. Banana",
		"species" => "Fruit-Folk",
		"age" => 4,
		"size" => "Medium (~4 feet tall)",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/images/square.jpg",
		"favoriteFood" => "Pizza",
		"personality" => [
			"Cheerful and outgoing", 
			"Loves to make others laugh",
			"Enjoys social gatherings and parties"
		]
	],
	[
		"id" => 106,
		"name" => "Orangina",
		"species" => "Citrus Sprite",
		"age" => 6,
		"size" => "Small (~3 feet tall)",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/images/square.jpg",
		"favoriteFood" => "Poke",
		"personality" => [
			"Energetic and bubbly", 
			"brings a lot of brightness to any room",
			"Friendly with both monsters and humans",
			"Great with kids"
		],
		"specialRequirements" => "Needs regular sun exposure and vitamin-rich snacks"
	],
	[
		"id" => 107,
		"name" => "Shadow",
		"species" => "Fluffy Goblin",
		"age" => 10,
		"size" => "Varies (can shift size between 3-6 feet tall)",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/images/square.jpg",
		"favoriteFood" => "Melancholia",
		"personality" => [
			"Mysterious and aloof", 
			"Prefers solitude"
		],
		"specialRequirements" => "Feeds on dark energy or moonlight; does not require physical food"
	],
];

echo "<ul class='monster-list'>";

foreach ($monsters as $monster) {
	echo "<li class='monster'>";

		echo 
		"<monster-card id='" . $monster["id"] . ">"



			. "<picture class='portrait'><img class='monster-img' src='" . $monster["portrait"] . "''></picture>";

			if ($monster["adopted"] == true) {
			 	echo 

			 	"<div><span class='adopted label-sticker'>Adopted!</span></div>";
			 	
			 };

			echo "<h2 class='name' id=" . $monster["name"] . ">" . $monster["name"] . "</h2>"
			. "<h3 class='stats'>" . $monster["species"] . " •  " . $monster["age"] . "</h3>"

			. "<ul class='personality'>"; 
	
				foreach ($monster["personality"] as $trait) {

					echo "<li>" . $trait . "</li>";

				};

			 echo "</ul>";

			 echo "<p class='favorite-food'>Favorite Food: " . $monster["favoriteFood"] . "</p>";

			 if (array_key_exists("specialRequirements",$monster)) {

			 	echo "<span class='label-sticker req-sticker'> Special Requirements</span>";

			 	echo "<p class='special-requirements'>" . $monster["specialRequirements"] . "</p>";
			 };

		 echo "</monster-card>";

	echo "</li>";
}

echo "</ul>";