<?php

function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}


function includeFile($path) {
	include(getFile($path)); 
}