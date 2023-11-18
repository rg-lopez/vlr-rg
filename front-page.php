<?php get_header(); ?>
<section class="front-page">
    <div class="watermark">
        <div class="heading">
            <img src="<?= get_template_directory_uri() ?>/src/images/logo-teal.png" alt="">
            <div class="title">IVRY-X</div>
        </div>
        <div class="sub-heading">LOPEZ /// REGINA</div>
    </div>

    <div class="main-nav">
        <a href="#" class="nav-item active">
            <span class="icon"></span>
            <div class="title">Play</div>
        </a>
        <a href="<?= get_template_directory_uri() ?>/about" class="nav-item">
            <span class="icon"></span>
            <div class="title">About</div>
        </a>
        <a href="<?= get_template_directory_uri() ?>/portfolio" class="nav-item">
            <span class="icon"></span>
            <div class="title">Portfolio</div>
        </a>
        <a href="#" class="nav-item">
            <span class="icon"></span>
            <div class="title">Career</div>
        </a>
        <a href="#" class="nav-item">
            <span class="icon"></span>
            <div class="title">Contact</div>
        </a>
    </div>

    <?php get_template_part('src/includes/section', 'sidebar' ); ?>
</section>




<?php get_footer(); ?>