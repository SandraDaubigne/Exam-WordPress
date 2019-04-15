<?php
/*
Template Name: Project Page
*/

get_header();

$projects = get_posts();

?>


<?php foreach ($projects as $project): ?>
    <?php 
        $fields = get_fields($project->ID); 
        $services = get_field('services' , $project->ID);
        print_r($fields);
        print_r($services);
    ?>
    <div class="project">
        <h3><?= $project->post_title; ?></h3>
        <ul>
        <?php foreach ($services as $service): ?>
        <li><?= $service['label']; ?></li>
        <?php endforeach; ?>
        </ul>

<?php if (isset($fields['project_manager'])): ?>
    <p>
    project Manager: <?= $fields['project_manager']; ?>
    </p>
<?php endif; ?>

        <?= $project->post_content; ?>
    </div>


<?php endforeach; ?>

<?php get_footer(); ?>