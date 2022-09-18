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



    if(get_field('section_one', $homepageId)):

        $section_one = get_field('section_one', $homepageId);

        
        $logo = $section_one['logo'];
?>        
        <nav class="nav">
            <a href="/"> <img src="<?= $logo['url']; ?>" alt="" class="logo"></a>
            <div class="nav-separator">
                <img src="<?= get_template_directory_uri(); ?>/assets/zigzagline.svg" alt="" srcset="">
            </div>
            <div class="nav-links">
                <a href="/">home</a>
                <a href="/project-page">Projects</a>
                <a href="/#services">Services</a>
                <a href="/contact">Contacts</a>
            </div>
        </nav>
<?php 
    endif;
       
?>