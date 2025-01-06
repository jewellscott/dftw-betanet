<?php include('config.php'); ?>
<?php include('templates/partials/site-header/template.php'); ?>

<?php 

 /* ROUTER */

 $page = $_GET["page"] ?? "home";

 if (file_exists("templates/pages/$page.php")) {
 	 include("templates/pages/$page.php");	
 } else {
 	 include("templates/pages/404.php");	
 }

?>

<?php include('templates/partials/site-footer/template.php'); ?>
