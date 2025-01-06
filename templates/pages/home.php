<?php 

	$json = file_get_contents('data/home.json');
	$homeData = json_decode($json, true);

?>


<?php foreach ($homeData["modules"] as $module) { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);

			 ?>
		</inner-column>
	</section>
<?php } ?>

