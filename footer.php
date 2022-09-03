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
    if(get_field('footer_section')):

        $footer_section = get_field('footer_section');

        $social_links= $footer_section['social_links'];
        $copyright_text = $footer_section['copyright_text'];
        $footer_logo = $footer_section['footer_logo'];
    
?>
<footer class="footer bg-dark">
        <div class="social-links">
            <a href="">
                <img src="./assets/facebook.png" alt="" srcset="">
            </a>
            <a href="">
                <img src="./assets/linkedin.png" alt="" srcset="">
            </a>
            <a href="">
                <img src="./assets/twitter.png" alt="" srcset="">
            </a>
        </div>
        <div class="nav-links">
            <a href="">home</a>
            <a href="">Projects</a>
            <a href="">Services</a>
            <a href="">Contacts</a>
        </div>
		
        <div class="copyright">
            <h3><?= $copyright_text; ?></h3>
        </div>
        <img src="./assets/logo-white.png" class="footer-logo" alt="" srcset="">
    </footer>
	

<?php
    endif;
?>


    <script src="main.js"></script>



	<?php wp_footer(); ?>
</body>
</html>
