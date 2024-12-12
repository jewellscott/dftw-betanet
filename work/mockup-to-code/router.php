<?php 

$page = $_GET['page'];

function getPage($page) {
	$json = file_get_contents("data/pages/$page.json");
	return json_decode($json, true); 
}

if ($page === "default") {
	$pageData = getPage("default");
}

if ($page === "blue") {
	$pageData = getPage("blue");
}

if ($page === "wavy") {
	$pageData = getPage("wavy");
}
