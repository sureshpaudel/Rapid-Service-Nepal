<?php
get_header(); ?>
<div class="banner banner-static banner-medium has-bg lighter-filter">
			<div class="banner-cpn">
				<div class="container">
					<div class="content row">
						<div class="banner-text light style-modern">
							<h1 class="page-title">ALL LATEST NEWS</h1>
							<p>To ventore veritatis et quasi architecto beatae vitae dicta et quasi architecto beatae vitae incid.</p>
						</div>
					</div>
				</div>
			</div>
			<div class="banner-bg imagebg">
				<img src="<?php echo the_post_thumbnail_url(); ?>" alt="">
			</div>
		</div>
		<!-- End Banner -->
	</header>
	<!-- End Header -->
	<!-- Content -->
	<div class="section section-blog section-pad">
		<div class="container">
			<div class="content row">
				<div class="row">
					<div class="col-md-8">
						<!-- Blog Post Loop -->
						<div class="row">
							<ul class="blog-posts post-col2">
								<?php
			                $args=array(
			                  'post_type'=>'post',
			                  'orderby'=>'title',
			                  'order'=>'ASC'
			                );
			                $posts= new WP_Query($args);
			                while($posts->have_posts()):$posts->the_post();
			               ?>
							<li class="post post-loop col-md-6">
								<div class="post-thumbs">
									<a href="<?php the_permalink(); ?>">	<?php
						$id_image= get_field('blog_image');
						$image= wp_get_attachment_image_src($id_image, 'news');
						?>
						<img src="<?php echo $image[0]; ?>"></a>
								</div>
								<div class="post-entry">
									<div class="post-meta">
										<span class="pub-date"><em class="fa fa-calendar" aria-hidden="true"></em> 22 Sep, 2017 </span>
									</div>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p><?php echo wp_trim_words(get_the_content(),20,'...') ?></p>
									<a class="btn-link link-arrow-sm" href="<?php the_permalink(); ?>">Read More</a>
								</div>
							</li>
							 <?php  endwhile;wp_reset_postdata();?>
						</ul>
						</div>
						<div class="clear"></div>
						<div class="pagenate">
						<?php echo paginate_links(); ?>
						<!-- End Blog Post -->
					</div>
					</div>
					<!-- Sidebar -->
					<div class="col-md-4">
								<?php get_sidebar(); ?>
						</div>
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
								</div>
							</div>
						</div>
					</div>
					<!-- Sidebar #end -->
				</div>
			</div>
		</div>
	</div>
	<!-- End Content -->

	<!-- Call Action -->

<?php get_footer(); ?>
