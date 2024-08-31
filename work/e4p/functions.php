<?php

function getData($filePath) {
	$filePath = "work/e4p/data/$filePath";
	if ( file_exists($filePath) ) {
		$json = file_get_contents($filePath);
		return json_decode($json, true);			
	} 
	return null;
};