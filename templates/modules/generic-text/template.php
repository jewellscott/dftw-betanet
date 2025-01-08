<?php

	$content = $props["content"] ?? "<h2>Generic Text</h2><p>This is a module that can hold all kinds of text content: lists, headings, et cetera. </p><ul><li>Lists</li><li>Headings</li><li>Et cetera</li></ul><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in <strong>culpa qui officia</strong> deserunt mollitia animi, id est laborum et dolorum fuga.</p><h3>Heading</h3><p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, <a href='#'>adipisci velit</a>, sed <em>quia</em> non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur?</p>";

		$centered = $props["centered"] ?? null;

		if ($centered) {
			$isCentered = "centered";
		}

 ?>

<generic-text class="<?=$isCentered?>">
	<?=$content?>
</generic-text>