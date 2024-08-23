<?php 

	if(isset($_POST["add"])) {
		$newAlbum = $_POST;
		echo 'Added ' . $newAlbum["title"] . ' by ' . $newAlbum["artist"] . ' (' . $newAlbum["year"] . ')';

		var_dump($newAlbum);
	}

?>

<h1>Add Album</h1>

<form method="POST">

	<fieldset>
		<label for="">Title</label>
		<input 
			name="title" 
			type="text"
			required
			>
	</fieldset>

	<fieldset>
		<label for="">Artist</label>
		<input 
			name="artist" 
			type="text"
			required
			>
	</fieldset>

	<fieldset>
		<label for="">Year</label>
		<input 
			name="year" 
			type="number" 
			value="<?=date("Y")?>"
			min="1900" 
			max="2030" 
			step="1"
			required
			>
	</fieldset>

	<fieldset>
		<label for="">Cover URL</label>
		<input 
			name="cover-url" 
			type="text"
			pattern="https?://.*\.(?:png|jpg|jpeg)"
			required
			>
	</fieldset>

	<fieldset>
		<label for="">Description</label>
		<input 
			name="description" 
			type="text"
			required
			>
	</fieldset>

	<button 
		type="submit" 
		name="add"
		required
		>
		Add Album
	</button>

</form>