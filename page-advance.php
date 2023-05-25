<?php get_header(); ?>
<div class="container">
            <div class="content_about_2">
            <div class="row">
                <div class="col-12">
                    <h4>All Advance Courses</h4>
                </div>
                <div class="col-12">
                    <div class="row mt-4">

                    <?php
                $getposts = new WP_Query(array(
                    'post_type' => 'learn', 
                    'posts_per_page' => -1, 
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'learn-categories',
                            'field' => 'slug',
                            'terms' => 'advance', 
                        )
                    )
                ));
            ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                            <div class="card">
                                <img src="<?php echo $featured_img_url; ?>" class="card-img-top" alt="this is a team member picture">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                </div>  
                            </div>
                            </a>
                        </div>
                        <?php endwhile; wp_reset_postdata(); ?>

                    </div>

                </div>
            </div>
            </div>
        </div>
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
<?php get_footer(); ?>