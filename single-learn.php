<?php get_header(); ?>
<?php if(have_posts()) : ?>
<?php while(have_posts()) : the_post(); ?>
<div class="container">
    <div class="row mb-5">
        <h1 class="mb-4 mt-3 text-star" style="font-weight: 700;font-size: 40px;line-height: 48px; color: #000;">Course Details</h1>
        <div class="col-2"></div>
        <div class="col-8">
            <div class="row" style="text-align: center; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; font-weight: 700; background-color: #FF6363; border-radius: 10px; color: aliceblue;">
                <h2 class="card-title mt-3">Course Name: <?php the_title(); ?></h2>
                <div class="row mt-3 mb-3">
                     <div class="col-lg-5 col-md-5 col-sm-12 ">
                        <img src=" <?php the_field('image'); ?>" alt="this is a images course" style="width: 100%; border-radius: 10px;">
                     </div>
                     <div class="col-lg-7 col-md-7 col-sm-12 d-flex text-end">
                        <p class="card-text" style="text-align: left;">Content<br> <?php the_field('content'); ?></p>
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

<div class="container">
            <div class="content_about_2">
            <div class="row">
                <div class="col-12">
                    <h4>All Courses</h4>
                </div>
                <div class="col-12">
                    <div class="row mt-4">

                    <?php
                $getposts = new WP_Query(array(
                    'post_type' => 'learn', 
                    'posts_per_page' => -1
                ));
            ?>
                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
                    <?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
                        <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                            <div class="card">
                                <img style="height: 194px;" src="<?php echo $featured_img_url; ?>" class="card-img-top" alt="this is a team member picture">
                                <div class="card-body">
                                    <p class="card-title"><?php the_field('category'); ?>&nbsp;Course</p>
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
        
<?php get_footer(); ?> 