<?php 

$monsters = [
	[	
		"id" => 101,
		"name" => "Codey",
		"species" => "Techno-Troll",
		"age" => 3, 
		"size" => "Medium (~4 feet tall)",
		"adopted" => true,
		"portrait" => "assets/portraits/codey.jpg",
		"favoriteFood" => "Mountain Dew Code Red",
		"personality" => [
			"Curious and intelligent",
			"Loves solving puzzles",
			"Can become impatient if not engaged"
		]
	],
	[
		"id" => 106,
		"name" => "Orangina",
		"species" => "Citrus Sprite",
		"age" => 6,
		"size" => "Small (~3 feet tall)",
		"adopted" => false,
		"portrait" => "assets/portraits/orangina.jpg",
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
		"id" => 105,
		"name" => "Mr. Banana",
		"species" => "Fruit-Folk",
		"age" => 4,
		"size" => "Medium (~4 feet tall)",
		"adopted" => false,
		"portrait" => "assets/portraits/mr-banana.jpg",
		"favoriteFood" => "Pizza",
		"personality" => [
			"Cheerful and outgoing", 
			"Loves to make others laugh",
			"Enjoys social gatherings and parties"
		]
	],
	[
		"id" => 103,
		"name" => "Limabean",
		"species" => "Bean-Sprite",
		"age" => 2,
		"size" => "Tiny (~1 foot tall)",
		"adopted" => false,
		"portrait" => "assets/portraits/limabean.jpg",
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
		"portrait" => "assets/portraits/miss-reads-a-lot.jpg",
		"favoriteFood" => "Dried figs",
		"personality" => [
			"Intellectual and reserved",
			"Enjoys reading and learning",
			"Perfect for solitary or low-energy companions"
		],
		"specialRequirements" => "Prefers snacks that can be nibbled slowly"
	],
	[
		"id" => 107,
		"name" => "Shadow",
		"species" => "Fluffy Goblin",
		"age" => 10,
		"size" => "Varies (can shift size between 3-6 feet tall)",
		"adopted" => false,
		"portrait" => "assets/portraits/shadow.jpg",
		"favoriteFood" => "Melancholia",
		"personality" => [
			"Mysterious and aloof", 
			"Prefers solitude"
		],
		"specialRequirements" => "Feeds on dark energy or moonlight; does not require physical food"
	],
	[
		"id" => 102,
		"name" => "Fragoo",
		"species" => "Fluffy Goblin",
		"age" => 5,
		"size" => "Small (~2 feet tall)",
		"adopted" => false,
		"portrait" => "assets/portraits/fragoo.jpg",
		"favoriteFood" => "Goldfish crackers",
		"personality" => [
			"Playful and mischevious",
			"Loves games and pranks"
		],
		"specialRequirements" => "Needs plenty of playtime and a safe space to explore"
	],
];

?>

<ul class="monster-list">
	<?php foreach ($monsters as $monster) { ?>
		<li class="monster">
			<monster-card id="<?=$monster["id"]?>">
				<picture class="portrait">
					<img src="<?=$monster["portrait"]?>" class="monster-img">
				</picture>
				<h2 class="name" id="<?=$monster["name"]?>"><?=$monster["name"]?></h2>
				<h3 class="stats"><?=$monster["species"]?> • <?=$monster["age"]?></h3>
				<ul class="personality">
					<?php foreach ($monster["personality"] as $trait) { ?>
						<li><?=$trait?></li>
					<?php }; ?>
				</ul>
				<p class="favorite-food">Favorite Food: <?=$monster["favoriteFood"]?></p>
				<?php if (array_key_exists("specialRequirements",$monster)) { ?>
					<span class="label-sticker req-sticker rainbow"><span>S</span><span>p</span><span>e</span><span>c</span><span>i</span><span>a</span><span>l</span> <span>R</span><span>e</span><span>q</span><span>u</span><span>i</span><span>r</span><span>e</span><span>m</span><span>e</span><span>n</span><span>t</span><span>s</span></span>
					<p class="special-requirements"><?=$monster["specialRequirements"]?></p>
				<?php }; ?>
				<?php if ($monster["adopted"] == true) { ?>
					<div><span class='adopted label-sticker rainbow'><span>A</span><span>d</span><span>o</span><span>p</span><span>t</span><span>e</span><span>d</span><span>!</span></span></div>
				<?php }; ?>
			</monster-card>
		</li>
	<?php }; ?>
</ul>