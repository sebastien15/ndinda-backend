<?php /* Template Name: project  */
get_header(); ?>


    <section class="gallery">
        <?php include('./wp-content/themes/ndinda/inc/nav.php'); ?>
        <div class="container">

            <nav class="nav2">
                <div class="nav-links gallery-filter">
                    <span class="filter-item active" data-filter="all">All Projects</span>
                    <span class="filter-item" data-filter="resid">Residential</span>
                    <span class="filter-item" data-filter="apart">Apartments</span>
                    <span class="filter-item" data-filter="mix">Mixed Use</span>
                    <span class="filter-item" data-filter="hosp">Hospitality</span>
                    <span class="filter-item" data-filter="wareh">Warehouse</span>
                    <span class="filter-item" data-filter="renova">Renovations</span>
                    <span class="filter-item" data-filter="furn">Furniture & Interior Design</span>
                </div>
            </nav>


            <div class="row">
                <div class="img-box gallery-item resid">
                    <img src="<?= get_template_directory_uri(); ?>/assets/residential.png" alt="">
                    <div class="img-link"><a href="">Mizero Modern Villa<img src="<?= get_template_directory_uri(); ?>/assets/arrow.svg" class></a></div>
                </div>

                <div class="img-box gallery-item resid">
                    <img src="<?= get_template_directory_uri(); ?>/assets/residential.png" alt="" srcset="">
                    <div class="img-link"><a href="">Mizero Modern Villa<img src="<?= get_template_directory_uri(); ?>/assets/arrow.svg" class></a></div>

                </div>

                <div class="img-box gallery-item resid">
                    <img src="<?= get_template_directory_uri(); ?>/assets/residential.png" alt="" srcset="">
                    <div class="img-link"><a href="">Mizero Modern Villa<img src="<?= get_template_directory_uri(); ?>/assets/arrow.svg" class></a></div>

                </div>

                <div class="img-box gallery-item resid">
                    <img src="<?= get_template_directory_uri(); ?>/assets/residential.png" alt="" srcset="">
                    <div class="img-link"><a href="">Mizero Modern Villa<img src="<?= get_template_directory_uri(); ?>/assets/arrow.svg" class></a></div>

                </div>

            </div>
            <!-- row 1 end -->

            <div class="row">
                <div class="img-box gallery-item apart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/residential.png" alt="" srcset="">
                    <div class="img-link"><a href="">Mizero Modern Villa<img src="<?= get_template_directory_uri(); ?>/assets/arrow.svg" class></a></div>

                </div>
                <div class="img-box gallery-item apart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/residential.png" alt="" srcset="">
                    <div class="img-link"><a href="">Mizero Modern Villa<img src="<?= get_template_directory_uri(); ?>/assets/arrow.svg" class></a></div>

                </div>
                <div class="img-box gallery-item apart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/residential.png" alt="" srcset="">
                    <div class="img-link"><a href="">Mizero Modern Villa<img src="<?= get_template_directory_uri(); ?>/assets/arrow.svg" class></a></div>

                </div>
                <div class="img-box gallery-item apart">
                    <img src="<?= get_template_directory_uri(); ?>/assets/residential.png" alt="" srcset="">
                    <div class="img-link"><a href="">Mizero Modern Villa<img src="<?= get_template_directory_uri(); ?>/assets/arrow.svg" class></a></div>

                </div>

            </div>
            <!-- row 2 end -->
        </div>
    </section>


<?php get_footer(); ?>