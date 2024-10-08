<?php
$baseDir = realpath(dirname(__FILE__) . '/../..');
require_once $baseDir . '/config.php';
require_once $baseDir . '/functions.php';
?>


<!DOCTYPE html>
<html lang="en-GB">
<head>
	<meta charset="UTF-8">
	<base href="<?=BASE_URL?>"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>✨ jewell.online ✨</title>
	<meta name="Description" content="Jewell's PE Portal">
	<meta property="og:title" content="JEWELL!">
	<meta property="og:description" content="Jewell's PE Portal">
	<meta property="og:image" content="https://peprojects.dev/beta-one/jewell/assets/img/social/rainbowskygrid.jpg">

	<link rel="stylesheet" href="styles/styles.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Azeret+Mono:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&family=Jersey+10&family=Jersey+15&family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">


	<link rel="icon" href="assets/favicon/favicon.ico" sizes="32x32">
	<link rel="icon" href="assets/favicon/icon.svg" type="image/svg+xml">
	<link rel="apple-touch-icon" href="assets/favicon/apple-touch-icon.png"><!-- 180×180 -->
	<link rel="manifest" href="assets/favicon/manifest.webmanifest">
</head>
<body>

	<header class="site-head">
		<nav class="site-nav">

			<a href="<?=BASE_URL?>" class="site-logo">
				<?php include(getFile('templates/components/site-logo.php'));?>
			</a>
			<ol class="link-list">
				<li><a href="about">About</a></li>
				<li><a href="blog">Blog</a></li>
				<li><a href="work">Work</a></li>
				<!-- <li><a href="./inspo">Inspo</a></li> -->
				<li><a href="goals">Goals</a></li>
				<li><a href="links">Links</a></li>
				<li><a href="extras">Extras</a></li>
				<!-- <li><a href="friends">Friends</a> -->
				</li>
				<li><a href="style-guide">Style Guide</a></li>
			</ol>
		</nav>
	</header>

	<aside>
		<dev-info>
		<?php if(IS_DEV) { 
			echo $_SERVER["QUERY_STRING"];
		 } ?>
		</dev-info>
	</aside>