<?php 

    // $json = file_get_contents('data/projects.json');
    // $projectsData = json_decode($json, true);

    $projectFiles = scandir('data/projects');
    $projectsData = [];

    foreach ($projectFiles as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
            // at first it was sending in other files... maybe invisible files

            $p = getData("projects/$file");

            array_push($projectsData, $p);

        }
    }

    $heading = $props["heading"] ?? "Projects Spotlight";    
    $filter = $props["filter"] ?? null;
    $projects = $props["projects"] ?? [];


    if (empty($projects)) {

        if ($filter) {

            $projects = [];

            foreach ($projectsData as $project) {
                if(isset($project["$filter"])) {
                    array_push($projects, $project);
                }
            }
        } else {
            $projects = $projectsData;
        }
    } else {

         // if you specify a list of projects (slugs)

            $projectSlugs = [...$projects]; 

            $projects = []; // reset to empty because we use this ref in the template

            // filter the projectsData by the slugs and add them to projects

            foreach ($projectsData as $project) {
                if (in_array($project['slug'], $projectSlugs)) {
                    array_push($projects, $project);
                }
            }
        }

        if ($latest) {

            $projects = array_reverse($projects);
        }

 ?>

<projects-spotlight>
    <h2 class="attention-voice">
        <?=$heading?>
    </h2>

    <ul class="project-list">
            <?php foreach ($projects as $project) { ?>
                <li class="project">
                    <?php   
                    include('templates/components/project-card/template.php'); ?>
                </li>
            <?php } ?>
    </ul>
</projects-spotlight>

<?php 

    $projects = null;
    $filter = null;
    $latest = false;

 ?>

