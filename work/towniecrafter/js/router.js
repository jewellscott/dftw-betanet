function renderHome() {
	return  `
		<home-info>

			<picture>
				<img src="https://peprojects.dev/images/square.jpg" alt="">
			</picture>
			<h1>TownieCrafter</h1>
			<p>
				An app... to craft townies. And households. And families. And whatever.
			</p>

			<!-- <button class="main-menu-button">
				Sign In
			</button>
			<button class="main-menu-button">
				Sign Up
			</button> -->

			<button data-id="main-menu" class="main-menu-button">
				Open Sesame
			</button>

		</home-info>
	`;
}

function renderView(view) {
	console.log(view);
	let template = "";

	if (view == 'home') {
		template = renderHome();
	}

	if (view == 'main-menu') {
		template = `
			<main-menu>
				<button data-id="cas-edit" class="main-menu-button">
							Create-A-Sim
				</button>

				<button data-id="caf-config" class="main-menu-button">
							Create-A-Family
				</button>

				<button data-id="saved-sims" class="main-menu-button">
							Saved Sims
				</button>
			</main-menu>
	`}

	if (view == 'user-pref') {
		template = `
		<user-prefs>
			<h1>User Preferences</h1>

			<section>
				<h2>Owned Packs</h2>
				<form action="">

				<fieldset>
					<h3>Collections</h3>
					<input type="checkbox" id="uc" name="uc" checked />
				   <label for="uc">Ultimate Collection</label>

				   <input type="checkbox" id="sc" name="usc" />
				   <label for="sc">Super Collection (Mac)</label>
				</fieldset>

				<fieldset>
					<h3>Individual Packs</h3>

				  	<input type="checkbox" id="base" name="base" />
				   <label for="base">Base Game</label>

				   <br>

				   <input type="checkbox" id="uni" name="base" />
				   <label for="uni">University</label>

				   <input type="checkbox" id="ofb" name="ofb" />
				   <label for="ofb">Open for Business</label>

				   <input type="checkbox" id="pets" name="pets" />
				   <label for="pets">Pets</label>

				   <input type="checkbox" id="seasons" name="seasons" />
				   <label for="seasons">Seasons</label>

				   <input type="checkbox" id="bv" name="bv" />
				   <label for="bv">Bon Voyage</label>

				   <input type="checkbox" id="ft" name="ft" />
				   <label for="ft">FreeTime</label>

				   <input type="checkbox" id="al" name="al" />
				   <label for="al">Apartment Life</label>
				</fieldset>
			 </form>
			</section>

		 	<section>
				<h2>User Generated Content</h2>

				<form action="">
					<input type="checkbox" id="lamare-ltws" name="lamare-ltws" />
			    <label for="lamare-ltws"><a href="https://modthesims.info/d/669675/50-new-lifetime-wants-for-sims-2.html">Lamare's Lifetime Wants</a></label>
			    	<h3>Custom careers</h3>
				   <p>Enter careers, separated by commas</p>
				   <p class="eg">E.g. X, Y, Z</p>

				   <label class="block-label"for="adult-custom-careers">Adult careers</label>
				   <textarea id="adult-custom-careers" name="custom-careers" rows="4" cols="50"></textarea>

				   <label class="block-label" for="elder-custom-careers">Elder careers</label>
				   <textarea id="elder-custom-careers" name="custom-careers" rows="4" cols="50"></textarea>

				   <label class="block-label" for="teen-custom-careers">Teen careers</label>
				   <textarea id="teen-custom-careers" name="custom-careers" rows="4" cols="50"></textarea>

				   <h3>Custom majors/degrees</h3>
				   <p>Enter majors/degrees, separated by commas</p>
				   <p class="eg">E.g. X, Y, Z</p>
				   <textarea id="custom-degrees" name="custom-degrees" rows="4" cols="50"></textarea>
				</form>
			 </section>
		</user-prefs>
	`}

	if (view == 'cas-edit') {
		template = `
			<cas-edit>
				<h1>Create-A-Sim</h1>

				<form class="cas-form" action="">
					form	
				</form>

				<button data-id="randomize" class="main-menu-button">
					Randomize All
				</button>
				<button data-id="saved-sims" class="main-menu-button">
					Save
				</button>
			</cas-edit>
	`}

	if (view == 'caf-config') {
		template = `
			<caf-config>
				<h1>Create-A-Family: Config</h1>

				<form class="caf-form" action=""></form>

				<button data-id="randomize" class="main-menu-button">
					Randomize
				</button>

				<button data-id="reset" class="main-menu-button">
					Reset
				</button>

				<button data-id="caf-edit" class="main-menu-button">
					Accept
				</button>
			</caf-config>
	`}

	if (view == 'caf-edit') {
		template = `
			<caf-edit>
				<h1>Create-A-Family: Edit</h1>

				<form class="caf-edit-form" action="">
					CAFEDITFORM	
				</form>

				<button data-action="addSim" class="main-menu-button">
					Add Sim
				</button>

				<button data-action="randomizeFamily" class="main-menu-button">
					Randomize
				</button>
				<button data-action="saveFamily" class="main-menu-button">
					Save
				</button>
			</caf-edit>
	`}

	if (view == 'saved-sims') {
		template = `
			<saved-sims>
				<h1>Saved Sims</h1>
				<form class="saved-sims-form">
					saved sims form
				</form>
			</saved-sims>
	`}

	outlet.innerHTML = template;

}

export {
	renderView
}