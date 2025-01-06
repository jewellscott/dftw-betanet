<?php 

	$projectFiles = scandir('data/projects');
    $projects = [];

    foreach ($projectFiles as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
            // at first it was sending in other files... maybe invisible files

            $p = getData("projects/$file");

            array_push($projects, $p);

        }
    }

	foreach ($projects as $p) {
		if ($p["slug"] == $_GET["slug"]) {
			$project = $p;
		}
	}


	$pageTitle = $project["title"];
	$topLevel = false;
	$links = $project["links"];

	$pageDescription = $project["description"];

	include('templates/modules/page-header/template.php'); 

?>

<?php foreach ($project["case-study"] as $module) { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);
			 ?>
		</inner-column>
	</section>
<?php } ?>

