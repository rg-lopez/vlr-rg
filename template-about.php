<?php 

/* 
Template Name: About
*/ 

?>

<?php 
    $page = "about";
?>

<?php get_header(); ?>
<section class="about-page">
    <?php get_template_part('src/includes/section', 'nav', $args = array( 'page' => 'about' )); ?>
    <?php get_template_part('src/includes/section', 'sidebar' ); ?>
</section>




<?php get_footer(); ?>