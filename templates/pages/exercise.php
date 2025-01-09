<?php 

$slug = $_GET["slug"];

if (getFileBySlug($slug, 'data/e4p')) {

	$exercise = getFileBySlug($slug, 'data/e4p');

?>

	<?php 
			$pageTitle = $exercise["title"];
			$topLevel = false;
			$links = $exercise["links"];

			$pageDescription = $exercise["description"];

	       include('templates/modules/page-header/template.php'); 
	 ?>

	<?php foreach ($exercise["case-study"] as $module)

	 { ?>
		<section>
			<inner-column>
				<?php 
					
					renderModule($module["module"], $module["props"]);
				 ?>
			</inner-column>
		</section>
	<?php } ?>

<?php } ?>
