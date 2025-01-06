<?php 
	$json = file_get_contents('data/goals.json');
	$goals = json_decode($json, true);

	$pageTitle = $goals["title"];
	$topLevel = $goals["topLevel"];
	$pageDescription = $goals["description"];

	$lastUpdated = $goals["lastUpdated"];

	include('templates/modules/page-header/template.php');
?>

<section class="">
	<inner-column>
		<?php include('templates/modules/goal-breakdown/template.php'); ?>
	</inner-column>
</section>