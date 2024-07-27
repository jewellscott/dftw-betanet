<jewell-diptych>
	
	<picture>
		<img src="/" id="random-bitmoji" class="home-bitmoji" alt="A bitmoji of me!">
	</picture>

	<div class="info">
		<h1 class="name xl-type rainbow top-level">Jewell Scott</h1>
		<h2 class="message l-type">Currently immersing myself in Design for the Web at Perpetual Education.</h2>
	</div>

</jewell-diptych>



<style>
	jewell-diptych {
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
	}
</style>