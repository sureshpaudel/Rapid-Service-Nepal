<?php
//Template name:Request page
get_header();
?>
<div class="banner banner-static banner-medium has-bg lighter-filter">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
						<div class="banner-text light style-modern">
							<h1 class="page-title"><?php echo get_field('banner-title'); ?></h1>
							<p><?php echo get_field('banner-content'); ?></p>
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

	<div class="section section-contents section-freequote section-pad">
		<div class="container">
			<div class="row">

				<?php echo do_shortcode('[caldera_form id="CF5d89d4a1043a1"]') ?>
			</div>
		</div>
	</div>
<?php get_footer(); ?>
