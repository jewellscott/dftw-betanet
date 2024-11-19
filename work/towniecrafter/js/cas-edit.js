function casEdit() {

	function renderView() {

		let family = JSON.parse(localStorage.getItem("familyConfig"));

		let formTemplate = "";

		formTemplate += `

			<sim-detail>
				<h2>${family.name} Family</h2>
			</sim-detail>
		`;


	}







}

export {
	casEdit
}