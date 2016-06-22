<?php
/**
 * Шаблон шапки (header.php)
 * @package WordPress
 * @subpackage UmanNews
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<?php /* RSS и всякое */ ?>
	<link rel="alternate" type="application/rdf+xml" title="RDF mapping" href="<?php bloginfo('rdf_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="RSS" href="<?php bloginfo('rss_url'); ?>">
	<link rel="alternate" type="application/rss+xml" title="Comments RSS" href="<?php bloginfo('comments_rss2_url'); ?>">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link href='https://fonts.googleapis.com/css?family=Ubuntu&subset=latin,cyrillic' rel='stylesheet' type='text/css'>

	 <!--[if lt IE 9]>
	 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 <![endif]-->
	<title><?php typical_title(); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<div class="container hedr">
			<div class="home-link" > <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
				<img class="logo" src="http://umannews.in.ua/wp-content/uploads/2014/06/Без-имени-2-300x110.jpg" align="left" height="100">
				<div class="banr d-non">	<?php echo do_shortcode('[smartslider3 slider=2]');?></div><!-- #banr -->
			</div>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2></a>
			<div class="row">
				<div class="col-md-12">
					<nav class="navbar navbar-default">
						<div class="navbar-header">
						<button type="button" class="search-bt" data-toggle="collapse" data-target="#tops" aria-expanded="false">
							<span class=" "><form><input placeholder="Поиск" type="search"></form></span>
						</button>
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topnav" aria-expanded="false">
								<span class="sr-only">Меню</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="topnav">
							<?php $args = array( 
								'theme_location' => 'top',
								'container'=> false,
						  		'menu_id' => 'top-nav-ul',
						  		'items_wrap' => '<ul id="%1$s" class="nav navbar-nav %2$s">%3$s</ul>',
								'menu_class' => 'top-menu',
						  		'walker' => new bootstrap_menu(true)		  		
					  			);
								wp_nav_menu($args);
							?>
							<?php get_search_form(); ?>
						</div>
					</nav>
			</div>
			</div>
		</div>
	</header>