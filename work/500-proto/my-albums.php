<h1>My Albums</h1>

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
	[
		'artist' => 'Big Star',
       'title' => '#1 Record',
   ],
];

$newAlbums = [];

// foreach ($albums as $album) {
// 	$album["id"] = uniqid("");
// 	$album["custom"] = true;
// 	$album["slug"] = 
// 	array_push($newAlbums);
// }



$newAlbums = array_map(function ($album) {
	$id = ["id" => uniqid("")];
	$custom = ["custom" => true];
	// $album["slug"] = 
	return array_merge($id, $custom, $album);
}, $albums);

$json = json_encode($newAlbums);


file_put_contents("new-albums.json", $json);


print_r($newAlbums);