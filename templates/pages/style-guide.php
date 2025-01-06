<?php 

	$json = file_get_contents('data/style-guide.json');
	$styleData = json_decode($json, true);

	$pageTitle = $styleData["title"];
	$topLevel = $styleData["topLevel"];

	$pageDescription = $styleData["description"];

	include('templates/modules/page-header/template.php'); 
?>



<?php foreach ($styleData["modules"] as $module) { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);

			 ?>
		</inner-column>
	</section>
<?php } ?>

