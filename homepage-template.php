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
        <?php include('./wp-content/themes/ndinda/inc/nav.php'); ?>
        <main class="landing-main">
            <h1><?= $hero_big_text; ?> </h1>
            <div class="row ">
                <span class="line-separator">
                    <img src="<?= get_template_directory_uri(); ?>/assets/line.svg" alt="" srcset="">
                </span>
                <h5><?= $hero_small_text; ?></h5>
            </div>
            <a href="<?= $hero_cta_link; ?>" class="btn btn-dark"><?= $hero_cta_text; ?> <img src="<?= get_template_directory_uri(); ?>/assets/arrow-right-white.png" class></a>
        </main>
    </section>

    <!--REPEATER -->
    <section class="statistics-section -mt-50 ">
        <div class="statistics-container bg-dark row">
            <?php
                if( $statistics != null ) :
                    $count = 0;
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
                            if($count < 2): 
                ?>
                    <div class="vertical-separator"></div>
            <?php
                            endif;
                        $count++;
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
    <div class="projects-section bg-dark" >
        <div class="header">
            <h2><?= $title; ?></h2>
            <img src="<?= get_template_directory_uri(); ?>/assets/zigzagline-white.svg" alt="" class="" />
        </div>
        <div class="projects">
            <?php
                if( $categories != null ) :
                    $count = 1;

                    foreach( $categories as $category ) :
                        $image = $category['image'];
                        $cat_text = $category['text'];
                        $cat_link = $category['link'];
                    
            ?>

                    <div class="single-project project-<?= $count; ?>">
                        <img src="<?= $image['url']; ?>" alt="" srcset="">
                        <h4><a href="<?= $cat_link; ?>"><?= $text; ?></a></h4>
                    </div>
                
            <?php
                    $count++;
                    endforeach;
                endif;
            ?>
            <div class="single-project project-link">
                    <a href="">
                        <img src="<?= get_template_directory_uri(); ?>/assets/more-cat-link.png" alt="" srcset="">
                    </a>
            </div>
        </div>
        <div class="projects-link">
            <a href="">View all projects  <img src="<?= get_template_directory_uri(); ?>/assets/arrow-right.png" alt="" srcset=""></a>
        </div>
    </div>
<?php
    endif;
?>


<?php 
    if(get_field('our_services_section')):

        $service_section = get_field('our_services_section');
        $services = $service_section['services'];

        
      
?>
<section class="our-service_section" id="services">
    <div class="our-service_header">
        <h3>Our Services</h3>
        <img src="<?= get_template_directory_uri(); ?>/assets/zigzagline.svg" alt="" class="" />
    </div>
    <div class="our-service_body">
        <?php
                if( $services != null ) :
                    $count = 1;

                    foreach( $services as $service ) :
                        $icon= $service['icon'];
                        $title = $service['title'];
                        $description = $service['description'];
                        
                    
        ?>

            <div class="our-service_single">
                <img src="<?=  $icon['url']; ?>" alt="" srcset="">
                <h4> <?= $title; ?> </h4>
                <p> <?= $description; ?> </p>
            </div>
        <?php
                $count++;
                endforeach;
            endif;
        ?>

      
    </div>
</section>

<?php
endif;
?>

<?php get_footer(); ?>