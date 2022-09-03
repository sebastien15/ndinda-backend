<?php /* Template Name: homepage  */
get_header(); ?>

<?php 
    if(get_field('section_one')):

        $section_one = get_field('section_one');

        $hero_big_text = $section_one['hero_text_big'];
        $hero_small_text = $section_one['hero_text_small'];
        $hero_image = $section_one['hero_image'];
        $hero_cta_text = $section_one['hero_cta_text'];
        $hero_cta_link = $section_one['hero_cta_link'];
        $statistics = $section_one['statistics'];
?>
    <section class="landing-section">
        <!--  require_once('../inc/nav.php'); ?> -->
        <main class="landing-main">
            <h1><?= $hero_big_text; ?></h1>
            <div class="row mb-<?= $hero_small_text; ?>">
                <span class="line-separator">
                    <img src="./assets/line.svg" alt="" srcset="">
                </span>
                <h5><?= $hero_small_text; ?></h5>
            </div>
            <a href="#" class="btn btn-dark"><?= $hero_cta_text; ?><img src="./assets/arrow.svg" class></a>
        </main>
    </section>

    <!--REPEATER -->
    <section class="statistics-section -mt-50 ">
        <div class="statistics-container bg-dark row">
            <?php

                if( $statistics != null ) :
                    foreach( $statistics as $statistic ) :
                        $number = $statistic['number'];
                        $text = $statistic['text'];
            ?>

                
                    
                        <div class="single-statistic">
                            <h2><?= $number; ?></h2>
                            <h5><?= $text; ?></h5>
                            <img src="<?= get_template_directory_uri(); ?>/assets/zigzagline.svg">
                        </div>
                    
            <?php
                    endforeach;
                endif;
            ?>
        </div>
    </section>

<?php
    endif;
?>



<?php 
    if(get_field('section_two')):

        $section_two = get_field('section_two');

        $col_one_image= $section_two['col_one_image'];
        $col_two_title = $section_two['col_two_title'];
        $col_two_text = $section_two['col_two_text'];
      
?>
<section class="about-section row">
    <div class="about-image">
        <img src="<?= get_template_directory_uri(); ?>/assets/about-img.png">
    </div>

    <article class="about-description">
        <h2><?= $col_two_title; ?></h2>
        <img src="<?= get_template_directory_uri(); ?>/assets/zigzagline.svg" />
        <p>
        <?= $col_two_text; ?>
        </p>
    </article>
</section>


<?php
    endif;
?>



<?php 
    if(get_field('section_three')):

        $section_three = get_field('section_three');

        $title= $section_three['title'];
        $categories = $section_three['categories'];
        $cta_text = $section_three['cta_text'];
        $cta_link = $section_three['cta_link'];
      
?>
<div class="projects-section bg-dark">
    <div class="header">
        <h2> <?= $title; ?></h2>
        <img src="<?= get_template_directory_uri(); ?>/assets/zigzagline-white.svg" alt="" class="" />
    </div>


            <?php
                if( $categories != null ) :
                    foreach( $categories as $category ) :
                        $image = $statistic['image'];
                        $cat_text = $statistic['text'];
                        $cat_link = $statistic['link'];
            ?>
            
                <div class="projects">
                    <div class="single-project project-1">
                        <img src="<?= get_template_directory_uri(); ?>/assets/residential.png" alt="" srcset="">
                        <h4><?= $cat_text; ?></h4>
                    </div>

                    <div class="single-project project-link">
                        <a href="">
                            <img src="<?= get_template_directory_uri(); ?>/assets/more-cat-link.png" alt="" srcset="">
                        </a>
                    </div>
                </div>
            <?php
                    endforeach;
                endif;
            ?>
    <div class="projects-link">
        <a href=""> <?= $cta_text; ?><img src="<?= get_template_directory_uri(); ?>/assets/arrow-right.png" alt=""
                srcset=""></a>
    </div>
</div>


<?php
    endif;
?>


<?php 
    if(get_field('our_services_section')):

        $service_section = get_field('our_services_section');

        $icon= $service_section['icon'];
        $title = $service_section['title'];
        $text = $service_section['text'];
      
?>
<section class="our-service_section">
    <div class="our-service_header">
        <h3>Our Services</h3>
        <img src="<?= get_template_directory_uri(); ?>/assets/zigzagline.svg" alt="" class="" />
    </div>
    <div class="our-service_body">
        <div class="our-service_single">
            <img src="<?= get_template_directory_uri(); ?>/assets/architectural design.png" alt="" srcset="">
            <h4>
                ARCHITECTURAL DESIGN
            </h4>
            <p>
                Combining creativity and functionalism to deliver sustainably
                designed spaces that cater to the needs of its occupants
            </p>
        </div>
        <div class="our-service_single">
            <img src="<?= get_template_directory_uri(); ?>/assets/architectural consultancy.png" alt="" srcset="">
            <h4>
                ARCHITECTURAL CONSULTANCY
            </h4>
            <p>
                Combining creativity and functionalism to deliver sustainably
                designed spaces that cater to the needs of its occupants
            </p>
        </div>
        <div class="our-service_single">
            <img src="<?= get_template_directory_uri(); ?>/assets/interial design.png" alt="" srcset="">
            <h4>
                INTERIOR DESIGN & FITTING DESIGN
            </h4>
            <p>
                We thrive to arrange and equip spaces that resonate with the identity and character of its occupants.
            </p>
        </div>
        <div class="our-service_single">
            <img src="<?= get_template_directory_uri(); ?>/assets/project managemenet.png" alt="" srcset="">
            <h4>
                PROJECT MANAGEMENT & SUPERVISION
            </h4>
            <p>
                To ensure standardized execution of our architectural works in their construction phase, we closely
                monitor the methods used to insure the sustainability of the projects we designed
            </p>
        </div>
    </div>
</section>

<?php
endif;
?>

<?php get_footer(); ?>