<?php 

	$blogFiles = scandir('data/blog');
    $blogData = [];

    foreach ($blogFiles as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
            // at first it was sending in other files... maybe invisible files

            $blog = getData("blog/$file");

            array_push($blogData, $blog);

        }
    }

	$pageTitle = $blog["title"];
	$topLevel = false;
	$links = $blog["links"];

	$pageDescription = $blog["description"];

	include('templates/modules/page-header/template.php'); 

?>

<?php foreach ($blog["module"] as $module) { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);
			 ?>
		</inner-column>
	</section>
<?php } ?>

