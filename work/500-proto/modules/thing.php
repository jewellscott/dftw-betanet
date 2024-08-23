<?php

// the goal: dynamically generate ids and assign to every item in the array
// add an id to every album

$albums = [
	[
		"title" => "For You",
		"artist" => "Prince"
	],
	[
		"title" => "The Cool",
		"artist" => "Lupe Fiasco"
	],
]


foreach ($albums as $album) {
	$album["id"] = uniqid();
}

print_r($albums);