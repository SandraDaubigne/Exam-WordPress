<?php
/*
Template Name: Right Sidebar Layout
*/
get_header();
the_post();

$posts = get_posts(['post_per_page' => 10]);

print_r($posts);
?>

<section>
<?php the_content(); ?>
</section>



<?php
get_footer();

?>