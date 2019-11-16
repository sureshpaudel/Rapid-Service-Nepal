<?php
//template name: Projects page
get_header();
 ?>
<?php while(have_posts()):the_post(); ?>
<div class="banner banner-static banner-medium has-bg lighter-filter">
    <div class="banner-cpn">
        <div class="container">
            <div class="content row">
                <div class="banner-text light style-modern">
                    <h1 class="page-title">Our Projects</h1>
                    <p>We have done great works in our field.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="banner-bg imagebg">
        <img src="<?php echo get_template_directory_uri() ?>/image/banner-inner.jpeg" alt="">
    </div>
</div>
<!-- End Banner -->
<section class="projects" id="projects">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="sidebar-right">
                    <div class="wgs-box wgs-search">
                        <div class="wgs-content">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Search...">
                                <button class="search-btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="wgs-box boxed bg-secondary light boxed-flat">
                        <div class="wgs-content">
                            <p>
                                <?php echo get_field('emergency_box_content',9); ?>
                            </p>
                            <a href="<?php echo site_url('request'); ?>" class="btn btn-light btn-alt">Request Service</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="javascript:" class="list-group-item heading">
                                Completed Projects
                            </a>
                            <?php
                      $args=array(
                        'post_type'=>'projects',
                        'posts_per_page'=>-1,
                        'orderby'=>'title',
                        'order'=>'ASC',
                        'tax_query' => array(
                            array(
                              'taxonomy'=>'project_category',
                              'field' => 'id',
                              'terms' => array(3),
                            ),
                        ),
                      );
                      $projects= new WP_Query($args);
                      while($projects->have_posts()):$projects->the_post();
                     ?>
                            <a href="<?php the_permalink(); ?>" class="list-group-item">
                                <?php the_title(); ?><span>>></span></a>
                            <?php  endwhile;wp_reset_postdata();?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-group">
                            <a href="javascript:" class="list-group-item heading">
                                Ongoing Projects
                            </a>
                            <?php
                      $args=array(
                        'post_type'=>'projects',
                        'posts_per_page'=>-1,
                        'orderby'=>'title',
                        'order'=>'ASC',
                        'tax_query' => array(
                            array(
                              'taxonomy'=>'project_category',
                              'field' => 'id',
                              'terms' => array(4),
                            ),
                        ),
                      );
                      $projects= new WP_Query($args);
                      while($projects->have_posts()):$projects->the_post();
                     ?>
                            <a href="<?php the_permalink(); ?>" class="list-group-item">
                                <?php the_title(); ?><span>>></span></a>
                            <?php  endwhile;wp_reset_postdata();?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endwhile; ?>
<?php get_footer(); ?>
