<!-- Call Action -->
<?php $currentId = get_the_ID();?>
<div class="call-action bg-primary">
  <div class="cta-block">
    <div class="container">
      <div class="content row">

        <div class="cta-sameline">
          <h3><?php echo get_field('quote_conent',7); ?></h3>
          <a class="btn btn-outline" href="<?php echo site_url('request'); ?>">Get A Quote</a>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- End Section -->
<!-- Footer Widget-->
<div class="footer-widget section-pad-md">
  <div class="container">
    <div class="row">

      <div class="widget-row row">
        <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
          <!-- Each Widget -->
          <div class="wgs wgs-footer wgs-menu">
            <h5 class="wgs-title">Our Services</h5>
            <div class="wgs-content">
              <ul class="menu">
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
  												<li class="<?php if($currentId==get_the_ID()){echo 'current';} ?>"><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></li>
  												  <?php  endwhile;wp_reset_postdata();?>
              </ul>
            </div>
          </div>
          <!-- End Widget -->
        </div>
        <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
          <!-- Each Widget -->
          <div class="wgs wgs-footer wgs-menu">
            <h5 class="wgs-title">Quick Links</h5>
            <div class="wgs-content">
              <ul class="menu">
                <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
                <li><a href="<?php echo site_url('aboutus'); ?>">About Us</a></li>
                <li><a href="#">Testimonial</a></li>
                <li><a href="#">Client Resources</a></li>
                <li><a href="<?php echo site_url('blog'); ?>">Our Blog</a></li>
                <li><a href="<?php echo site_url('contact'); ?>">Contact</a></li>
              </ul>
            </div>
          </div>
          <!-- End Widget -->
        </div>
        <div class="footer-col col-md-3 col-sm-6 res-m-bttm">
          <!-- Each Widget -->
          <div class="wgs wgs-footer">
            <h5 class="wgs-title">Company Information</h5>
            <div class="wgs-content">
              <?php echo get_field('company_information',7); ?>

            </div>
          </div>
          <!-- End Widget -->
        </div>
        <div class="footer-col col-md-3 col-sm-6">
          <!-- Each Widget -->
          <div class="wgs wgs-footer">
            <h5 class="wgs-title">Social Media</h5>
            <ul class="social social-v2">
              <li><a href="<?php echo get_field('facebook_link',7); ?>"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
              <li><a href="<?php echo get_field('twitter_link',7); ?>"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
              <li><a href="<?php echo get_field('linkdin_link',7); ?>"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
            </ul>
          </div>
          <!-- End Widget -->
        </div>
      </div><!-- Widget Row -->
    </div>
  </div>
</div>
<!-- End Footer Widget -->
<!-- Copyright -->
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="site-copy col-sm-7">
        <p><?php echo get_field('copyright',7); ?></p>
      </div>
      <div class="site-by col-sm-5 al-right">
        <p>Designed &amp; Developed by <a href="https://nextaussietech.com" target="_blank">Next Aussie Tech</a></p>
      </div>
    </div>
  </div>
</div>
<!-- End Copyright -->

<!-- JavaScript Bundle -->

<!-- End script -->
<?php wp_footer(); ?>
<script>
		$(document).ready(function(){
			$('.team-carousel').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})

		})


	</script>
</body>
</html>
