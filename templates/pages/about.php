<?php 

	$json = file_get_contents('data/about.json');
	$aboutData = json_decode($json, true);

	$pageTitle = $aboutData["title"];
	$topLevel = $aboutData["topLevel"];
	$pageDescription = $aboutData["description"];
	$lastUpdated = $aboutData["lastUpdated"];
	$links = $aboutData["links"];

	include('templates/modules/page-header/template.php'); 

?>


<?php foreach ($aboutData["modules"] as $module) { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);

			 ?>
		</inner-column>
	</section>
<?php } ?>

