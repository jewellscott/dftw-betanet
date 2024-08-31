<?php

function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}


function includeFile($path) {
	include(getFile($path)); 
}

function getData($fileName) {
	$path = "data/$fileName";
	if ( file_exists($path) ) {
		$json = file_get_contents($path);
		return json_decode($json, true);			
	} 
	return null;
}