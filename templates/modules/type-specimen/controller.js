function typeSpecimen() {

	document.addEventListener("DOMContentLoaded", () => {

		const specimenMenu = document.querySelector("#specimen-menu");

		const scaleMenu = document.querySelector("#scale-menu");
		const fontMenu = document.querySelector("#font-menu");

		let specimens = document.querySelectorAll(".specimen");
		const specimenModule = document.querySelector("#specimen-text");

		let scale = "";
		let font = "";
		let fontSize = "";
		let base = 16;

		specimenMenu.addEventListener("change", function(e) {

			scale = scaleMenu.value;
			font = fontMenu.value;

			// change module font

			function setSpecimenFont(property) {

				property = getComputedStyle(document.documentElement).getPropertyValue(property);
				console.log(property);

				specimens.forEach(specimen => {
					specimen.style.fontFamily = property;
				})
			}

			switch(font) {
			  case "display":
			    setSpecimenFont('--display-type');
			    break;
			  case "accent":
			    setSpecimenFont('--accent-type');
			    break;
			  case "body":
			    setSpecimenFont('--body-type');
			    break;
			  default:
			    setSpecimenFont('--display-type');
			}

			// change module scale

			let scaleValue;

			switch(scale) {
			  case "minor-third":
	            scaleValue = 1.2;
	            break;
	        case "major-third":
	            scaleValue = 1.25;
	            break;
	        case "perfect-fourth":
	            scaleValue = 1.333;
	            break;
	        case "augmented-fourth":
	            scaleValue = 1.414;
	            break;
	        case "perfect-fifth":
	            scaleValue = 1.5;
	            break;
	        case "golden-ratio":
	            scaleValue = 1.618;
	            break;
	        default:
	            scaleValue = 1.5; 
	            break;
			}

			// console.log(scaleValue);

			// specimenModule.style.setProperty('--scale', scaleValue);
			document.documentElement.style.setProperty('--scale', scaleValue);

			// console.log(specimenModule.style.getPropertyValue('--scale'))

		});

	});

}

export default typeSpecimen