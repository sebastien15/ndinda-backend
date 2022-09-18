<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ndinda
 */

?>




<?php 
    if( !function_exists( 'get_id_by_slug' ) ){
        function get_id_by_slug($page_slug) {
            $page = get_page_by_path($page_slug);
            if ($page) {
                return $page->ID;
            } else {
                return null;
            }
        } 
        $homepageId = get_id_by_slug("home-page");
    }else{
        $homepageId = get_id_by_slug("home-page");
    }

    if(get_field('footer_section',$homepageId)):

        $footer_section = get_field('footer_section',$homepageId);

        $social_links= $footer_section['social_links'];
        $copyright_text = $footer_section['copyright_text'];
        $footer_logo = $footer_section['footer_logo'];
    
?>
<footer class="footer bg-dark">
        <div class="social-links">
            <a href="">
                <img src="<?= get_template_directory_uri(); ?>/assets/facebook.png" alt="" srcset="">
            </a>
            <a href="">
                <img src="<?= get_template_directory_uri(); ?>/assets/linkedin.png" alt="" srcset="">
            </a>
            <a href="">
                <img src="<?= get_template_directory_uri(); ?>/assets/twitter.png" alt="" srcset="">
            </a>
        </div>
        <div class="nav-links">
            <a href="/">home</a>
            <a href="/#project">Projects</a>
            <a href="/#services">Services</a>
            <a href="/contact">Contacts</a>
        </div>
		
        <div class="copyright">
            <h3><?= $copyright_text; ?></h3>
        </div>
        <img src="<?= get_template_directory_uri(); ?>/assets/logo-white.png" class="footer-logo" alt="" srcset="">
    </footer>
	
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
<?php
    endif;
?>


    <!-- <script src="main.js"></script> -->



	<?php wp_footer(); ?>
</body>
</html>
