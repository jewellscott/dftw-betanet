<?php

	$pageTitle = $pageTitle ?? "Page Header";
	$pageDescription = $pageDescription ?? "This is the description that will go under the page heading.";
	$links = $links ?? null;
	$lastUpdated = $lastUpdated ?? null;
	$topLevel = $topLevel ?? false;

	$isTopLevel = "";
	if ($topLevel) {
		$isTopLevel = "top-level";
	}
?>

<header>
	<inner-column>
		<page-header>
			<h1 class="banner-type rainbow <?=$isTopLevel?>"><?=$pageTitle?></h1>
				<div class="meta">
					<p class="quiet-voice"><?=$pageDescription?></p>
					<?php if ($links) { ?>
						<ul class="page-links">
							<?php foreach ($links as $link) { ?>
								<li>
									<a 
										href="<?=$link["url"]?>"
										class="tech-type">
											<?=$link["text"]?>
										</a>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</div>
				<?php if ($lastUpdated) { ?>
					<p class="last-updated callout"><span class="display-type strong-type">Last Updated: </span></span><span class="display-type"><?=$lastUpdated?></span></p>
				<?php } ?>
			</div>
		</page-header>
	</inner-column>
</header>
