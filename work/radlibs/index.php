<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Radlibs</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header>

		<div class="inner-column">
			
			<h1>Radlibs</h1>
			<h2>Daria Edition</h2>

		</div>
	</header>
	<main> 

		<div class="inner-column">
			<?php 
			$subject = "English";
			$adjectiveOne = "sardonic";
			$adjectiveTwo = "ridiculous";
			$object = "top hat";
			$emotionOne = "existential crisis";
			$color = "maroon";
			$accessory = "combat boots";
			$grungeBand = "Pearl Jam";
			$emotionTwo = "melancholy";
			$sandwichTopping = "avocado spread";



			echo "<p>Daria sat in <span class='lib subject'>" . $subject . "</span> class, doodling <span class='lib adjective-one'>" . $adjectiveOne . "</span> " . "sketches of Mr. O'Neill wearing a <span class='lib adjective-two'>" . $adjectiveTwo . "</span> <span class='lib object'>" . $object . "</span> on his head. She raised an eyebrow as she noticed Jane experimenting with a new shade of lipstick called <span class='lib emotion-one'>" . $emotionOne . "</span> <span class='lib color'>" . $color . "</span>.</p>";

			echo "<p>Jane shrugged and explained that it matched her <span class='lib accessory'>" . $accessory . "</span> perfectly, to which Daria deadpanned, 'It's so you.'</p>";

			echo "<p>Meanwhile, back at home, Trent strummed his guitar in the garage, humming a tune inspired by <span class='lib grunge-band'>" . $grungeBand . "</span> and the <span class='lib emotion-two'>" . $emotionTwo . "</span> of leftover <span class='lib sandwich-topping'>" . $sandwichTopping . "</span>. </p>"
		?>
		
		</div>
		
	</main>
	<footer>
		<div class="inner-column">
			<p>Radlibs  😎  2024</p>
		</div>
	</footer>
</body>
</html>