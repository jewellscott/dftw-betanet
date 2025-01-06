<?php 

    $blogFiles = scandir('data/blog');
    $blogData = [];

    foreach ($blogFiles as $file) {
        if (pathinfo($file, PATHINFO_EXTENSION) === 'json') {

            $b = getData("projects/$file");

            array_push($blogData, $b);

        }
    }

    $heading = $props["heading"] ?? "Blog Spotlight";    
    $filter = $props["filter"] ?? null;
    $blogs = $props["blogs"] ?? [];


    if (empty($blogs)) {

        if ($filter) {

            $blogs = [];

            foreach ($blogsData as $blog) {
                if(isset($blog["$filter"])) {
                    array_push($blogs, $blog);
                }
            }
        } else {
            $blogs = $blogsData;
        }
    } else {

         // if you specify a list of projects (slugs)

            $blogSlugs = [...$blogs]; 

            $blogs = []; // reset to empty because we use this ref in the template

            // filter the projectsData by the slugs and add them to projects

            foreach ($blogsData as $blog) {
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

    <ul class="blog-list">
            <?php foreach ($blogs as $blog) { ?>
                <li class="blog">
                    <?php   
                    include('templates/components/project-card/template.php'); ?>
                </li>
            <?php } ?>
    </ul>
</blog-spotlight>

<?php 

    $blogs = null;
    $filter = null;
    $latest = false;

 ?>

