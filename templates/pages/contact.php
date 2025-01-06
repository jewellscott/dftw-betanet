<?php 

	$json = file_get_contents('data/contact.json');
	$contactData = json_decode($json, true);

	$pageTitle = $contactData["title"];
	$topLevel = $contactData["topLevel"];
	$pageDescription = $contactData["description"];
	$lastUpdated = $contactData["lastUpdated"];
	$links = $contactData["links"];

	include('templates/modules/page-header/template.php'); 

?>


<?php foreach ($contactData["modules"] as $module) { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);

			 ?>
		</inner-column>
	</section>
<?php } ?>

