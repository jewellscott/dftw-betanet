<?php 

	$projectFiles = scandir('data/projects');
    $projects = [];

    $thisProject = null;

    foreach ($projectFiles as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
            // at first it was sending in other files... maybe invisible files

            $p = getData("projects/$file");

            array_push($projects, $p);

        }
    }

	$slug = $_GET["slug"] ?? null; 

	// if this slug actually exists in a json file in the subdirectory, THEN load the header


		foreach ($projectFiles as $file) {
			if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
			   $project = getData("projects/$file");
			   
			   if (isset($project['slug']) && $project['slug'] === $slug) {


			   		// set the right project to this project

			   		$thisProject = $project;


			   		// include the header now that the file exists (so you don't see the header if 404 page is included)

					$pageTitle = $project["title"];
					$topLevel = false;
					$links = $project["links"];

					$pageDescription = $project["description"];

			       include('templates/modules/page-header/template.php'); 
			   }
			}
		}

?>

<?php foreach ($thisProject["case-study"] as $module)

 { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);
			 ?>
		</inner-column>
	</section>
<?php } ?>

