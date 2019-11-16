<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>Rapid Service</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- <link rel="icon" href="image/favicon.png" type="image/png" sizes="16x16"> -->
	<?php wp_head(); ?>
</head>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5d5a913e5fa5d6ed"></script>

<body class="site-body style-v1">
	<!-- Header -->
	<header class="site-header header-s1 is-sticky">
		<!-- Navbar -->
		<div class="navbar navbar-primary">
			<div class="container">
				<!-- Logo -->
        <?php
          if(has_custom_logo()||is_customize_preview()){
          the_custom_logo();
          }else{
       ?>
				<a class="navbar-brand" href="<?php echo home_url('/'); ?>">
					<img class="logo logo-dark" alt="" src="<?php echo get_template_directory_uri() ?>/image\logo.png" srcset="<?php echo get_template_directory_uri() ?>/image\logo2x.png 2x">

				</a>
          <?php } ?>
				<!-- #end Logo -->
				<!-- HeaderTop -->
				<div class="header-top">
					<ul class="top-contact">
						<li class="t-phone t-phone1 t-phone-s2">
							<span><small><em class="color-secondary">24H</em> EMERGENCY SERVICE</small> <em class="fa fa-phone" aria-hidden="true"></em> <a href="#"><?php echo get_field('emergency_service_call',7) ?></a></span>
						</li>
						<li class="t-phone t-phone1 t-phone-s2">
							<span><small>CALL OFFICE # </small> <em class="fa fa-phone" aria-hidden="true"></em> <a href="#"><?php echo get_field('office_call',7); ?></a></span>
						</li>
						<li class="quote-btn"><a href="<?php echo site_url('request'); ?>" class="btn">Schedule Service Now</a></li>
					</ul>
				</div>
				<!-- #end HeaderTop -->
				<!-- NavBar Trigger -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav" aria-expanded="false">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Q-Button for Mobile -->
					<div class="quote-btn"><a class="btn" href="request-service.php"><span>Request Service</span></a></div>
				</div>
				<!-- #end Trigger -->
				<!-- MainNav -->
				<nav class="navbar-collapse collapse" id="mainnav">
					<ul class="nav navbar-nav">
						<?php
                wp_nav_menu( array(
                     'theme_location' => 'primary',
                     'menu' => 'header',
                     'container' => false,
                     'items_wrap'=>'%3$s',
                 ) );
             ?>
					</ul>
				</nav>
				<!-- #end MainNav -->
			</div>
		</div>
		<!-- #end Navbar -->
