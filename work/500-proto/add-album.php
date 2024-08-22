<?php 

	if(isset($_POST["add"])) {
		echo 'Added' . ($_POST["add"]);
	}

?>

<h1>Add Album</h1>

<form method="POST">

	<fieldset>
		<label for="">Title</label>
		<input type="text">
	</fieldset>

	<fieldset>
		<label for="">Artist</label>
		<input type="text">
	</fieldset>

	<fieldset>
		<label for="">Cover URL</label>
		<input type="text">
	</fieldset>

	<fieldset>
		<label for="">Year</label>
		<input type="number" min="1900" max="2030" step="1">
	</fieldset>

	<button type="submit" name="add">
		Add Album
	</button>

</form>