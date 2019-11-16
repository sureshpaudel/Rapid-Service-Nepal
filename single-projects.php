<?php
get_header();
 ?>
<?php while (have_posts()):the_post();
 $currentId = get_the_ID();
  ?>
<div class="banner banner-static banner-medium has-bg lighter-filter">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">
                <div class="banner-text light style-modern">
                    <h1 class="page-title">
                        <?php echo get_field('banner-title'); ?>
                    </h1>
                    <p>
                        <?php the_title(); ?>
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
<section class="project-detail" id="project-detail">
    <div class="container">
        <div class="row" style="padding: 25px 0">
            <div class="col-md-8">
                <?php the_content(); ?>
            </div>
            <div class="col-md-4">
                <div class="project-number">
                    <ul>
                        <li>Client&nbsp;&nbsp;:<span>
                                <?php echo get_field('client') ?></span></li>
                        <li>Location&nbsp;&nbsp;:<span>
                                <?php echo get_field('location') ?></span></li>
                        <li>Scope Of Work&nbsp;&nbsp;:<span>
                                <?php echo get_field('scope_of_work') ?></span></li>
                        <li>Date&nbsp;&nbsp;:<span>
                                <?php echo get_field('date') ?></span></li>
                        <li>Mechanic&nbsp;&nbsp;:<span>
                                <?php echo get_field('mechanic') ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Content Section -->
        <div class="section section-contents section-pad bg-light">
            <div class="container">
                <div class="content row">
                    <div class="wide-md text-center">
                        <h2>Photo Gallery</h2>
                    </div>
                    <div class="clear"></div>
                    <div class="gaps size-md"></div>
                    <!-- Gallery -->
                    <div class="gallery gallery-col3 gallery-filled gallery-lightbox hover-zoom">
                        <ul class="gallery-list">
                            <?php
              $i=0;
                $args= array(
               'post_type'=>'gallery',
               'posts_per_page'=>-1,
               'orderby'=>'title',
               'order'=>'ASC'
               );
              $gallerys= new WP_Query($args);
              while($gallerys->have_posts()):$gallerys->the_post();
              ?>
                            <li>
                                <?php
                  $id_image= get_field('image_zoom');
                  $image= wp_get_attachment_image_src($id_image, 'zoom');
                ?>
                                <a href="<?php echo $image[0]; ?>">
                                    <div class="gallery-item">
                                        <?php
                          $id_image= get_field('image_zoom');
                          $image= wp_get_attachment_image_src($id_image, 'zoom');
                          ?>
                                        <img src="<?php echo $image[0]; ?>" alt="Photo Title"></div>
                                </a>
                            </li>
                            <?php   endwhile;wp_reset_postdata();?>
                        </ul>
                    </div>
                    <!-- Gallery #End -->
                </div>
            </div>
        </div>
        <!-- End Section -->
    </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
