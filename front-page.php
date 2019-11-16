<?php
//template name:Front Page template
get_header(); ?>
<!-- Banner/Slider -->
<div id="slider" class="banner banner-slider carousel slide carousel-fade">
  <!-- Wrapper for Slides -->
  <div class="carousel-inner">
    <?php
    $i=0;
      $args= array(
     'post_type'=>'banner',
     'posts_per_page'=>-1,
     'orderby'=>'title',
     'order'=>'ASC'
     );
    $banners= new WP_Query($args);
    while($banners->have_posts()):$banners->the_post();
    ?>
    <div class="item <?php if($i==0) {echo "active";} $i++;?>
    ">
      <div class="fill" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>);">
        <div class="banner-content">
          <div class="container">
            <div class="row">
              <div class="banner-text style-modern al-left pos-right light">
                <div class="animated fadeIn">
                  <h3 class="page-title"><?php the_title(); ?></h3>
                  <p><?php the_content(); ?></p>
                  <p class="more-cta"><a href="<?php echo site_url('services'); ?>" class="btn btn-light btn-outline">Our Services</a> <a href="<?php echo site_url('request'); ?>" class="btn btn-alt">Request Service</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php   endwhile;wp_reset_postdata();?>
    <!-- // -->
  </div>
  <!-- Arrow Controls -->
  <a class="left carousel-control" href="#slider" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#slider" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- #end Banner/Slider -->
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
                'posts_per_page'=>3,
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
              <h3><?php the_title(); ?></h3>
              <p><?php echo wp_trim_words(get_the_content(),15,'...') ?></p>
              <p><a href="<?php the_permalink(); ?>" class="btn-link link-arrow-sm">Read More</a></p>
            </div>
          </div>
          <!-- End Feature box -->
        </div>
         <?php  endwhile;wp_reset_postdata();?>
      </div>
      <!-- Feture Row  #end -->
        </div>
    </div>
</div>
<!-- End Section -->

<!-- Content -->
<div class="section section-content section-pad bg-light">
<div class="container">
  <div class="content row">

    <div class="row">
      <div class="col-md-8 col-sm-12 pad-r-md res-m-bttm-lg">
        <?php echo get_field('services_content') ?>
        <p><a href="<?php echo site_url('services'); ?>" class="btn btn-primary">View Our Services</a></p>
      </div>
      <div class="col-md-4 col-sm-12">
        <!-- Form Widget -->
        <div class="wgs-box wgs-quoteform has-bg light light-filter">
          <h3 class="wgs-heading"><strong>Schedule Your Service</strong></h3>
          <div class="wgs-content form1">
            <?php echo do_shortcode('[contact-form-7 id="174" title="Schedule form"]') ?>
          </div>
          <div class="wgs-image-bg imagebg">
            <img src="<?php echo get_template_directory_uri() ?>/image\form-bg.jpeg" alt="">
          </div>
        </div>
        <!-- #end Form Widget -->
      </div>
    </div>
  </div>
</div>
</div>
<!-- End Content -->

<!-- Call Action -->
<div class="call-action cta-small has-parallax bg-secondary"
<?php
 $id_image= get_field('emergency_bg');
 $image= wp_get_attachment_image_src($id_image, '');
 ?>
 style="background-image: url('<?php echo $image[0]; ?>');">
<div class="cta-block">
  <div class="container">
    <div class="content row">
      <div class="wide-md center">
        <?php echo get_field('emergency_content') ?>
        <div class="gaps size-xs"></div>
        <a href="<?php echo site_url('request'); ?>" class="btn btn-light btn-alt">Contact Us</a>
      </div>

    </div>
  </div>
</div>
</div>
<!-- End Call Action -->

<!-- Content -->
<div class="section section-content section-pad bg-light">
<div class="container">
  <div class="content row">

    <div class="row row-vm">
      <div class="col-sm-6 res-s-bttm pad-r">
        <?php
								$id_image= get_field('about-image');
								$image= wp_get_attachment_image_src($id_image, 'about');
								?>
								<img src="<?php echo $image[0]; ?>" alt="">
      </div>
      <div class="col-sm-6 pad-l">
        <h5 class="heading-sm-lead">About Us</h5>
        <?php echo get_field('about_us_content') ?>
        <a href="<?php echo site_url('aboutus');?>" class="btn-link link-arrow-sm">Know More About Us</a>
      </div>
    </div>
    <!-- // -->
    <div class="gaps size-lg"></div>


  </div>
</div>
</div>
<!-- End Content -->

<!-- Testimonials -->
<div class="section section-quotes section-pad has-bg dark-filter light">
<div class="container">
  <div class="content row">
    <h2 class="center">What Our Customers Say</h2>
    <div class="testimonials style-v1">
      <div id="testimonial" class="quotes-slider wide-sm">
        <div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true" data-navs="false">
          <?php
                $args=array(
                  'post_type'=>'testimonial',
                  'posts_per_page'=>-1,
                  'orderby'=>'title',
                  'order'=>'ASC'
                );
                $testimonials= new WP_Query($args);
                while($testimonials->have_posts()):$testimonials->the_post();
               ?>
          <div class="item center">
            <!-- Each Quotes -->
            <div class="quotes">
              <div class="quotes-text">
                <p><?php the_content(); ?></p>
              </div>
              <div class="profile">
                <h5><?php the_title(); ?></h5>
              </div>
            </div>
            <!-- End Quotes -->
          </div>
          <!-- End Slide -->
          <?php  endwhile;wp_reset_postdata();?>
        </div>
        <!-- End Slide -->
      </div>
    </div>
  </div>
</div>
<div class="section-bg imagebg fixed-bg">
  <img src="<?php echo get_template_directory_uri() ?>/image\plx-dark.jpeg" alt="">
</div>
</div>
<!-- End Section -->
<?php get_footer();
   ?>
