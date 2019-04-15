<?php
/*
Template Name: Left Sidebar Layout
*/
get_header();
the_post();

?>

<?php get_sidebar(); ?>


<section>
<?php the_content(); ?>
</section>


<?php
get_footer();

?>