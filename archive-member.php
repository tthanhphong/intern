<?php get_header(); ?>
    <!-- main -->
    <section>
        <div class="container">
            <div class="content_about">
                <div class="row">
                    <div class="col-auto col-lg-6 col-md-6 col-sm-12">
                        <h3>Humble Start</h3>
                        <h4>Explore new ways to engage with brands</h4>
                        <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it <br>
                        <br>    
                        Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because.
                        </p>
                    </div>
                    <div class="col-auto col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                        <a href="#" class="image_about" style="text-align:center;"><img src="<?php bloginfo('template_directory'); ?>/img/about.jpg" alt="This is a image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
             <div class="about_page_2">
                <div class="row">
                        <div class="col-12 mt-5 d-flex justify-content-center items-center">
                            <p style="font-style: normal;
                            font-weight: 400;
                            font-size: 1rem;
                            line-height: 22px;
                            text-align: center;
                            color: #838383;">   
                            Trusted by industry leaders</p>
                        </div>
                        <div class="col-12">
                            <div class="row d-flex justify-content-center items-center mb-5">
                                <div class="col-lg-2 col-md-2 col-sm-4">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo_nike.jpg" alt="this is a logo"></a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo_Cocacola.jpg" alt="this is a logo"></a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo_Disney.jpg" alt="this is a logo"></a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo_Visa.jpg" alt="this is a logo"></a>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-4">
                                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/logo_Google.jpg" alt="this is a logo"></a>
                                </div>
                            </div>
                        </div>
                </div>
             </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="content_about">
                <div class="row">
                    <div class="col-auto col-lg-6 col-md-6 col-sm-12">
                        <h4 style="color:#000;">Humble begenings. Simple philosophy.</h4>
                        <p class="mt-3">Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it <br>
                        <br>    
                        Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because.
                        </p>
                    </div>
                    <div class="col-auto col-lg-6 col-md-6 col-sm-12 d-flex justify-content-end align-items-center">
                        <a href="#" class="image_about" style="text-align:center;"><img src="<?php bloginfo('template_directory'); ?>/img/about_2.jpg" alt="This is a image"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
    <div class="container">
            <div class="content_about_2">
            <div class="row">
                <div class="col-12">
                    <h4>Team Members</h4>
                </div>
                <div class="col-12">
                    <div class="row mt-4">

                    <?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=12&post_type=member'); ?>   
                    <?php global $wp_query; $wp_query->in_the_loop = true; ?> 
                    <?php while($getposts->have_posts()) : $getposts->the_post(); ?>
                        <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>

                        <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                            <div class="card">
                                <img src="<?php echo $featured_img_url; ?>" class="card-img-top" alt="this is a team member picture">
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                    <p class="card-text"><?php the_field('position'); ?></p>
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
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php echo do_shortcode('[contact_form]'); ?>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>