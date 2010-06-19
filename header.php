<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_directory'); ?>/reset-fonts-grids.css">
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!--[if IE]><link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/ie.css" type="text/css" media="screen" /><![endif]-->
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="/favicon.ico">

<?php wp_head(); ?>

</head>

<body>
<div id="doc3" class="yui-t5">
	<div id="hd">
		<div id="logo">
		<a href="<?php echo get_option('home'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/mv_ongreen.jpg" alt="<?php bloginfo('name'); ?>" border="0"></a>
		<!--<h2><?php bloginfo('description'); ?></h2>-->
		</div>
		<div id="nav">
		<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar('Top Navigation') ) : ?>
			<ul>
				<?php wp_list_pages('title_li=&depth=1'); ?>
			</ul>
		<?php endif; ?>
		</div>
	</div>

