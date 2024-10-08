<?php include './components/site-header/template.php'; ?>

<?php 

$json = file_get_contents("data/modules.json");
$modules = json_decode($json, true);
?>



<?php foreach($modules as $module) { ?>
	<section class="<?=$module["module"]?>">
		<inner-column>
			<?php include("modules/$module[module]/template.php"); ?>
		</inner-column>
	</section>
<?php } ?>


