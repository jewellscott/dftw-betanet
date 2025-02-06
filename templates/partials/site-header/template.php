<?php
$baseDir = realpath(dirname(__FILE__) . '/../../..');
require_once $baseDir . '/config.php';
require_once $baseDir . '/functions.php';

$page = $_GET["page"] ?? "home";

$background = "";


if ($page == "post") {

	$slug = $_GET["slug"] ?? null;

    if ($slug) {
    	// do some deeper checking, 
      
        if (slugExists($slug, 'data/blog')) {
     			$template = "left";
     			// all blog posts are aligned left IF the slug exists. 

     			// else it will still be centered, so the 404 is as normal.        
        	}

    } else {

		$template = "left";

    }

} else {

	$json = file_get_contents("data/$page.json");
	$pageData = json_decode($json, true);

	$template = $pageData["template"] ?? "";
}

if ($page == "home") {
	$background = "bliss";
}


?>


<!DOCTYPE html>
<html lang="en-GB" data-theme="light">
<head>
	<meta charset="UTF-8">
	<base href="<?=BASE_URL?>"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>✨ jewell.online ✨</title>
	<meta name="Description" content="Jewell's PE Portal">
	<meta property="og:title" content="JEWELL!">
	<meta property="og:description" content="Jewell's PE Portal">
	<meta property="og:image" content="https://peprojects.dev/beta-one/jewell/assets/img/social/rainbowskygrid.jpg">

	<link rel="stylesheet" href="css/styles.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Azeret+Mono:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&family=Jersey+10&family=Jersey+15&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">


	<link rel="icon" href="assets/favicon/favicon.ico" sizes="32x32">
	<link rel="icon" href="assets/favicon/icon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="assets/favicon/apple-touch-icon.png"><!-- 180×180 -->
	<link rel="manifest" href="assets/favicon/manifest.webmanifest">
</head>
<body class="<?=$page?>">

	<header class="site-header">
		<?php include('templates/partials/masthead/template.php'); ?>
	</header>

	<main class="page-content <?=$template?>">
