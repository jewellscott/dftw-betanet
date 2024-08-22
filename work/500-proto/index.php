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
			<a href="?page=home" class="site-logo">500 Greatest</a>
	
			<nav class="site-menu">

				<nav class="album-filters">
					<a href="?page=albums" class="albums-ranked">⦿ Albums, Ranked</a>
				</nav>
				

				<nav class="list-filters">
					<span class="nav-label">Filter by</span>
					<!--  ?page=list&filter=artist -->
					<a href="#" class="dead">Artist</a>
					<a href="#" class="dead">Genre</a>
					<a href="#" class="dead">Year</a>
					<a href="#" class="dead">Label</a>
				</nav>

				<nav class="user-menu">
					<a href="?page=my-albums" class="add-album">My Albums</a>
					<a href="?page=add-album" class="add-album">+ Add Album</a>
				</nav>
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