

<application>


	<h2 class="rainbow"><span>A</span><span>d</span><span>o</span><span>p</span><span>t</span> <span>a</span> <span>'</span><span>s</span><span>t</span><span>a</span><span>!</span></h2>


	<?php


		/* 
		$guests = 0;
		$berries = 0;

		if (isset($_POST["submit"])) {

			if(isset($_POST["guests"])) {
				$guests = floatval($_POST["guests"]);
			}

			if(isset($_POST["berries"])) {
				$berries = floatval($_POST["berries"]);
			}

			$total = $guests * $berries;

			echo "<p>$total</p>";
		}
		
		*/
	?>

	<form method="POST">

 		<div class="field">
 			<label>First Name</label>
	 		<input type="text" name="first-name">
 		</div>

 		<div class="field">
 			<label>Last Name</label>
	 		<input type="number" name="last-name">
 		</div>

 		<div class="field block-fit">
 			<label>I want to adopt:</label>
 			<!-- change this to pull from the monster object using their ids and names-->
 			<select id="monsters" name="monsters">
 			  <option value="" selected disabled hidden></option>
			  <option value="orangina">Orangina</option>
			  <option value="mr-banana">Mr. Banana</option>
			  <option value="limabean">Limabean</option>
			  <option value="miss-reads-a-lot">Miss-Reads-A-Lot</option>
			  <option value="shadow">Shadow</option>
			  <option value="fragoo">Fragoo</option>
			</select>
 		</div>

 		<div class="field block">
 			<label>Address</label>
 			<div class="nested-field block">
 				<label>Street Address</label>
 				<input type="text">
 			</div>
 			<div class="nested-field">
 				<label>City</label>
 				<input type="text">
 			</div>
 			<div class="nested-field">
 				<label>State</label>
 				<select>
 					<option value="" selected disabled hidden></option>
					<option value="AL">AL</option>
					<option value="AK">AK</option>
					<option value="AR">AR</option>
					<option value="AZ">AZ</option>
					<option value="CA">CA</option>
					<option value="CO">CO</option>
					<option value="CT">CT</option>
					<option value="DC">DC</option>
					<option value="DE">DE</option>
					<option value="FL">FL</option>
					<option value="GA">GA</option>
					<option value="HI">HI</option>
					<option value="IA">IA</option>
					<option value="ID">ID</option>
					<option value="IL">IL</option>
					<option value="IN">IN</option>
					<option value="KS">KS</option>
					<option value="KY">KY</option>
					<option value="LA">LA</option>
					<option value="MA">MA</option>
					<option value="MD">MD</option>
					<option value="ME">ME</option>
					<option value="MI">MI</option>
					<option value="MN">MN</option>
					<option value="MO">MO</option>
					<option value="MS">MS</option>
					<option value="MT">MT</option>
					<option value="NC">NC</option>
					<option value="NE">NE</option>
					<option value="NH">NH</option>
					<option value="NJ">NJ</option>
					<option value="NM">NM</option>
					<option value="NV">NV</option>
					<option value="NY">NY</option>
					<option value="ND">ND</option>
					<option value="OH">OH</option>
					<option value="OK">OK</option>
					<option value="OR">OR</option>
					<option value="PA">PA</option>
					<option value="RI">RI</option>
					<option value="SC">SC</option>
					<option value="SD">SD</option>
					<option value="TN">TN</option>
					<option value="TX">TX</option>
					<option value="UT">UT</option>
					<option value="VT">VT</option>
					<option value="VA">VA</option>
					<option value="WA">WA</option>
					<option value="WI">WI</option>
					<option value="WV">WV</option>
					<option value="WY">WY</option>
				</select>

 			</div>
 			<div class="nested-field">
 				<label>Zip Code</label>
 				<input type="number" class="zip">
 			</div>
 		</div>

 		<div class="field block-full">
 			<label>Email</label>
	 		<input type="email" name="email">
 		</div>

 		<div class="field block">
 			<label>Phone Number</label>
 			<input type="phone">
		<!-- 	<div class="nested-field block">
 				<label class>Phone type</label>
	 				<input type="radio" id="html" name="fav_language" value="HTML">
					<label for="html">HTML</label><br>
					<input type="radio" id="css" name="fav_language" value="CSS">
					<label for="css">CSS</label><br>
					<input type="radio" id="javascript" name="fav_language" value="JavaScript">
					<label for="javascript">JavaScript</label>
 			</div> -->
 		</div>

		<div class="field block">
 			<label>Names and ages of all permanent residents</label>
	 		<textarea name="residents" rows="6" cols="50"></textarea>
 		</div>

 		<div class="field block">
 			<label>Do you have pets? If so, list the breeds and temperaments. Otherwise, N/A.</label>
	 		<textarea name="pets" rows="3" cols="50"></textarea>
 		</div>

	 	<button type="submit" name="submit" class="block rainbow">
	 		<span>A</span><span>p</span><span>p</span><span>l</span><span>y</span><span>!</span> <span>:</span><span>-</span><span>)</span>
	 	</button>
	</form>
</application>


