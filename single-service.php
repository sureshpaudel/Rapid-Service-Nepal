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
  							<h1 class="page-title"><?php the_title();?></h1>
  							<p>Each of our staff are licensed, certified plumbers who care your needs.</p>
  						</div>
  					</div>
  				</div>
  			</div>
  			<div class="banner-bg imagebg">
  				<img src="<?php echo get_template_directory_uri() ?>/image\banner-inner.jpeg" alt="">
  			</div>
  		</div>
  		<!-- End Banner -->
  	</header>
  	<!-- End Header -->
  	<!-- Contents -->
  	<div class="section section-contents section-pad">
  		<div class="container">
  			<div class="content row">
  				<div class="row">
  					<div class="col-md-8">
  						<?php the_content(); ?>
  					</div>
  					<!-- Sidebar -->
  					<div class="col-md-4">
  						<div class="sidebar-right">
  							<div class="wgs-box wgs-menus">
  								<div class="wgs-content">
  									<ul class="list list-grouped">
  										<li class="list-heading">
  											<span>Our Services</span>
  											<ul>
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
  										</li>
  									</ul>
  								</div>
  							</div>
  							<div class="wgs-box wgs-quoteform">
  								<h3 class="wgs-heading">Schedule your Service</h3>
  								<?php echo do_shortcode('[contact-form-7 id="174" title="Schedule form"]') ?>
  							</div>
  						</div>
  					</div>
  					<!-- Sidebar #end -->
  				</div>
  			</div>
  		</div>
  	</div>
<?php endwhile; ?>
<?php get_footer(); ?>
