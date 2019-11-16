<?php
//template name:FAQ Page
get_header();
 ?>
 <div class="banner banner-static banner-medium has-bg lighter-filter">
 			<div class="banner-cpn">
 				<div class="container">
 					<div class="content row">

 						<div class="banner-text light style-modern">
 							<h1 class="page-title"><?php echo get_field('banner_title'); ?></h1>
 							<p><?php echo get_field('banner_content') ?></p>
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

 	<!--  Content -->
 	<div class="section section-contents section-pad">
 		<div class="container">

 			<div class="content row">

 				<div class="row">
 					<div class="col-md-8 pad-r">
 						<h2>General Questions</h2>
 						<p><?php echo get_field('general_question_content'); ?></p>
 						<!-- FAQ @i -->
            <?php
                  $args=array(
                    'post_type'=>'faq',
                    'posts_per_page'=>-1,
                    'orderby'=>'title',
                    'order'=>'ASC'
                  );
                  $faqs= new WP_Query($args);
                  while($faqs->have_posts()):$faqs->the_post();
                 ?>
 						<div class="faqs faqs-flat">
 							<h3 class="faq-heading"><?php the_title(); ?></h3>
 							<p><?php the_content(); ?></p>
 						</div>
 						<!-- // @s-->
 						  <?php  endwhile;wp_reset_postdata();?>
 						<!-- #end FAQ -->

 						<hr>
 						<h2>Others Questions</h2>
 						<p><?php echo get_field('other_question_content'); ?></p>
 						<!-- Accordion -->
 						<div class="panel-group accordion" id="another" role="tablist" aria-multiselectable="true">
 							<!-- each panel for accordion -->
 							<div class="panel panel-default">
 								<div class="panel-heading" role="tab" id="accordion-i1">
 									<h4 class="panel-title">
 										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i1" aria-expanded="false">
 											<?php echo get_field('accordion1_title') ?>
 											<span class="plus-minus"><span></span></span>
 										</a>
 									</h4>
 								</div>
 								<div id="accordion-pane-i1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i1">
 									<div class="panel-body">
 										<p><?php echo get_field('accordion1_content') ?></p>
 									</div>
 								</div>
 							</div>
 							<!-- each panel for accordion -->
 							<div class="panel panel-default">
 								<div class="panel-heading" role="tab" id="accordion-i2">
 									<h4 class="panel-title">
 										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i2" aria-expanded="false">
 										<?php echo get_field('accordion2_title') ?>
 											<span class="plus-minus"><span></span></span>
 										</a>
 									</h4>
 								</div>
 								<div id="accordion-pane-i2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i2">
 									<div class="panel-body">
 										<p><?php echo get_field('accordion2_content') ?></p>
 									</div>
 								</div>
 							</div>
 							<!-- each panel for accordion -->
 							<div class="panel panel-default">
 								<div class="panel-heading" role="tab" id="accordion-i3">
 									<h4 class="panel-title">
 										<a class="collapsed" role="button" data-toggle="collapse" data-parent="#another" href="#accordion-pane-i3" aria-expanded="false">
 											<?php echo get_field('accordion3_title') ?>
 											<span class="plus-minus"><span></span></span>
 										</a>
 									</h4>
 								</div>
 								<div id="accordion-pane-i3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accordion-i3">
 									<div class="panel-body">
 										<p><?php echo get_field('accordion3_content') ?></p>
 									</div>
 								</div>
 							</div>
 							<!-- end each panel -->
 						</div>
 						<!-- Accordion #end -->
 						<p>If you unable to find the answer please <a href="contact.html">Contact us</a> and we will aim to respond to your email within 24 hours, Although we usually respond much sooner. </p>
 					</div>

 					<!-- Sidebar -->
 					<div class="col-md-4">
 						<div class="sidebar-right">



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


 <?php get_footer(); ?>
