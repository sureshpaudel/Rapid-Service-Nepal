<?php
//template name:Services Page
get_header();
 ?>
<div class="banner banner-static banner-medium has-bg lighter-filter">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">
                <div class="banner-text light style-modern">
                    <h1 class="page-title">
                        <?php echo get_field('banner_title'); ?>
                    </h1>
                    <p>
                        <?php echo get_field('banner_content'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-bg imagebg">
        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
    </div>
</div>
<!-- End Banner -->
</header>
<!-- End Header -->
<!-- Service Section -->
<div class="section section-services section-pad">
    <div class="container">
        <div class="content row">
            <!-- Feature Row  -->
            <div class="row row-feature row-column mt-x5">
                <?php
                $args=array(
                  'post_type'=>'service',
                  'posts_per_page'=>-1,
                  'orderby'=>'title',
                  'order'=>'ASC'
                );
                $services= new WP_Query($args);
                while($services->have_posts()):$services->the_post();
               ?>
                <div class="col-md-4 col-sm-6">
                    <!-- feature box -->
                    <div class="feature boxed feature-s6">
                        <a href="service.php">
                            <div class="fbox-photo">
                                <img src="<?php echo the_post_thumbnail_url();?>" alt="">
                            </div>
                        </a>
                        <div class="fbox-content">
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <p>
                                <?php echo wp_trim_words(get_the_content(),15,'...') ?>
                            </p>
                            <p><a href="<?php the_permalink(); ?>" class="btn-link link-arrow-sm">Read More</a></p>
                        </div>
                    </div>
                    <!-- End Feature box -->
                </div>
                <?php  endwhile;wp_reset_postdata();?>
            </div>
            <!-- Feture Row  #end -->
            <div class="gaps size-lg"></div>
            <div class="wide-md center">
                <p class="lead">
                    <?php echo get_field('emergency_message'); ?>
                </p>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
