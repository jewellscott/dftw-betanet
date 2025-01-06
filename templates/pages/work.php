<?php 

	$json = file_get_contents('data/work.json');
	$workData = json_decode($json, true);

	$pageTitle = $workData["title"];
	$topLevel = $workData["topLevel"];
	$links = $workData["links"];
	$lastUpdated = $workData["lastUpdated"];


	$pageDescription = $workData["description"];

	include('templates/modules/page-header/template.php'); 

?>


<?php foreach ($workData["modules"] as $module) { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);

			 ?>
		</inner-column>
	</section>
<?php } ?>

