<!DOCTYPE html>

<?php require('router.php'); ?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>500 Greatest</title>
	<link rel="stylesheet" href="css/site.css">
</head>
<body>

	<header>

		<inner-column>

			<nav class="site-menu">
				<a href="?page=home" class="home">500 Greatest</a>
				<a href="?page=albums">Albums</a>
			</nav>
			
		</inner-column>

	</header>

	<main>
		<inner-column>
			
			<?php getTemplate($page); ?>

		</inner-column>

		</div>
	</main>

	<footer>
		
	</footer>
	
</body>
</html>