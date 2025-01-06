<?php 

	$json = file_get_contents('data/resume.json');
	$resumeData = json_decode($json, true);

	$pageTitle = $resumeData["title"];
	$topLevel = true;

	$lastUpdated = $resumeData["lastUpdated"];

	// $pageDescription = $resumeData["description"];

	$links = [
			[
				"url" => "#",
				"text" => "Download"
			],
			[
				"url" => "#",
				"text" => "Contact"
			],
			[
				"url" => "#",
				"text" => "Github"
			],
			[
				"url" => "#",
				"text" => "Codepen"
			]
		];

	include('templates/modules/page-header/template.php');
?>

<section>
	<inner-column>
		<?php 
				include('templates/modules/resume-breakdown/template.php');
		 ?>
	</inner-column>
</section>