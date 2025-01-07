<article class="blog-post">
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
		$lastUpdated = $blog["lastUpdated"];
		$published = $blog["published"];


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
</article>