<!DOCTYPE html>
<html <?php language_attributes();?>>

<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head();?>

<?php

wp_enqueue_style(
    'bootstrap-css',
    get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css',
    array(), '3.3.7', 'all'
);

wp_enqueue_style(
    'font-awesome',
    get_template_directory_uri() . '/assets/fonts/font-awesome.min.css'
);

wp_enqueue_style(
    'user-css',
    get_template_directory_uri() . '/assets/css/user.css'
);

?>

	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,400italic">
</head>

<body <?php body_class();?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'product-theme');?></a>

	<header id="masthead" class="site-header" role="banner">

		<nav class="navbar navbar-default">
	        <div class="container">
	            <div class="navbar-header">
	            		<a class="navbar-brand navbar-link" href="<?php echo esc_url(home_url('/')); ?>"><i class="glyphicon glyphicon-phone"></i>Mobile App</a>

	                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	            </div>

<?php
wp_nav_menu(array(
    'menu' => 'primary',
    'theme_location' => 'primary',
    'depth' => 2,
    'container' => 'div',
    'container_class' => 'collapse navbar-collapse',
    'container_id' => 'navbar',
    'menu_class' => 'nav navbar-nav pull-right',
    'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
    'walker' => new wp_bootstrap_navwalker())
);
?>

	        </div>
	    </nav>
	</header><!-- #masthead -->

	<?php if (is_home()): ?>
		<div id="content" class="">
	<?php else: ?>
		<div id="content" class="container">
	<?php endif;?>
