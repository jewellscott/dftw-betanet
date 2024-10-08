<good-for-the-soul>
	<header class="module-header">
		<ul>
			<li class="one">Grid systems</li>
			<li class="two">Grid systems</li>
			<li class="three">Grid systems</li>
		</ul>
	</header>
	<article>
		<picture>
			<img src="./images/portrait.jpg" alt="Grids are good for the soul">
		</picture>
		<article-content>
			<header class="article-header">
				<h1 class="text-5x weight-800">Grids are good for the soul</h1>
			</header>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos atque at maiores quam quos numquam, nihil labore, ducimus amet. Repellendus quos maxime, expedita sed culpa doloremque soluta iste, excepturi in.</p>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, voluptatibus nisi quo rem temporibus veniam exercitationem! Cum voluptatum non dolore sit. Quaerat sint sed quam alias a numquam sunt reprehenderit.</p>
		</article-content>
	</article>
</good-for-the-soul>

<style>
	good-for-the-soul {
			display: grid;
			grid-template-columns: 1fr 1fr 1fr 1fr;
			grid-template-rows: 50px auto 50px;
		.module-header {
			grid-column: 1 / 5;
			.one {
				background-color: blue;
				grid-column: 3 / span 2;
  				grid-row: 1 / 1
			}
			.two {
				background-color: red;
				grid-rows: 3 / 4;
			}
			.three {
				background-color: yellow;
				grid-rows: 4 / 5;
			}
		}
		article-content {
			picture {
				 grid-column: 2 / 5;
			}
		}
	}
</style>