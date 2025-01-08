<?php 
	$json = file_get_contents('data/resume.json');
	$resumeData = json_decode($json, true);

	$skills = $resumeData["sections"][0]["content"];
	$work = $resumeData["sections"][1]["content"];
	$education = $resumeData["sections"][2]["content"];

	$lastUpdated = $resumeData["lastUpdated"];
 ?>


<resume-breakdown class="page-article">
	<section class="skills">
		<h2 class="attention-voice"><?=$resumeData["sections"][0]["heading"]?></h2>
		<article class="resume-card skills-card">
			<ul class="skills-list">
					<?php foreach ($skills as $s) {?>
						<li>
							<p><?=$s?></p>
						</li>
					<?php } ?>
			</ul>
		</article>
	</section>
	<section class="work">
		<h2 class="attention-voice"><?=$resumeData["sections"][1]["heading"]?></h2>
			<ul class="work-list">
				<?php foreach ($work as $w) {?>
					<li>
						<article class="resume-card work-card">
							<h3><?=$w["role"]?></h3>
							<h4><?=$w["company"]?></h4>
							<p class="display-type"><?=$w["start"]?> – <?=$w["end"]?></p>
							<ul>
								<?php foreach ($w["responsibilities"] as $r) {?>
									<li>
										<p><?=$r?></p>
									</li>
								<?php } ?>
							</ul>
						</article>
					</li>	
				<?php } ?>
			</ul>
		</section>
			<section class="education">
			<h2 class="attention-voice"><?=$resumeData["sections"][2]["heading"]?></h2>
				<ul class="education-list">
					<?php foreach ($education as $e) {?>
						<li>
							<article class="education-card work-card">
								<h3><?=$e["subject"]?></h3>
								<h4><?=$e["location"]?></h4>
							</article>
						</li>	
					<?php } ?>
				</ul>
		</section>
	</resume-breakdown>
