<?php 

    $exerciseFiles = scandir('data/e4p');
    $exercisesData = [];

    foreach ($exerciseFiles as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {
            // at first it was sending in other files... maybe invisible files

            $p = getData("e4p/$file");

            array_push($exercisesData, $p);

        }
    }

    $heading = $props["heading"] ?? "Exercises Spotlight";    
    $filter = $props["filter"] ?? null;
    $exercises = $props["exercises"] ?? [];


    if (empty($exercises)) {

        if ($filter) {

            $exercises = [];

            foreach ($exercisesData as $exercises) {
                if(isset($exercise["$filter"])) {
                    array_push($exercises, $exercise);
                }
            }
        } else {
            $exercises = $exercisesData;
        }
    } else {

         // if you specify a list of projects (slugs)

            $exerciseSlugs = [...$exercises]; 

            $exercises = []; // reset to empty because we use this ref in the template

            // filter the projectsData by the slugs and add them to projects

            foreach ($exercisesData as $exercise) {
                if (in_array($exercise['slug'], $exerciseSlugs)) {
                    array_push($exercises, $exercise);
                }
            }
        }

        if ($latest) {

            $exercises = array_reverse($exercises);
        }

 ?>

<exercises-spotlight>
    <h2 class="attention-voice">
        <?=$heading?>
    </h2>

    <ul class="exercise-list">
            <?php foreach ($exercises as $exercise) { ?>
                <li class="exericse">
                    <?php   
                    include('templates/components/exercise-card/template.php'); ?>
                </li>
            <?php } ?>
    </ul>
</exercises-spotlight>

<?php 

    $exercises = null;
    $filter = null;
    $latest = false;

 ?>

