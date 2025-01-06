<?php 

	$json = file_get_contents('data/404.json');
	$fourohfour = json_decode($json, true);

?>


<?php foreach ($fourohfour["modules"] as $module) { ?>
	<section>
		<inner-column>
			<?php 
				
				renderModule($module["module"], $module["props"]);

			 ?>
		</inner-column>
	</section>
<?php } ?>

