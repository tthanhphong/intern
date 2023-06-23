<?php 
if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
}
function register_my_menu(){
    register_nav_menu('header-menu', __('Main Menu'));

    if(function_exists('register_sidebar')){
        register_sidebar(array(
            'name' => 'Cột bên',
            'id' => 'sidebar',
        ));
    }
}
add_action('init', 'register_my_menu');

// function
function custom_contact_form($atts) {
    ob_start();
    ?>
    <!-- form contact -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3920.065216231162!2d106.69955537415534!3d10.729453460060192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31753203774ca659%3A0xfe19ba1b6b8e824c!2sMapletree%20Business%20Centre!5e0!3m2!1svi!2s!4v1682504732780!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 pt-5">
                    <div class="row text-center justify-content-center">
                        <h1 style="
                            font-style: normal;
                            font-weight: 700;
                            font-size: 50px;
                            line-height: 68px;
                            letter-spacing: -1px;">Contact Us</h1>
                    </div>
                        <div class="row justify-content-center pt-2">
                            <div class="col-12 col-md-9">
                                <form method="post" action="">
                                    <div class="row">
                                        <div class="col">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col">
                                            <input type="text" name="subject" class="form-control" placeholder="Subject"required>
                                        </div>
                                    </div>

                                    <div class="row mt-4">
                                        <div class="col">
                                            <textarea class="form-control" name="message" rows="3" placeholder="How can we help?"></textarea>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col text-center">
                                            <button type="submit" name="contact" class="btn" style="padding: 0.8rem 4rem; background-color: #FF6363; color: #fff;">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    return ob_get_clean();
}
add_shortcode('contact_form', 'custom_contact_form');


//slick slider 1
function custom_course_query() {
    $getposts = new WP_Query(array(
        'post_type' => 'learn', 
        'posts_per_page' => 10,
        'tax_query' => array(
            array(
                'taxonomy' => 'learn-categories',
                'field' => 'slug',
                'terms' => 'basic', 
            )
        )
    ));
    return $getposts;
}

// action hook index
function hook_javascript(){
?>  
<script>
    // alert('Wellcome to my website!');
</script>
<?php   
}
add_action('script_notification', 'hook_javascript');

// filter hook index
// function change_the_title( $output ) {
//     $output = '<h2>All courses for free...</h2>';
//     return $output; 
// }
// add_filter( 'filter_hook_title', 'change_the_title' );

/**
 * Custom Gutenberg Block
 */
require get_template_directory() . '/inc/gutenberg.php';

function alecadd_gutenberg_blocks(){
    wp_register_script('custom-cta-js', get_template_directory_uri() . '/js/gutenberg-cta-block.js', array('wp-blocks'));

    register_block_type('alecaddd/custom-cta', array(
        'editor_script' => 'custom-cta-js'
    ));
}

add_action('init', 'alecadd_gutenberg_blocks');