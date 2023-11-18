<?php 

/* 
Template Name: Portfolio
*/ 

?>

<?php 
    $page = "portfolio";
?>

<?php get_header(); ?>
<section class="portfolio-page">
    <?php get_template_part('src/includes/section', 'breadcrumb', $args = array( 'page' => 'portfolio' )); ?>
    <?php get_template_part('src/includes/section', 'nav', $args = array( 'page' => 'portfolio' )); ?>
    <?php get_template_part('src/includes/section', 'sidebar' ); ?>

    <?php get_template_part('src/includes/section', 'gallery' ); ?>
</section>