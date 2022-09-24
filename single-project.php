<?php
/**
 * The template for displaying all single projects
 *
 *
 * @package ndinda
 */

get_header();
?>

	<main class="">
        <section class="swipper-container">
            <div class="swipper-nav ">
                <a href="/" class="menu-logo logo-white">
                    <img src="<?= get_template_directory_uri(); ?>/assets/logo-white.png" alt="" srcset="">
                </a>
                <a href="/" class="menu-logo logo-black">
                    <img src="<?= get_template_directory_uri(); ?>/assets/logo.png" alt="" srcset="">
                </a>
                <div class="nav-breadcrumb">
                <button class="menu-button" id="menu-button" type="button" aria-label="Menu" aria-controls="main-menu">
                    <i></i>
                    <i></i>
                    <i></i>
                </button>
                </div>
            </div>
            <!-- Swiper -->
            <div class="swiper mySwiper">
                <div class="swiper-wrapper ">
                    <?php 
                        if( get_field('project_images') ): 
                            $project_images = get_field('project_images');
                           
                            foreach($project_images as $project_image): 
                                $image = $project_image['image'];
                                
                    ?>
                        <div class="swiper-slide">
                            <img src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>" />    
                        </div>
                    <?php
                            endforeach;
                        endif;
                    ?>
                    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-pagination"></div>
            </div>
        </section>
        <div class="second_nav-container">
            <section class="second_nav row" >
                <div class="col-sm-6">
                    <a class="team-col team">Team</a>
                </div>
                <div class="col-sm-6">
                    <a class="team-col description">Description</a>
                </div>
            </section>

            <section id="second_nav">
                <div class="team_section collapse show">
                    <div class='container mx-auto mt-5 col-md-10 mt-100'>
                        <div class="header">
                            <div class="title">Our Expert Team</div>
                            <p><small class="text-muted">Lorem Ipsum dolor samet</small></p>
                        </div>
                        <div class="row justify-content-center pb-5">
                            <?php 
                                if( get_field('team_members') ): 
                                    $members = get_field('team_members');
                                   
                                    foreach($members as $team_member): 
                                        $member = $team_member['team'];
                            ?>
                            <div class="card col-md-3 mt-100">
                                <div class="card-content">
                                    <div class="card-body p-0">
                                        <div class="profile"> <img src=" <?= $member['image']['url']; ?>"> </div>
                                        <div class="card-title mt-4"> <?= $member['name']; ?><br /> <small> <?= $member['title']; ?></small> </div>
                                        <div class="card-subtitle">
                                            <p> <small class="text-muted">  <?= $member['description']; ?> </small> </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                        
                            <?php
                                    endforeach;
                                endif;
                            ?>
                        </div>
                    </div>                            
                </div>
                <div class="description_section collapse ">
                    <div class="gallery">
                        <h3 style="text-align: center"><?= the_title(); ?></h3>
                        <?= the_content(); ?>
                    </div>
                    
                </div>
            </section>
        </div>
        <section class="project_navigation">
            <div class="">
                <a href="http://">Previous Project</a>
            </div>
            <div class="">
                <a href="http://">Next Project</a>
            </div>
        </section>
	</main>
   

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + (index + 1) + "</span>";
          },
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
    </script>
    <script>
        $('.team').click(function () {
            $('.description_section').hide();

            $('.team_section').show();

            $('.second_nav').addClass('fix-nav-top');
            document.getElementById("second_nav").scrollIntoView(true);
        })
        $('.description').click(function () {
            $('.team_section').hide();
            $('.second_nav').addClass('fix-nav-top');
            $('.description_section').show();
            document.getElementById("second_nav").scrollIntoView(true);
        })

        $('.menu-button').click(function () {
            $('.swipper-nav').toggleClass('menu-open')
        })
    </script>
<?php
get_footer();
