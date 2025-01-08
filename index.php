<?php include('config.php'); ?>
<?php include('templates/partials/site-header/template.php'); ?>

<?php 

 /* ROUTER */

 
$page = $_GET["page"] ?? "home";
$slug = $_GET["slug"] ?? null;


if (file_exists("templates/pages/$page.php")) {
    if ($slug) {
    	// do some deeper checking
      
        if (slugExists($slug, 'data/blog') || slugExists($slug,'data/projects')) {
            include("templates/pages/$page.php");
        } else {
            include("templates/pages/404.php");
        }

    } else {
    	// return the page
        include("templates/pages/$page.php");
    }
} else {
    include("templates/pages/404.php");
}



?>

<?php include('templates/partials/site-footer/template.php'); ?>
