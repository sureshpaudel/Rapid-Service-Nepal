<?php
//template name:Contact Page
get_header();
 ?>

 <div class="banner banner-static banner-medium has-bg lighter-filter has-bg-image">
 			<div class="banner-cpn">
 				<div class="container">
 					<div class="content row">

 						<div class="banner-text light style-modern">
 							<h1 class="page-title"><?php echo get_field('banner_heading'); ?></h1>
 							<p><?php echo get_field('banner_content'); ?></p>
 						</div>

 					</div>
 				</div>
 			</div>
 			<div class="banner-bg imagebg bg-image-loaded" style="background-image: url('<?php echo the_post_thumbnail_url();?>/image/banner-inner.jpg');">
 				<img src="<?php echo get_template_directory_uri() ?>/image/banner-inner.jpg" alt="">
 			</div>
 		</div>
 		<!-- End Banner -->
 	</header>
 	<!-- End Header -->
 	<!-- Content -->
 	<div class="section section-contents section-contact section-pad">
 		<div class="container">
 			<div class="content row">

 				<div class="contact-content row">
 					<div class="drop-message col-md-8 pad-r res-m-bttm">
 						<h2>Contact Information</h2>
 						<div class="row">
 							<div class="col-sm-5 res-s-bttm-sm">
 								<p><strong>Rapid Service</strong></p>
                <?php echo get_field('address') ?>
 							</div>
 							<div class="col-sm-4 res-s-bttm-sm">
 								<p><strong>Contact Number</strong></p>
                <?php echo get_field('contact_number') ?>
 							</div>
 							<div class="col-sm-3">
 								<p><strong>Office Hours</strong></p>
                <?php echo get_field('office_hour') ?>
 							</div>
 						</div>
 						<div class="gaps size-xs"></div>
 						<div class="clear"></div>
 						<?php echo do_shortcode('[contact-form-7 id="157" title="Contact form 1"]') ?>
 					</div>
 					<div class="contact-maps col-md-4">
 						<!-- Map -->
 						<iframe src="<?php echo get_field('map_link') ?>" width="370" height="630" frameborder="0" style="border:0" allowfullscreen></iframe>

 						<!-- End map -->
 					</div>
 				</div>

 			</div>
 		</div>
 	</div>

 <?php get_footer(); ?>
