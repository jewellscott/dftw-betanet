<jewell-diptych-home>
	
	<picture>
		<img src="/" id="random-bitmoji" class="home-bitmoji" alt="A bitmoji of me!">
	</picture>

	<div class="info">
		<h1 class="name xl-type rainbow">Jewell Scott</h1>
		<p class="message l-type">Currently immersing myself in Design for the Web at Perpetual Education.</h2>

		<!-- <p class="message m-type">Take a look around... </h2> -->

	</div>

</jewell-diptych-home>



<style>
	jewell-diptych-home {
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

		.message {
			margin-block: 1em;
			line-height: 1.2em;
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