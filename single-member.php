<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="container">
    <div class="row mb-5">
        <h1 class="mb-4 mt-3 text-star" style="font-weight: 700;font-size: 40px;line-height: 48px; color: #000;">Member Details</h1>
        <div class="col-2"></div>
        <div class="col-8">
            <div class="row" style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight: 700; background-color: #FF6363; border-radius: 10px; color: aliceblue;">
                <div class="row mt-4 mb-4">
                     <div class="col-lg-4 col-md-4 col-sm-12 ">
                        <img src=" <?php the_field('image'); ?>" alt="this is a images course" style="width: 100%; border-radius: 10px; border: 2px solid #fff;">
                     </div>
                     <div class="col-lg-8 col-md-8 col-sm-12 my-auto">
                        <h2 style="text-align: left; padding:0; margin:0;">Name. <?php the_title() ?></h2>
                        <h1 style="text-align: left; padding:0; margin:0; font-size: 2.5rem;">Positon. <?php the_field('position'); ?></h1>
                        <p style="text-align: left; padding:0; margin:0; font-size: 1rem;">Age. <?php the_field('age'); ?></p>
                        <p style="text-align: left; padding:0; margin:0; font-size: 1rem;">Phone. <?php the_field('phone'); ?></p>
                        <p style="text-align: left; padding:0; margin:0; font-size: 1rem;">Adress. <?php the_field('address'); ?></p>   
                    </div>
                </div>    
            </div>
        </div>
        <div class="col-2 d-flex align-items-end">
            
        </div>
    </div>
</div>


<?php endwhile; else : ?>
<?php endif; ?>

<section>
    <div class="container">
            <div class="content_about_2">
            <div class="row">
                <div class="col-12">
                    <h4>All Members</h4>
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

<?php get_footer(); ?>
