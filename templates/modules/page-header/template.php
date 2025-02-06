<?php

	$pageTitle = $pageTitle ?? "Page Header";
	$pageDescription = $pageDescription ?? "This is the description that will go under the page heading.";
	$links = $links ?? null;
	$lastUpdated = $lastUpdated ?? null;
	$published = $published ?? null;

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
					<p class="quiet-voice" ><?=$pageDescription?></p>
					<?php if ($links) { ?>
						<ul class="page-links">
							<?php foreach ($links as $link) { ?>
								<li>
									<a 
										href="<?=$link["url"]?>"
										target="_blank"
										class="tech-type">
											<?=$link["text"]?>
										</a>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</div>

				<?php if ($lastUpdated && $published) { ?>

					<p class="date callout">
							<span class="display-type strong-type">Published: </span></span><span class="display-type"><?=$published?></span>
							<span class="strong-type display-type"> / </span>
							<span class="display-type strong-type">Last Updated: </span></span><span class="display-type"><?=$lastUpdated?></span>
					</p>

				<?php } elseif ($lastUpdated) { ?>

					<p class="date callout">
							<span class="display-type strong-type">Last Updated: </span></span><span class="display-type"><?=$lastUpdated?></span>
					</p>

				<?php } elseif ($published) { ?>

					<p class="date callout">
							<span class="display-type strong-type">Published: </span></span><span class="display-type"><?=$published?></span>
							<span class="strong-type display-type"> / </span>
					</p>

				<?php } ?>

			</div>
		</page-header>
	</inner-column>
</header>
