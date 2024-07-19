<jewell-diptych>
	
	<picture>
		<img src="/" id="random-bitmoji" class="home-bitmoji" alt="A bitmoji of me!">
	</picture>

	<div class="info">
		<h1 class="name xl-type rainbow">Jewell Scott</h1>
		<h2 class="message x-type">Currently immersing myself in Design for the Web at Perpetual Education.</h2>
	</div>

</jewell-diptych>



<style>
	jewell-diptych {
		display: grid;
		gap: 20px;
		padding-block: 40px;
		.name {

		}
		.message {
			margin-top: 1em;

		}
		@media (width < 800px) {
			justify-items: center;
			picture {
				max-width: 500px;
			}
		}
		@media (width > 800px) {
			grid-template-columns: 1fr 1fr;
			align-items: center; 
		}
	}
</style>