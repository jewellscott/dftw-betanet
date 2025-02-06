<?php 

	$c = $goal["completed"];
	$t = $goal["title"];
	$d = $goal["description"];

 ?>

<goal-card>
	<goal-action>
		<?php if ($c) {?>
			🔘
		<?php } else { ?>
			⚪
		<?php } ?>
	</goal-action>
	<goal-content>
		<h3 class="title"><?=$t?></h3>
		<p><?=$d?></p>
	</goal-content>
</goal-card>