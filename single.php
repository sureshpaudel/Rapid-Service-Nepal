<?php
get_header();
 ?>
 <?php while (have_posts()):the_post();
  ?>
<div class="banner banner-static banner-medium has-bg lighter-filter">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
						<div class="banner-text light style-modern">
							<h1 class="page-title">ALL LATEST NEWS</h1>
							<p><?php the_title(); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="<?php echo get_template_directory_uri() ?>/image/banner-inner.jpeg" alt="">
			</div>
		</div>
		<!-- End Banner -->
	</header>
	<!-- End Header -->

	<!-- Content -->
	<div class="section section-blog section-pad">
		<div class="container">
			<div class="content row">
				<div class="blog-wrapper row">
					<div class="col-md-8 res-m-bttm">
						<div class="post post-single">
							<div class="post-thumbs">
                <?php
          $id_image= get_field('blog_image');
          $image= wp_get_attachment_image_src($id_image, 'blog');
          ?>
          <img src="<?php echo $image[0]; ?>">
							</div>
							<div class="post-meta">
								<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em><?php echo get_the_date('j'); ?> <?php echo get_the_date('M'); ?>, <?php echo get_the_date('Y'); ?></span>
							</div>
							<div class="post-entry">
								<h1><?php the_title(); ?></h1>
								<p><?php the_content(); ?></p>
							</div>
                <!-- Go to www.addthis.com/dashboard to customize your tools -->
                <div class="addthis_inline_share_toolbox_ciog"></div>
						</div>
					</div>
					<!-- Sidebar -->
					<div class="col-md-4">
								<?php get_sidebar(); ?>
                <div class="wgs-box boxed boxed-flat">
  								<div class="wgs-content">
  									<h5>Contact Information</h5>
  									<p><strong>Rapid Services</strong></p>
  									<?php echo get_field('address',19); ?>
  									<p><strong>Contact Number</strong></p>
  									<?php echo get_field('contact_number',19);?>
  									<p><strong>Office Hours</strong><p>
  										<?php echo get_field('office_hour',19); ?>
  								</div>
  							</div>
                <div class="wgs-box boxed bg-secondary light boxed-flat">
   								<div class="wgs-content">
   									<p><?php echo get_field('emergency_box_content',9); ?></p>
   									<a href="<?php echo site_url('request'); ?>" class="btn btn-light btn-alt">Request Service</a>
   								</div>
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
