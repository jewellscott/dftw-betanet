<header class="site-header">

	<button class="menu-toggle">	
		<?php include('partials/icon.php'); ?>
	</button>

	<a href="#" class="profile-link">
		<?php include('partials/avatar.php'); ?>
	</a>

	<a href="#" class="logo"></a>

	<button class="search">
		<?php include('partials/icon.php'); ?>
	</button>

</header>

<style>
	.site-header {
		border: 2px solid blue;
		background-color: black;
		display: grid;
		grid-template-columns: auto auto 1fr auto;
		align-items: center;
		position: relative;
		.logo {
			justify-self: center;
		}

		.menu-toggle, .search {
			padding: 10px;
			background: none;
			fill: white;
			border: 0;
			display: grid;
		}
		.search {
			grid-column-start: 4;
		}
	}

	.profile-link {
		max-width: 20px;
		border-radius: 50%;
		border: 1px solid white;
		overflow: hidden;
	}

	.logo {
		background-color: red;
		max-width: 100px;
		width: 100%;
		aspect-ratio: 3 / 1;
		position: absolute;
		top: 50%;
		left: 50%;
		transform: translate(-50%, -50%);
	}
</style>