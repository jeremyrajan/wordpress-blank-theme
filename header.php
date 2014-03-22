<!doctype html>
<html>
<head>
 	<meta charset="UTF-8">
	<title><?php wp_title('&laquo;',true, 'right'); ?><?php bloginfo('name'); ?></title>
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php bloginfo('template_url'); ?>/images/icons/html.ico" rel="shortcut icon">
	<link href="<?php bloginfo('template_url'); ?>/images/icons/html.png" rel="apple-touch-icon-precomposed">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<meta name="description" content="Just another WordPress site">

	<!--add the stylesheet-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen"/>
	<!--add the stylesheet-->

	<?php if (is_singular() ) wp_enqueue_script('comment_reply'); ?>
	<?php wp_head(); ?>
</head>
<body>
	<div id="main_wrapper">

