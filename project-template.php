<?php /* Template Name: project  */

get_header(); 

$current_url = strtok($_SERVER["REQUEST_URI"], '?');

$categories = getCategories();

$category_slug = $_GET['category'];
if($category_slug != null){
    $args=array(
        'post_type' => 'project',
        'posts_per_page'=>-1,
        'paged' => 1,
        'orderby' => 'date',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',    // taxonomy name
                'field' => 'slug',        	// term_id, slug or name
                'terms' => $category_slug     // term id, term slug or term name
            )
        ),
        'order'   => 'DESC'
    );
}else{
    $args=array(
        'post_type' => 'project',
        'posts_per_page'=>-1,
        'paged' => 1,
        'orderby' => 'date',
        'order'   => 'DESC'
    );
}


$projects = New wp_query($args);

?>


    <section class="gallery">
        <?php include('./wp-content/themes/ndinda/inc/nav.php'); ?>
        <div class="container">

            <nav class="nav2">
                <div class="nav-links gallery-filter">
                    <a class="filter-item <?= $category_slug == null ? 'active' : ''; ?>" href="<?= $current_url; ?>">All Projects</a>
                    <?php
                        
                        foreach ($categories as $category) :
                            $name = $category->cat_name;
                            $slug = $category->slug;

                            $activeClass ='';


                            if( $category_slug != null && $slug == $category_slug ){
                                    $activeClass = 'active';
                            }

                    ?>

                        <a class="filter-item <?= $activeClass; ?>" href="<?= $current_url; ?>/?category=<?= $slug; ?>"><?= $name == null ? 'All Projects' : $name; ?></a>
                    <?php
                        $count++;
                        endforeach;
                    ?>
                    
                </div>
            </nav>


            <div class="row projects-container">
                <?php
                                                            
                    if( $projects->have_posts() ) :
        
                            while ( $projects->have_posts() ) :
                                    $projects->the_post();
                                    $postId = get_the_ID();

                ?>

                    <div class="img-box gallery-item resid" >
                        <img src="<?= the_post_thumbnail_url(); ?>" alt="">
                        <div class="img-link"><a href="<?= the_permalink(); ?>"><?= the_title(); ?><img src="<?= get_template_directory_uri(); ?>/assets/arrow.svg" /></a></div>
                    </div>

                <?php
                        endwhile;
                        wp_reset_postdata();
                        wp_reset_query( );
                endif;
                ?>

            </div>
           
        </div>
    </section>
   


<?php get_footer(); ?>