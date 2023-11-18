<?php 

/* 
Template Name: About
*/ 

?>

<?php 
    $page = "about";
?>

<?php get_header(); ?>
<nav>
    <?php get_template_part('src/includes/section', 'breadcrumb', $args = array( 'page' => 'about' )); ?>
    <?php get_template_part('src/includes/section', 'nav', $args = array( 'page' => 'about' )); ?>
    <?php get_template_part('src/includes/section', 'sidebar' ); ?>
</nav>
<section class="about-page">
    <div class="hero-about">
        <div class="header-group">
            <div class="subtext">NICE TO MEET YOU</div>
            <div class="heading-wrapper">
                <h1 class="header-outline">ABOUT</h1>
                <h1 class="header">ABOUT</h1>
            </div>
            
            <img src="<?= get_template_directory_uri() ?>/src/images/regina-main.png" alt="">
            <!-- <img src="<?= get_template_directory_uri() ?>/src/images/ivory-avatar.png" alt=""> -->
        </div>
    </div>
    <section class="intro">
        <div class="wrapper">
            <span>NICE TO MEET YOU</span>
            <h2>I make websites.</h2>
            <p>With a passion for music, the stage and graphic design, I enjoy working with people who value aesthetics, who understand the power of simplicity and who know that a good customer experience is paramount.</p>
            <p>With a passion for music, the stage and graphic design, I enjoy working with people who value aesthetics, who understand the power of simplicity and who know that a good customer experience is paramount.</p>
        </div>
    </section>
    <!-- <img class="avatar" src="<?= get_template_directory_uri() ?>/src/images/ivory-avatar-white.png" alt="" > -->
</section>


<!-- <section class="parallax"></section> -->

<section id="about">
    <div class="wrapper">
                <div class="section-header">
                    <h2>Skill Sets</h2>
                    <p>What I can do for you</p>
                </div>
                <div class="section-content">
                    <div class="box">
                        <img src="<?= get_template_directory_uri() ?>/src/images/icon-web.png" alt="">
                        <div class="skill">
                            Web Developer
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor e et dolore magna aliqua.
                        </div>
                    </div>
                    <div class="box">
                        <img src="<?= get_template_directory_uri() ?>/src/images/icon-ui.png" alt="">
                        <div class="skill">
                            Frontend Dev
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor e et dolore magna aliqua.
                        </div>
                    </div>
                    <div class="box">
                        <img src="<?= get_template_directory_uri() ?>/src/images/icon-gfx.png" alt="">
                        <div class="skill">
                            GFX Design
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labor e et dolore magna aliqua.
                        </div>
                    </div>
                </div>
            </div>
        </section>

<section class="intro black">
    <div class="wrapper">
        <span>NICE TO MEET YOU</span>
        <h2>3 facts to know about me</h2>
        <p>1 - With a passion for music, the stage and graphic design, I enjoy working with people who value aesthetics, who understand the power of </p>
        <p>2 - With a passion for music</p>
    </div>
</section>



<?php get_template_part('src/includes/section', 'footer' ); ?>


<?php get_footer(); ?>