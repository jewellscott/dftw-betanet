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

function queryString() {
	if (isset($_GET["page"])) {
		return $_GET["page"];
	} else {
		return 'home';
	}
}

function renderModule($moduleName, $props = []) {
	$path = "templates/modules/$moduleName/template.php";
	if (file_exists($path)) {
		include($path);
	};
}

function slugExists($slug, $directory) {
    $files = scandir($directory);

    foreach ($files as $file) {

        if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
        	// makes sure the file is valid json

        		$json = file_get_contents("$directory/$file");

            $data = json_decode($json, true);


            if (isset($data['slug']) && $data['slug'] === $slug) {
            	// if the data has a file with the slug that matches the slug in the querystring
            	
                return true;
            }
        }
    }
    return false;
}