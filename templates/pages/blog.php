<?php 

	$json = file_get_contents('data/blog.json');
	$blog = json_decode($json, true);

	$pageTitle = $blog["title"];
	$topLevel = $blog["topLevel"];
	$pageDescription = $blog["description"];
	$links = $blog["links"];

	include('templates/modules/page-header/template.php'); 

?>


<?php foreach ($blog["modules"] as $module) { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);

			 ?>
		</inner-column>
	</section>
<?php } ?>

