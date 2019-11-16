<?php
//template name:About us Page
get_header();
 ?>
 <?php while (have_posts()):the_post();
  ?>
 <div class="banner banner-static banner-medium has-bg lighter-filter">
 			<div class="banner-cpn">
 				<div class="container">
 					<div class="content row">
 						<div class="banner-text light style-modern">
 							<h1 class="page-title"><?php echo get_field('banner_title'); ?></h1>
 							<p><?php echo get_field('banner-content'); ?></p>
 						</div>
 					</div>
 				</div>
 			</div>
 			<div class="banner-bg imagebg">
 				<img src="<?php echo the_post_thumbnail_url();?>" alt="">
 			</div>
 		</div>
 		<!-- End Banner -->
 	</header>
 	<!-- End Header -->
 	<!-- Content -->
 	<div class="section section-contents section-pad">
 		<div class="container">
 			<div class="content row">
 				<div class="row">
 					<div class="col-md-8">
 						<p class="lead"><?php echo the_content(); ?></p>
 						<hr>
 						<!-- Content Section -->
 	<div class="section section-contents section-pad">
 		<div class="container">
 			<div class="content row">
 				<div class="wide-xs center">
 					<h2>Meet Our Staff</h2>
 				</div>
 				<!-- Teams -->
 				<div class="row row-column row-team-member owl-carousel team-carousel">
          <?php
                $args=array(
                  'post_type'=>'team',
                  'posts_per_page'=>-1,
                  'orderby'=>'title',
                  'order'=>'ASC'
                );
                $teams= new WP_Query($args);
                while($teams->have_posts()):$teams->the_post();
               ?>
 					<div class="col-md-12 col-xs-12">
 						<!-- Team Profile -->
 						<div class="team-member team-s1">
 							<div class="team-photo">
 								<img alt="" src="<?php echo the_post_thumbnail_url(); ?>">
 							</div>
 							<div class="team-info">
 								<h4 class="name"><?php the_title(); ?></h4>
 								<p class="sub-title"><?php the_content(); ?></p>
 							</div>
 						</div>
 						<!-- Team #end -->
 					</div>
        <?php  endwhile;wp_reset_postdata();?>s
 				</div>
 				<!-- Teams #end -->
 			</div>
 		</div>
 	</div>
 	<!-- End Section -->
 					</div>
 					<!-- Sidebar -->
 					<div class="col-md-4">
 						<div class="sidebar-right">
              <div class="shelter-search">
                        <a href="#" title=""></a>
                        <form method="get" id="searchform" action="<?php bloginfo('url') ?>">
                            <input type="search" value="<?php the_search_query();?> " name="s" id="s"  placeholder="Enter Your Search keywords"  >
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
 							<div class="wgs-box boxed bg-secondary light boxed-flat">
 								<div class="wgs-content">
 									<p><?php echo get_field('emergency_box_content'); ?></p>
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
