<?php /* Template Name: contact  */
get_header(); ?>


    <section class="contact gallery">
        <?php include('./wp-content/themes/ndinda/inc/nav.php'); ?>
        <div class="row">
          <div class="col-md-6 col-sm-12 contact-col-1">
            <h5 class="text-center">STAY IN TOUCH</h5>
            <p class="text-center contact-description">For any inquiry, question or feedback send us a message and we will get back to you.</p>
            <img src="<?= get_template_directory_uri(); ?>/assets/contact-zigzagline.png" alt="" srcset="" class="contact-zig-zagline" />
          </div>
          <div class="col-md-6 col-sm-12 bg-dark">
            <?php echo apply_shortcodes( '[contact-form-7 id="135" title="Contact form 1"]' ); ?>
          </div>
        </div>
    </section>


<?php get_footer(); ?>