<diptych-404>
	
	<picture>
		<img src="/" id="random-bitmoji" class="home-bitmoji" alt="A bitmoji of me!">
	</picture>

	<div class="info">
		<h1 class="name xl-type rainbow">404</h1>
		<p class="message l-type">Sorry... couldn't find that page. Forgive me?</h2>

		<p class="l-type recommendations">Maybe jam to some <span class="tech-type"><a href="/">Tunes</a></span> or check out my <span class="tech-type sm-type"><a href="/">Work</a></span> instead.</p>


	</div>

</diptych-404>



<style>
	diptych-404 {
		display: grid;
		gap: 1em;

		picture {
			.home-bitmoji {
				max-width: 500px;
			}
/*			background-color: red;*/
		}

		.name {
			margin-bottom: 1em;
			text-transform: uppercase;
		}

		.info {
			margin-block: 5em;
			line-height: 2em;	
		}

		@media (width < 800px) {
			justify-items: center;
			picture {
				max-width: 400px;
				margin: 1em 1em 4em 1em;
			}
			.message {
        		line-height: 1.2em;
        		margin-bottom: 2em;
			}
		}
		@media (width > 800px) {
			grid-template-columns: 1fr 1fr;
			align-items: center; 
		}

		@media (width > 1200px) {
			.name {
				line-height: .1em;
			}
		}
	}
</style>


<script>

	function getRandomInt(max) { // number between 1 & max
  return (Math.floor(Math.random() * Math.floor(max)))+1;
}
    
let jewell = document.getElementById("random-bitmoji");
jewell.src = "https://peprojects.dev/beta-one/jewell-hosted/bitmoji-resized/404/bitmoji" + getRandomInt(48) + ".png";
</script>