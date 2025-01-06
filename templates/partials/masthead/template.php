<?php 

	if (isset($_GET["page"])) {
		$page = $_GET["page"];
	}
 ?>

<masthead>

	<a href="<?=BASE_URL?>" class="site-logo">
		<?php include(getFile('templates/components/site-logo/template.php'));?>
	</a>

	<nav class="site-nav">
		<ol class="link-list">
			<li><span class="tech-type rainbow"><?="?" . queryString();?></span></li>
			<li><a href="?page=about" class="tech-type <?=($page === "about") ? "invert" : "";?>">About</a></li>
			<li><a href="?page=blog" class="tech-type <?=($page === "blog") ? "invert" : "";?>">Blog</a></li>
			<li><a href="?page=work" class="tech-type <?=($page === "work") ? "invert" : "";?>">Work</a></li>
			<li><a href="?page=contact" class="tech-type <?=($page === "contact") ? "invert" : "";?>">Contact</a></li>
			<li><a href="?page=goals" class="tech-type <?=($page === "goals") ? "invert" : "";?>">Goals</a></li>
			<li><a href="?page=resume" class="tech-type <?=($page === "resume") ? "invert" : "";?>">Resume</a></li>
			<li><a href="?page=style-guide" class="tech-type <?=($page === "style-guide") ? "invert" : "";?>">Style Guide</a></li>
		</ol>
	</nav>
</masthead>
