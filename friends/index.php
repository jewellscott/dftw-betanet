<?php include '../templates/partials/header.php'; ?>


	<main class="page-main">
		<div class="inner-column">
			<header class="page-header">
				<h1 class="top-level xl-type rainbow">Friends</h1>
				<h2 class="l-type">All of my PE peeps!</h2>
			</header>
		<section class="grid-column-3">
			<ul>
				<li class="l-type card-rainbow">
					<a href="../../andy">
						<img src="https://placehold.co/300" alt="Andy">
						<h2>Andy</h2>
					</a>
				</li>
				<li class="l-type">
					<a href="../../anna/">
						<img src="https://placehold.co/300" alt="Anna">
						<h2>Anna</h2>
					</a>
				</li>
				<li class="l-type">
					<a href="../../lex/">
						<img src="https://peprojects.dev/beta-one/jewell-hosted/bitmoji-resized/lex/bitmoji1.png" alt="Lex">
						<h2>Lex</h2>
					</a>
				</li>
				<li class="l-type">
					<a href="../../oli">
						<img src="https://placehold.co/300" alt="Oli">
						<h2>Oli</h2>
					</a>
				</li>
				<li class="l-type">
					<a href="../../peter">
						<img src="/" alt="Peter" id="peter-bitmoji">
						<h2>Peter</h2>
					</a>
				</li>
				<li class="l-type">
					<a href="../../stephanie">
						<img src="/" alt="Stephanie" id="stephanie-bitmoji">
						<h2>Stephanie</h2>
					</a>
				</li>
				<li class="l-type">
					<a href="../../derek/">
						<img src="https://placehold.co/300" alt="Derek">
						<h2>Derek</h2>
					</a>
				</li>
			</ul>
		</section>
	</div>
	</main>

	<footer class="site-foot">
		<p class="tagline"><a href="https://youtu.be/R_nviNS0IAw?si=G_oLg3MDTul68Zj5&t=205" target="_blank">Poor, lonely computer. It's time someone programmed you.</a></p>
		<nav class="contact-nav">
			<ul>
				<li><a href="/">Contact</a></li>
				<span class="footer-icon"> / </span>
				<li><a href="/">Substack</a></li>
			</ul>
		</nav>
	</footer>
</div>
<script>

	function getRandomInt(max) { // number between 1 & max
  return (Math.floor(Math.random() * Math.floor(max)))+1;
}

	let stephanie = document.getElementById("stephanie-bitmoji");
stephanie.src = "https://peprojects.dev/beta-one/jewell-hosted/bitmoji-resized/stephanie/bitmoji" + getRandomInt(12) + ".png";

	let peter = document.getElementById("peter-bitmoji");


peter.src = "https://peprojects.dev/beta-one/jewell-hosted/bitmoji-resized/peter/bitmoji" + getRandomInt(4) + ".png";

</script>
</body>
</html>