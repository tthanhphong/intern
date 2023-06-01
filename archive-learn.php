<?php get_header(); ?>
    <!-- feature -->
    <section>
       <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12">
                <?php
                        $title = '<h2>Academy</h2>';
                        echo apply_filters( 'filter_hook_title', $title );
                    ?>
                        
                        <h3>Over one million designers — from freelancers, to some of the largest companies in the world — use Singular to transform their ideas into incredible products, every day.</h3>
                        <a href="#">academy@singular.com</a>
                    </div>
                <div class="col-lg-4 col-md-4 col-sm-12"> 
                         
                </div>
            </div>
        </div>
       </div>          
    </section>
    
    <!-- slick_1 -->
    <section>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="title mt-3 mb-3">
                        <h3>Basic Course</h3>
                        <a href="<?php echo get_permalink(1448); ?>">Browse all</a>
                </div>
                
                <div class="image-slider">
                    <?php 
                    $getposts = custom_course_query();
                    while ($getposts->have_posts()) : $getposts->the_post(); 
                    ?>
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <div class="image-items">
                            <div class="item">
                                <img src="<?php echo $featured_img_url; ?>" alt="this is a banner">
                            </div>
                            <a href="<?php the_permalink(); ?>"><h3 class="image-title mt-3"><?php the_title(); ?></h3></a>
                            
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

     <!-- slick_2 -->
     <section>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="title mt-3 mb-3">
                        <h3>Advance Course</h3>
                        <a href="<?php echo get_permalink(1445); ?>">Browse all</a>
                </div>
                
                <div class="image-slider">
                <?php
                    $getposts = new WP_Query(array(
                        'post_type' => 'learn', 
                        'posts_per_page' => 10,
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'learn-categories',
                            'field' => 'slug',
                            'terms' => 'advance', // Thay 'theloai1' bằng slug của thể loại bạn muốn hiển thị
                            )
                        )
                    ));
                ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <div class="image-items">
                            <div class="item">
                                <img src="<?php echo $featured_img_url; ?>" alt="this is a banner">
                            </div>
                            <a href="<?php the_permalink(); ?>"><h3 class="image-title mt-3"><?php the_title(); ?></h3></a>
                            
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

     <!-- slick_3 -->
      <section>
        <div class="container">
            <div class="row mt-5 mb-5">
                <div class="title mt-3 mb-3">
                        <h3>Buy Course</h3>
                        <a href="<?php echo get_permalink(1451); ?>">Browse all</a>
                </div>
                
                <div class="image-slider">
                <?php
                    $getposts = new WP_Query(array(
                        'post_type' => 'learn', 
                        'posts_per_page' => 10,
                        'tax_query' => array(
                            array(
                            'taxonomy' => 'learn-categories',
                            'field' => 'slug',
                            'terms' => 'buy', // Thay 'theloai1' bằng slug của thể loại bạn muốn hiển thị
                            )
                        )
                    ));
                ?>
                    <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <div class="image-items">
                            <div class="item">
                                <img src="<?php echo $featured_img_url; ?>" alt="this is a banner">
                            </div>
                            <a href="<?php the_permalink(); ?>"><h3 class="image-title mt-3"><?php the_title(); ?></h3></a>
                            
                        </div>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        </div>
    </section>

    <!-- newsletter -->
    <main>
    <section>
        <div class="container mb-5">
            <div class="newsletter">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                            <h3>Join our mailing list</h3>
                            <input type="email" placeholder="Email Adress" id="email">
                            <p>By joining to our newsletter you’re agreeing to our <br> Terms & Conditions</p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12-none d-flex justify-content-center mx-auto my-auto">
                            <a href="#" class="img-email"><img src="<?php bloginfo('template_directory'); ?>/img/long_arrow.png" alt="this is backgroung"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    </main>
    <?php echo do_shortcode('[contact_form]'); ?>
<?php get_footer(); ?>