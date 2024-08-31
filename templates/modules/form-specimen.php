<h2 class="xl-type top-level rainbow">Form Specimen</h1>


<form class="form-specimen content-left" action="">

<!--	## HTML input types
		checkbox
		color
		date
		datetime-local
		email
		file
		hidden
		image
		month
		number
		password
		radio
		range
		reset
		search
		tel
		text
		time
		url
		week -->

	<fieldset>
		<label for="title">Title</label>
		<input 
			name="title" 
			type="text"
			required
			>

		<label for="artist">Artist</label>
		<input 
			name="artist" 
			type="option"
			required
			>
	</fieldset>

	<fieldset>
		
	  <input type="radio" id="html" name="fav_language" value="HTML">
	  <label for="html">HTML</label>

	  <input type="radio" id="css" name="fav_language" value="CSS">
	  <label for="css">CSS</label>

	  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
	  <label for="javascript">JavaScript</label>

		
	</fieldset>

	<fieldset>

		<div class="grouped">
			<input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
  			<label for="vehicle1"> I have a bike</label>
		</div>

		<div class="grouped">
			<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
  		<label for="vehicle2"> I have a car</label>
		</div>

		<div>
			<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
 			<label for="vehicle3"> I have a boat</label>
		</div>
 
	</fieldset>

	<fieldset>
		<label for="favcolor">Select your favorite color:</label>
  		<input type="color" id="favcolor" name="favcolor" value="#0000FF">
	</fieldset>

	<fieldset>
		
		<label for="birthday">Birthday:</label>
  		<input type="date" id="birthday" name="birthday" max="2003-01-01" min="1910-12-31" >

  		<label for="birthdaytime">Birthday (date and time):</label>
  		<input type="datetime-local" id="birthdaytime" name="birthdaytime">

  		<label for="bdaymonth">Birthday (month and year):</label>
  		<input type="month" id="bdaymonth" name="bdaymonth">
	</fieldset>	

	<fieldset>
		<label for="email">Enter your email:</label>
  		<input type="email" id="email" name="email">
	</fieldset>	

	<fieldset>
		<label for="myfile">Select a file:</label>
  		<input type="file" id="myfile" name="myfile">
	</fieldset>

	<fieldset>
		<label for="quantity">Quantity (between 1 and 5):</label>
  		<input type="number" id="quantity" name="quantity" min="1" max="5">
	</fieldset>


	<fieldset>
		<label for="vol">Volume (between 0 and 50):</label>
  		<input type="range" id="vol" name="vol" min="0" max="50">
	</fieldset>


	<fieldset>
		<label for="gsearch">Search Google:</label>
  		<input type="search" id="gsearch" name="gsearch">

	</fieldset>

	<fieldset>
		<label for="phone">Enter your phone number:</label>
  		<input type="tel" id="phone" name="phone" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
	</fieldset>

	<fieldset>
		<label for="appt">Select a time:</label>
  		<input type="time" id="appt" name="appt">
	</fieldset>

	<fieldset>
		<label for="homepage">Add your homepage:</label>
  		<input type="url" id="homepage" name="homepage">
	</fieldset>

	<fieldset>
		<label for="week">Select a week:</label>
  		<input type="week" id="week" name="week">
	</fieldset>

	<fieldset>
		
		<label for="guitars">Pick a guitar</label>

		<select name="guitars" id="guitars">
		  <option value="stratocaster">Stratocaster</option>
		  <option value="telecaster" selected>Telecaster</option>
		  <option value="jazzmaster">Jazzmaster</option>
		  <option value="jaguar">Jaguar</option>
		  <option value="mustang">Mustang</option>
		</select>

	</fieldset>

	<fieldset>
		
		<label for="guitars">Pick a guitar (size)</label>

		<select name="guitars" id="guitars" size="5">
		  <option value="stratocaster">Stratocaster</option>
		  <option value="telecaster" selected>Telecaster</option>
		  <option value="jazzmaster">Jazzmaster</option>
		  <option value="jaguar">Jaguar</option>
		  <option value="mustang">Mustang</option>
		</select>

	</fieldset>

	<fieldset>
		
		<label for="guitars">Pick a guitar (size, multiple)</label>

		<select name="guitars" id="guitars" size="5" multiple>
		  <option value="stratocaster">Stratocaster</option>
		  <option value="telecaster" selected>Telecaster</option>
		  <option value="jazzmaster">Jazzmaster</option>
		  <option value="jaguar">Jaguar</option>
		  <option value="mustang">Mustang</option>
		</select>

	</fieldset>

	<fieldset>
		
		<label for="guitars">Pick a guitar (optgroup)</label>

		<select name="guitars" id="guitars">

			<optgroup label="Renowned">
				<option value="stratocaster">Stratocaster</option>
		  		<option value="telecaster" selected>Telecaster</option>
			</optgroup>
			<optgroup label="Unsung">
				<option value="jazzmaster">Jazzmaster</option>
		  		<option value="jaguar">Jaguar</option>
		  		<option value="mustang">Mustang</option>
			</optgroup>
		</select>

	</fieldset>

	<fieldset>
		
		<label for="guitars">Pick a guitar (optgroup, size)</label>
		<!-- size describes the view -->
		<select name="guitars" id="guitars" size="5">

			<optgroup label="Renowned">
				<option value="stratocaster">Stratocaster</option>
		  		<option value="telecaster" selected>Telecaster</option>
			</optgroup>
			<optgroup label="Unsung">
				<option value="jazzmaster">Jazzmaster</option>
		  		<option value="jaguar">Jaguar</option>
		  		<option value="mustang">Mustang</option>
			</optgroup>
		</select>

	</fieldset>

	<fieldset>

		<legend>Personalia</legend>
	    <label for="fname">First name</label>
	    <input type="text" id="fname" name="fname" value="Rick">

	    <label for="lname">Last name</label>
	    <input type="text" id="lname" name="lname" value="James">

	</fieldset>


	<fieldset>
		 <label for="browsers">Browsers</label>
		 <input list="browsers">
	  	 <datalist id="browsers">
		    <option value="Edge">
		    <option value="Firefox">
		    <option value="Chrome">
		    <option value="Opera">
		    <option value="Safari">
	  </datalist>
	</fieldset>

	<fieldset>
	   <input type="number" id="b" name="b" value="50" /> +
  		<input type="number" id="a" name="a" value="20" /> =
  		<output name="result" for="a b" class="tech-type">70</output>
	</fieldset>























	<fieldset>
		
		<button 
			class="tech-type"
			type="reset" 
			name="reset"
			>Submit
		</button>

		<button 
			class="tech-type"
			type="submit" 
			name="submit"
			><span class="rainbow-text">Reeeeeset</span>
	</button>

	</fieldset>
</form>