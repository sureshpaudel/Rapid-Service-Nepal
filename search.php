<?php
/*
Template name: News page
*/
get_header();
 ?>
		<section>
			<div class="block">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="shelter-blog">
								<div class="row">
									<?php  while ( have_posts() ) : the_post(); ?>
									<div class="col-4">
										<div class="simple-post">
											<div class="simple-post-detail">
												<ul class="meta">
												</ul>
												<h3><a href="<?php the_permalink(); ?>" title=""><?php echo get_the_title(); ?></a></h3>
												<p><?php echo  wp_trim_words( get_the_content(),35 ); ?></p>
												<a class="readmore" href="<?php the_permalink(); ?>" title="">Read More</a>
											</div>
										</div><!-- Simple Post -->
									</div>
		              <?php endwhile; ?>
								</div>
							</div>
              <br><br>
							<div class="shelter-pagination">
									<?php echo paginate_links(); ?>
								<br><br>
							</div><!-- Shelter Pagination -->
						</div>
					</div>
				</div>
			</div>
		</section>
 <?php
 get_footer(); ?>
