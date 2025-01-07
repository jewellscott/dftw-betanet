<?php 

    $blogFiles = scandir('data/blog');
    $blogData = [];

    foreach ($blogFiles as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {

            $b = getData("blog/$file");

            array_push($blogData, $b);

        }
    }

    $heading = $props["heading"] ?? "Blog Spotlight";    
    $filter = $props["filter"] ?? null;
    $blogs = $props["blogs"] ?? [];

    $grid = $props["grid"] ?? [];

    $isGrid = "";

    if ($grid) {
        $isGrid = "grid";
    }


    if (empty($blogs)) {

        if ($filter) {

            $blogs = [];

            foreach ($blogData as $blog) {
                if(isset($blog["$filter"])) {
                    array_push($blogs, $blog);
                }
            }
        } else {
            $blogs = $blogData;
        }
    } else {

         // if you specify a list of projects (slugs)

            $blogSlugs = [...$blogs]; 

            $blogs = []; // reset to empty because we use this ref in the template

            // filter the projectsData by the slugs and add them to projects

            foreach ($blogData as $blog) {
                if (in_array($blog['slug'], $blogSlugs)) {
                    array_push($blogs, $blog);
                }
            }
        }

        if ($latest) {

            $blogs = array_reverse($blog);
        }

 ?>

<blog-spotlight>
    <h2 class="attention-voice">
        <?=$heading?>
    </h2>

    <ul class="blog-list <?=$isGrid?>">
            <?php foreach ($blogs as $blog) { ?>
                <li class="blog">
                    <?php   
                    include('templates/components/blog-card/template.php'); ?>
                </li>
            <?php } ?>
    </ul>
</blog-spotlight>

<?php 

    $blogs = null;
    $filter = null;
    $latest = false;

 ?>

