<!DOCTYPE html>

<?php 

	$page = null;
	if(isset($_GET['page'])) {
		$page = $_GET['page']; // url?page=string
	} else {
		$page = "home";
	}

?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>500 Greatest</title>
</head>
<body>

	<header>
		<nav class="site-menu">
			<a href="?page=home">500 Greatest</a>
			<a href="?page=albums">Albums</a>
		</nav>
	</header>

	<main>
		<?php 
			if ($page == 'home') {
				include('home.php');
			}
			if ($page == 'albums') {
				include('albums.php');
			}
			if ($page == 'album') { 
				include('album.php');
			}
		?>
	</main>

	<footer>
		
	</footer>
	
</body>
</html>